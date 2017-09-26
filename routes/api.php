<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


use Illuminate\Support\Facades\Validator;

Route::get('/list', function () {
    $users = \App\User::all();
    return json_encode($users);
});
Route::get('/add', function (\Illuminate\Http\Request $request) {
    $validator = Validator::make($request->all(), [
        'nama' => 'required',
        'email' => 'required|email',
    ]);

    $result = array();

    if($validator->fails()) {
        $result['status'] = false;
        $result['error'] = 'Bad Parameter';
        return json_encode($result);
    } else {
        $nama = $request->nama;
        $email = $request->email;
        $user = \App\User::create([
            'nama' => $nama,
            'email' => $email,
        ]);

        $result['status'] = true;
        $result['result'] = $user;
        return json_encode($result);
    }
});
Route::get('/edit', function (\Illuminate\Http\Request $request) {
    $validator = Validator::make($request->all(), [
        'nama' => 'required',
        'email' => 'required|email',
        'id' => 'required|integer',
    ]);

    $result = array();

    if($validator->fails()) {
        $result['status'] = false;
        $result['error'] = 'Bad Parameter';
        return json_encode($result);
    } else {
        $id = $request->id;
        $nama = $request->nama;
        $email = $request->email;
        $user = \App\User::find($id);

        if($user != null) {
            $action = $user->update([
                'nama' => $nama,
                'email' => $email,
            ]);

            $result['status'] = $action;
            $result['result'] = \App\User::find($id);
            return json_encode($result);
        } else {
            $result['status'] = false;
            $result['error'] = 'User not Found!';
            return json_encode($result);
        }
    }
});
Route::get('/delete', function (\Illuminate\Http\Request $request) {
    $validator = Validator::make($request->all(), [
        'id' => 'required|integer',
    ]);

    $result = array();

    if($validator->fails()) {
        $result['status'] = false;
        $result['error'] = 'Bad Parameter';
        return json_encode($result);
    } else {
        $id = $request->id;
        $user = \App\User::find($id);

        if($user != null) {
            $action = $user->delete();

            $result['status'] = $action;
            $result['result'] = "Delete successful!";
            return json_encode($result);
        } else {
            $result['status'] = false;
            $result['error'] = 'User not found!';
            return json_encode($result);
        }
    }
});
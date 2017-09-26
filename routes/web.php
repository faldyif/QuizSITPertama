<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/list', function () {
    $users = \App\User::all();
    return json_encode($users);
});
Route::get('/add', function (\Illuminate\Http\Request $request) {
    $nama = $request->nama;
    $email = $request->email;
    $user = \App\User::create([
        'nama' => $nama,
        'email' => $email,
    ]);

    $result = array();
    $result['status'] = true;
    $result['result'] = $user;
    return json_encode($result);
});
Route::get('/edit', function (\Illuminate\Http\Request $request) {
    $id = $request->id;
    $nama = $request->nama;
    $email = $request->email;
    $user = \App\User::find($id)
        ->update([
            'nama' => $nama,
            'email' => $email,
        ]);

    $result = array();
    $result['status'] = $user;
    $result['result'] = \App\User::find($id);
    return json_encode($result);
});
Route::get('/delete', function (\Illuminate\Http\Request $request) {
    $id = $request->id;
    $user = \App\User::find($id)->delete();

    $result = array();
    $result['status'] = $user;
    return json_encode($result);
});

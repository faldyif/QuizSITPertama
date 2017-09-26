@extends('layouts.app')
@section('content')
    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">List API</a>
                </div>
            </div>
        </nav>

        <div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-12">
                <div class="card card-plain">

                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover">
                            <thead>
                            <th>No</th>
                            <th>Function</th>
                            <th>URL</th>
                            <th>METHOD</th>

                            </thead>


                            <tbody>
                            <tr>
                                <td>1</td>
                                <td>List API</td>
                                <td>/api/list</td>
                                <td>GET</td>

                            </tr>
                            <tr>
                                <td>2</td>
                                <td>ADD</td>
                                <td>/api/add?nama=xxx&email=xxx </td>
                                <td>GET</td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>UPDATE</td>
                                <td>/api/edit?id=xxx&nama=xxx&email=xxx </td>
                                <td>GET</td>

                            </tr>
                            <tr>
                                <td>3</td>
                                <td>DELETE</td>
                                <td>/api/delete?id=xxx</td>
                                <td>GET</td>

                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@extends('layouts.master')

@section('content')

<div id="login">
    <h3 class="text-center pt-5">Welcom to survivorMemory </h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <form id="login-form" class="form" action="" method="post">
                        <h3 class="text-center ">Login</h3>
                        <div class="form-group">
                            <label for="username" class="">Username:</label>
                            <br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="">Password:</label>
                            <br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-info btn-md mybtn" value="LogIn">
                        </div>
                        <div id="register-link" class="text-right">
                            <a href="/r" class="">Register here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
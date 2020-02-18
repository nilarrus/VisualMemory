@extends('layouts.master')
@section('content')

<div id="reg">
    <div class="container">
        <div id="reg-row" class="row justify-content-center align-items-center">
            <div id="reg-column" class="col-md-6">
                <div id="reg-box" class="col-md-12">
                    <form id="reg-form" action="" method="post">
                        <h3 class="text-center">Register</h3>   
                        <div class="form-group">
                            <label for="username"> Username:</label><br>
                            <input type="text" name="username" id="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password"> Password:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email:</label><br>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    <!--<div class="form-group">
                            <label for="userfoto"> UserFoto:</label><br>
                            <input type="image" name="userfoto" id="userfoto" class="form-control">
                        </div>-->
                        <div class="form-group">
                            <input type="submit" class="btn btn-info btn-md mybtn" value="Register">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
    

@extends('layouts.main')

@section('title')
{{ $title }}
@stop

@include ('layouts.login')

@section('content')
<h2 class="page-title">User Login</h2>
<form action="/user/login" role="form" method="post" class="form-horizontal col-sm-6 col-sm-offset-3">
    <div class="form-group">
        <label for="uid" class="control-label col-sm-4">Username</label>
        <div class="col-sm-8">
            <input type="text" class="form-control" id="uid" name="uid" placeholder="Enter User ID" value="">
        </div>
    </div>
    <div class="form-group">
        <label for="password" class="control-label col-sm-4">Password</label>
        <div class="col-sm-8">
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-4 col-sm-8">
            <button type="submit" class="btn btn-default">Login</button> <a href="/help" class="forget-password">Forget Password?</a>
        </div>
    </div>
</form>
@stop
@extends('layouts.main')

@section('title')
{{ $title }}
@stop

@include ('layouts.login')

@section('content')
<h2 class="page-title">Register New User</h2>
<form role="form" class="form-horizontal col-sm-6 col-sm-offset-2" action="/user/register" method="POST">
    <div class="form-group">
        <label for="uid" class="col-sm-5 control-label">User ID(3-15)
            <span style="color:#FF0000; font-size: inherit;">※</span>
        </label>
        <div class="col-sm-7">
            <input class="form-control" id="uid" name="uid" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label" for="nick">Nick Name(0-10)</label>
        <div class="col-sm-7">
            <input class="form-control" name="nick" id="nick" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label" for="password">Password(min 6)
            <span style="color:#FF0000; font-size: inherit;">※</span>
        </label>
        <div class="col-sm-7">
            <input class="form-control" id="password" name="password" type="password">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label" for="password_confirmation">Repeat Password
            <span style="color:#FF0000; font-size: inherit;">※</span>
        </label>
        <div class="col-sm-7">
            <input class="form-control" id="password_confirmation" name="password_confirmation" type="password">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label" for="school">School(30)</label>
        <div class="col-sm-7">
            <input class="form-control" name="school" id="school" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label" for="email">Email(30)
            <span style="color:#FF0000; font-size: inherit;">※</span>
        </label>
        <div class="col-sm-7">
            <input class="form-control" name="email" id="email" type="text">
        </div>
    </div>
    <div class="form-group">
        <label for="motto" class="col-sm-5 control-label">Motto
        </label>
        <div class="col-sm-7">
            <input class="form-control" id="motto" name="motto" type="text" maxlength="100">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-5">
            <input type="submit" class="btn btn-primary" value="Register">
            <input type="reset" class="btn btn-danger col-sm-offset-2" value="Reset">
        </div>
    </div>
</form>
@stop
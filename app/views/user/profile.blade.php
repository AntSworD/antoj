@extends('layouts.main')

@section('title')
{{ $user->nick }} - AntOJ
@stop

@include ('layouts.login')

@section('content')
<div class="row">
    <ul class="nav nav-tabs">
        <li class="active"><a href="/user/show/{{ $user->user_id }}">{{ $user->nick }}</a></li>
        <li><a href="/user/setting/{{ $user->user_id }}">Setting</a></li>
    </ul>
</div>
<div class="row well">
    <h2 class="text-center">
        <a href="/user/show/{{ $user->user_id }}">{{ $user->nick.' -- '.$user->user_id }}</a>
    </h2>
    <h3 class="text-center">{{ $user->motto }}</h3>
    <div class="col-md-7">
        <ul class="list-group">
            <li class="list-group-item"><span class="glyphicon glyphicon-home"></span>{{  "&nbsp;&nbsp;School:&nbsp;".$user->school }}</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-envelope"></span>{{ "&nbsp;&nbsp;Email:&nbsp;".$user->email }}</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-time"></span>{{  '&nbsp;&nbsp;Register:&nbsp;'. $user->reg_time }}</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-time"></span>{{  '&nbsp;&nbsp;Last Access:&nbsp;'. $user->last_login }}</li>
        </ul>
    </div>
    <div class="col-md-5">
        <ul class="list-group">
            <li class="list-group-item"><span class="glyphicon glyphicon-list col-md-1"></span>&nbsp;&nbsp;Rank:&nbsp;{{ $user->rank }}</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-list col-md-1"></span>&nbsp;&nbsp;Pro.Submitted:&nbsp;{{ $user->pro_submit }}</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-list col-md-1"></span>&nbsp;&nbsp;Pro.Solved:&nbsp;{{ $user->pro_solved }}</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-list col-md-1"></span>&nbsp;&nbsp;Submissions:&nbsp;{{ $user->submit }}</li>
            <li class="list-group-item"><span class="glyphicon glyphicon-list col-md-1"></span>&nbsp;&nbsp;Accept:&nbsp;{{ $user->solved }}</li>
        </ul>
    </div>
</div>
<div class="row">
    <div class="panel panel-success">
        <div class="panel-heading">List of solved problems</div>
        <div class="panel-body">
            @foreach ( $user->solved_problem_list as $problem )
                <a target="_blank" class="btn btn-success" href="/status?pid={{ $problem->problem_id }}&uid={{ $user->user_id }}">{{ $problem->problem_id }}</a>
                <font size="-2" color="#CC0000">{{$problem->solved}}/{{$problem->submit}}</font>
            @endforeach
        </div>
    </div>
    <div class="panel panel-warning">
        <div class="panel-heading">List of unsolved problems</div>
        <div class="panel-body">
            @foreach ( $user->unsolved_problem_list as $problem )
                <a target="_blank" class="btn btn-success" href="/status?pid={{ $problem->problem_id }}&uid={{ $user->user_id }}">{{ $problem->problem_id }}</a>
                <font size="-2" color="#CC0000">0/{{$problem->submit}}</font>
            @endforeach
        </div>
    </div>
</div>
@stop
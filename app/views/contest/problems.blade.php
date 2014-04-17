@extends('layouts.main')

@section('title')
{{ $contest->title }} - AntOJ
@stop

@include ('layouts.login')

@section('content')
@include ('contest.header')
    <div id="problemset_list">
        <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
@if (Auth::check())
                        <th class="col-md-1 text-center">状态</th>
@endif
                        <th class="col-md-2 text-center">编号</th>
                        <th class="col-md-7 text-center">标题</th>
                    </tr>
                </thead>
            <tbody>
@foreach ($problems as $problem)
                <tr>
@if (Auth::check())
                    <td class="text-center">
@if ($problem_stat[$problem->problem_id] == 1)
                          <span class="glyphicon glyphicon-remove"></span>
@elseif ($problem_stat[$problem->problem_id] == 2)
                          <span class="glyphicon glyphicon-ok"></span>
@endif
                          </td>
@endif
                    <td class="text-center">{{ $problem->order_id }}</td>
                    <td class="text-left"><a href="/problem/show/{{ $problem->problem_id }}">{{ $problem->title }}</a></td>
                </tr>
@endforeach
            </tbody>
        </table>
    </div>
@stop
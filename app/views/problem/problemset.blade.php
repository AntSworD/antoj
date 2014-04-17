@extends('layouts.main')

@section('title')
Problemset - AntOJ
@stop

@include ('layouts.login')

@section('content')
    <div id="problemset_list">
        <ul class="pagination">
            <?php
            for($i = 1; $i <= $count_page; ++ $i)
            {
            ?>
            <li {{ $current_page == $i ? 'class="active"' : '' }}><a href="/problemset/{{ $i }}">{{ $i }}</a></li>
            <?php
            }
            ?>
        </ul>
        <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
@if (Auth::check())
                        <th class="col-md-1 text-center">状态</th>
@endif
                        <th class="col-md-1 text-center">编号</th>
                        <th class="col-md-7 text-center">标题</th>
                        <th class="col-md-3 text-center">AC / 提交 (通过率)</th>
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
                    <td class="text-center">{{ $problem->problem_id }}</td>
                    <td class="text-left"><a href="/problem/show/{{ $problem->problem_id }}">{{ $problem->title }}</a></td>
                    <td class="text-center">{{ $problem->solved }} / {{ $problem->submit }} (<?php $problem->submit == 0? print '0.00%' : printf("%1\$.2f%%", $problem->solved / $problem->submit * 100);?>)</td>
                </tr>
@endforeach
            </tbody>
        </table>
    </div>
@stop
@extends('layouts.main')

@section('title')
Ant Online Judge
@stop

@include ('layouts.login')

@section('content')
<div class="row">
    <div class="col-md-3 center-block" style="margin-top: 4em">
        <h3 class="text-center">Statistic</h3>
        <ul class="nav nav-pill nav-stacked showborder">
            <li>
                <a href="/status?pid={{ $pid }}">Total Submissions
                    <span class="badge pull-right">{{ $solutions->submit }}</span>
                </a>
            </li>
            <li>
                <a href="/status?pid={{ $pid }}&result=4">User Accepted
                    <span class="badge pull-right">{{ $solutions->user_acc }}</span>
                </a>
            </li>
            <li>
                <a href="/status?pid={{ $pid }}&result=4">Accepted
                    <span class="badge pull-right">{{ $solutions->accept }}</span>
                </a>
            </li>
            <li>
                <a href="/status?pid={{ $pid }}&result=5">Presentation Error
                    <span class="badge pull-right">{{ $solutions->pe }}</span>
                </a>
            </li>
            <li>
                <a href="/status?pid={{ $pid }}&result=6">Wrong Answer
                    <span class="badge pull-right">{{ $solutions->wa }}</span>
                </a>
         </li>
            <li>
                <a href="/status?pid={{ $pid }}&result=8">Time Limit Exceeded
                    <span class="badge pull-right">{{ $solutions->tle }}</span>
                </a>
            </li>
            <li>
                <a href="/status?pid={{ $pid }}&result=9">Memory Limit Exceeded
                    <span class="badge pull-right">{{ $solutions->mle }}</span>
                </a>
            </li>
            <li>
                <a href="/status?pid={{ $pid }}&result=10">OutputLimit Exceeded
                    <span class="badge pull-right">{{ $solutions->ole }}</span>
                </a>
            </li>
            <li>
                <a href="/status?pid={{ $pid }}&result=11">Complitation Error
                    <span class="badge pull-right">{{ $solutions->ce }}</span>
                </a>
            </li>
            <li>
                <a href="/status?pid={{ $pid }}&result=7">Runtime Error
                    <span class="badge pull-right">{{ $solutions->re }}</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-md-9">
        <h1 class="text-center">Best solution for <a href="/problem/show/{{ $pid }}">Problem {{ $pid }}</a></h1>
        <table class="table table-striped table-bordered table-hover text-center">
            <tr>
                <th class="text-center">Rank</th>
                <th class="text-center">RunID</th>
                <th class="text-center">Author</th>
                <th class="text-center">Exe.Time</th>
                <th class="text-center">Exe.Memory</th>
                <th class="text-center">Code Len.</th>
                <th class="text-center">Language</th>
                <th class="text-center">Date</th>
            </tr>
<?php
    $rank = 1;
    if (isset($_GET['from'])) {
        if (!is_null($_GET['from'])) {
            $rank = ($_GET['from'] - 1) * 50;
        }
    }
?>
@foreach (($solutions->solutions) as $solution)
            <tr>
                <td>{{ $rank }}</td>
                <td>{{ $solution->solution_id }}</td>
                <td>{{ $solution->user_id }}</td>
                <td>{{ $solution->exe_time }}</td>
                <td>{{ $solution->exe_memory }}</td>
                <td>{{ $solution->code_length }}</td>
                <td>{{ $solution->language }}</td>
                <td>{{ $solution->submit_date }}</td>
            </tr>
<?php $rank++; ?>
@endforeach
        </table>
        <div class="text-center">{{ $solutions->solutions->links() }}</div>
    </div>
</div>
@stop
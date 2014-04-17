@extends('layouts.main')

@section('title')
Ant Online Judge
@stop

@include ('layouts.login')

@section('content')
<h1 class="page-title">{{ $problem->problem_id }} -- {{ $problem->title }}</h1>
<div class="problem-info">
    <p>
        Time Limit: 
        <span class="label label-warning">{{ $problem->time_limit }} MS</span>
        Memory Limit:
        <span class="label label-warning">{{ $problem->memory_limit }} K</span>
        <br>
    </p>
    <div>Submissions:{{ $problem->submit }} -- Solved:{{ $problem->solved }}</div>
</div>
<dl class='detail'>
    <dt>DESCTIPTION</dt>
    <dd>{{ $problem->description }}</dd>
    <dt>INPUT</dt>
    <dd>{{ $problem->input }}</dd>
    <dt>OUTPUT</dt>
    <dd>{{ $problem->output }}</dd>
    <dt>SAMPLE INPUT</dt>
    <dd><pre>{{ $problem->sample_input }}</pre></dd>
    <dt>SAMPLE OUTPUT</dt>
    <dd><pre>{{ $problem->sample_output }}</pre></dd>
    <dt>HINT</dt>
    <dd>{{ $problem->hint }}</dd>
    <dt>SOURCE</dt>
    <dd>{{ $problem->source }} </dd>
</dl>
<ul class='problem-footer list-inline'>
    <li><a href="/problem/statistic/{{ $problem->problem_id }}" class="btn btn-primary">Statistic</a></li>
    <li><a href="/problem/submit/{{ $problem->problem_id }}" class="btn btn-primary">Submit</a></li>
    <li><a href="/problem/discuss/{{ $problem->problem_id }}" class="btn btn-primary">Discuss</a></li>
</ul>
@stop
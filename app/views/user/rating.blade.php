@extends('layouts.main')

@section('title')
Rating - AntOJ
@stop

@include ('layouts.login')

@section('content')
<table class="table table-striped table-bordered table-hover text-center">
    <thead>
        <tr>
            <th class="text-center">Rank</th>
            <th class="text-center">Author</th>
            <th class="text-center">Motto</th>
            <th class="text-center">Solved</th>
            <th class="text-center">Submit</th>
            <th class="text-center">Ratio</th>
        </tr>
    </thead>
    <tbody>
<?php $i = ($users->getCurrentPage() - 1) * 50 + 1 ?>
@foreach ($users as $user)
        <tr>
            <td>{{ $i ++ }}</td>
            <td><a href="/user/{{ $user->user_id }}">{{ $user->nick }}</a></td>
            <td>{{ $user->motto }}</td>
            <td>{{ $user->solved }}</td>
            <td>{{ $user->submit }}</td>
            <td><?php printf("%.2f", $user->solved * 1.0 / $user->submit * 100);?>%</td>
        </tr>
@endforeach
    </tbody>
</table>
<div class="text-center">{{ $users->links() }}</div>
@stop
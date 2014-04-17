@extends('layouts.main')

@section('title')
{{ $contest->title }} - AntOJ
@stop

@include ('layouts.login')

@section('content')
@include ('contest.header')
<table class="table table-striped table-bordered table-hover">
<thead>
    <tr>
        <th>Rank</th>
        <th>User</th>
        <th>Solved</th>
        <th>Penalty</th>
@foreach ($problems as $problem)
        <th>{{ $problem->order_id }}</th>
@endforeach
    </tr>
</thead>
<tbody>
<?php Config::get('sec2time.php'); ?>
<?php $rank = 0; ?>
@foreach ($standing as $s)
    <?php $rank++; ?>
    <tr>
        <td>{{ $rank }}</td>
        <td>{{ $s->nick }}</td>
        <td>{{ $s->solved }}</td>
        <td>{{ sec2time($s->penalty) }}</td>
    @for ($i = 0; $i < $pro_num; $i++)
            <td>
        @if (isset($s->pro_ac[$i]) && $s->pro_ac[$i] > 0)
                {{ sec2time($s->pro_ac[$i]) }}
            @if (isset($s->pro_nac[$i]) && $s->pro_nac[$i] > 0)
                (-{{ $s->pro_nac[$i] }})
            @endif
        @else
            @if (isset($s->pro_nac[$i]) && $s->pro_nac[$i] > 0)
                (-{{ $s->pro_nac[$i] }})
            @else
                {{ '-/-' }}
            @endif
        @endif
            </td>
    @endfor
    </tr>
@endforeach
</tbody>
</table>
@stop
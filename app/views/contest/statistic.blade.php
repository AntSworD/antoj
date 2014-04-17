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
        <th>Pro.ID</th>
        <th>AC</th>
        <th>PE</th>
        <th>WA</th>
        <th>RE</th>
        <th>TLE</th>
        <th>MLE</th>
        <th>OLE</th>
        <th>CE</th>
        <th>TOTAL</th>
    </tr>
</thead>
<tbody>
@for ($pro_order = 0; $pro_order <= $pro_num; $pro_order++)
    <tr>
    @if ($pro_order == $pro_num)
        <td>Total</td>
    @else
        <td>{{ chr(ord('A') + $pro_order) }}</td>
    @endif
    @for ($res = 0; $res < 9; ++ $res)
        <td>
            @if (isset($statistic[$pro_order][$res]) && $statistic[$pro_order][$res])
                {{ $statistic[$pro_order][$res] }}
            @else
                {{ '-' }}
            @endif
        </td>
    @endfor
    </tr>
@endfor
    </tbody>
</table>
@stop
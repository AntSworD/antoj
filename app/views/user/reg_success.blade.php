@extends('layouts.main')

@section('title')
{{ $title }}
@stop

@include ('layouts.login')

@section('content')
<h2 class="page-title">Congratulation!</h2>
<h3>{{ $uid }} Register Success!</h3>
@stop
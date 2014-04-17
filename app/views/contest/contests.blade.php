@extends('layouts.main')

@section('title')
Contests - AntOJ
@stop

@include ('layouts.login')

@section('content')
  <div id="contest_list"> 
   <table class="table table-striped table-bordered table-hover text-center"> 
    <thead> 
     <tr> 
      <th class="col-md-1 text-center">ID</th> 
      <th class="col-md-5 text-center">Title</th> 
      <th class="col-md-2 text-center">Start Time</th> 
      <th class="col-md-2 text-center">End Time</th> 
      <th class="col-md-1 text-center">Type</th> 
      <th class="col-md-1 text-center">Status</th> 
     </tr>
    </thead>
    <tbody>
@foreach ($contests as $contest)
     <tr>
      <td>{{ $contest->contest_id }}</td> 
      <td><a href="/contest/show/{{ $contest->contest_id }}">{{ $contest->title }}</a></td> 
      <td>{{ $contest->start_time }}</td> 
      <td>{{ $contest->end_time }}</td> 
      <td>{{ $contest->type }}</td> 
      <td>{{ $contest->status }}</td> 
     </tr>
@endforeach
    </tbody> 
   </table> 
   <div class="text-center">{{ $contests->links() }}</div>
  </div>
@stop
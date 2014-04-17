@extends('layouts.main')

@section('title')
@if (isset($contest))
  {{ $contest->title }} - AntOJ
@else
Status - AntOJ
@endif
@stop

@include ('layouts.login')
@section('content')
@if (isset($contest))
@include ('contest.header')
@endif
@if (!isset($contest))
   <div id="status_query_nav">
        <form action="/status" method="GET" class="form-inline" role="form">
            <div class="form-group">
                <label class="sr-only" for="rid">Run ID</label>
                <input placeholder="Run ID" name="rid" id="rid" class="form-control">
            </div>
            <div class="form-group">
                <label class="sr-only" for="pid">Problem ID</label>
                <input placeholder="Problem ID" name="pid" id="pid" class="form-control">
            </div>
            <div class="form-group">
                <label class="sr-only" for="uid">User ID</label>
                <input placeholder="User ID" name="uid" id="uid" class="form-control">
            </div>
            <div class="form-group">
                <label class="sr-only" for="language">Language</label>
                <select name="language" id="language" class="form-control">
                    <option value="" selected="selected">Language</option>
                    @for ($key = 0, $n = count($lan); $key < $n; ++ $key) 
                    <option value="{{ $key }}">{{ $lan[$key] }}</option>
                    @endfor
                </select>
            </div>
            <div class="form-group">
                <label class="sr-only" for="result">Result</label>
                <select name="result" class="form-control">
                    <option value="" selected="selected">Result</option>
                    @for ($key = 4, $n = count($result); $key < $n; ++ $key) 
                    <option value="{{ $key }}">{{ $result[$key] }}</option>
                    @endfor
                </select>
            </div>
            <input type="submit" value="Search" class="btn">
        </form>
   </div>
@endif
<div id="run_list">
   <table class="table table-striped table-bordered table-hover">
    <thead>
     <tr>
      <th class="col-md-1 text-center">RUNID</th>
      <th class="col-md-2 text-center">Submit Time</th>
      <th class="col-md-3 text-center">Judge Status</th>
      <th class="col-md-1 text-center">Pro.ID</th>
      <th class="col-md-1 text-center">Exe.Time</th>
      <th class="col-md-1 text-center">Exe.Memory</th>
      <th class="col-md-1 text-center">Code Len.</th>
      <th class="col-md-1 text-center">Language</th>
      <th class="col-md-1 text-center">Author</th>
     </tr>
    </thead>
    <tbody>
@foreach ($solutions as $solution)
      <tr class="text-center">
        <td>{{ $solution->solution_id }}</td>
        <td>{{ $solution->submit_date }}</td>
        <td><span>{{ $result[$solution->result] }}</span></td>
        <td><a href="/problem/show/{{ $solution->problem_id }}">{{ $solution->problem_id }}</a></td>
        <td>{{ ($solution->result >=4 && $solution->result <= 10) ? $solution->exe_time : '----' }}</td>
        <td>{{ ($solution->result >=4 && $solution->result <= 10) ? $solution->exe_memory : '----' }}</td>
        <td>{{ $solution->code_length }}</td>
        <td><?php if (Session::get('user_id', null) == $solution->user_id) { ?>
          <a href="/solution/source/{{ $solution->solution_id }}" target=\"_blank\">{{ $lan[$solution->language] }}</a>
          <?php }
        else { ?>
          {{ $lan[$solution->language] }}
          <?php } ?>
        </td>
        <td><a href="/user/{{ $solution->user_id }}" target="_blank">{{ $solution->user_nick }}</a></td>
     </tr>
@endforeach
    </tbody>
   </table>
   <div class="text-center">{{ $solutions->links() }}</div>
  </div>
@stop

@section('other_script')
  <script type="text/javascript">
    function time_refresh()
    {
        window.location.reload();
    }
    $(function(){
        setTimeout("time_refresh()", 30000);
    });
</script>

@stop
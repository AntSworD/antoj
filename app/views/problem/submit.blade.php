@extends('layouts.main')

@section('css_js')
    <script src="/Codemirror/lib/codemirror.js"></script>
    <link rel="stylesheet" href="/Codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="/Codemirror/lib/solarized.css">
    <script src="/Codemirror/addon/selection/active-line.js"></script>
    <script src="/Codemirror/addon/edit/matchbrackets.js"></script>
    <style type="text/css">
      .CodeMirror {border: 1px solid black; font-size:13px}
    </style>
@stop

@section('title')
Ant Online Judge
@stop

@include ('layouts.login')

@section('content')
<div class="text-center">
    <h1>Submit Your Solution</h1>
</div>
<div>
    <form role="form" class="form-horizontal submit" action="/problem/submit/{{ $pid }}" method="POST">
    <fieldset>
    <div class="form-group">
        <label class="control-label col-md-3" for="pid">Problem ID</label>
        <div class="col-md-9">
            <input class="form-control" name="pid" value="{{ $pid }}">
        </div>
    </div>
    <div class="form-group">
        <label for="language" class="control-label col-md-3">Language</label>
        <div class="col-sm-9">
            <select name="language" class="form-control">
                        <option value="0" {{ Session::get('lang', 0) == 0 ? 'selected="selected"' : '' }}>C</option>
                        <option value="1" {{ Session::get('lang', 0) == 1 ? 'selected="selected"' : '' }}>C++</option>
                        <option value="2" {{ Session::get('lang', 0) == 2 ? 'selected="selected"' : '' }}>Java</option>
                    </select>
        </div>
    </div>
    </fieldset>
    <div class="form-group">
        <textarea class="form-control Codemirror" cols="80" rows="20" name="source" style="resize:none;" id="source"></textarea>
    </div>
    <div class="form-group">
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a class="btn btn-warning" href="/problem/show/{{ $pid }}" style="margin-left:10%">Back</a>
        </div>
    </div>
    </form>
</div>
@stop

@section('other_script')
<script>
var editor = CodeMirror.fromTextArea(document.getElementById("source"), {
    lineNumbers: true,
    styleActiveLine: true,
    matchBrackets: true,
    theme: 'solarized light',
    indentUnit: 4,
    indentWithTabs: true
  });
</script>
@stop
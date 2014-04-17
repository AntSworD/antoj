@section('login')
@if (Auth::check())
    <a href="/user/show/{{ Session::get('user_id') }}" class="label label-primary">{{ Session::get('user_id') }}</a>
    <a href="/user/logout" class="label label-danger">Logout</a>
@else
    {{ Form::open(array('url' => '/user/login', 'method' => 'post', 'class' => 'form-inline', 'role' => 'form')) }}
    {{ Form::token() }}
    <div class="form-group">
    	{{ Form::label('uid', 'User ID', array('class' => 'sr-only')) }}
    	{{ Form::text('uid', '', array('class' => 'form-control input-sm', 'placeholder' => 'Enter User ID')) }}
    </div>
    <div class="form-group">
    	{{ Form::label('password', 'password', array('class' => 'sr-only')) }}
    	{{ Form::password('password', array('class' => 'form-control input-sm', 'placeholder' => 'Enter password')) }}
    </div>
    <div class="checkbox">
    	<label>
    		{{ Form::checkbox('rem_me') }}
    		<span >Remember me</span>
    	</label>
    </div>
    	{{ Form::button('Sign In',array('type' => 'submit', 'class' => 'btn btn-default btn-sm')) }}
    {{ Form::close() }}
@endif
@stop
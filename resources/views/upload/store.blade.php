@extends('layout')

@section('content')

	<h3>Select a file to upload:</h3>

		{{ Form::open(['route' => ['upload.store'], 'files' => true]) }}

	    {{ Form::file('file') }}

		<h3>Set expiration date:</h3>

	    {{ Form::date('date', \Carbon\Carbon::now()) }}

		<div class="form-row">
	    	{{ Form::submit('Submit') }}
	    </div>

	{{ Form::close() }}

@stop

@section('scripts.footer')
@stop
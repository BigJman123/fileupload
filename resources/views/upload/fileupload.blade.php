@extends('layout')

@section('content')

	<h3>Select a file to upload:</h3>

	{{ Form::open(['route' => ['upload.store'], 'files' => true]) }}
	    {{ Form::file('file') }}
	    {{ Form::submit('Submit') }}
	{{ Form::close() }}

@stop

@section('scripts.footer')
@stop
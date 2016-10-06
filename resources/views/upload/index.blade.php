@extends('layout')

@section('content')

	@foreach($uploads as $upload)
		
		<p>{{ $upload->password}}</p>
		
	@endforeach()
	

@stop
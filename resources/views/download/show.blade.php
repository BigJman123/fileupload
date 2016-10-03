@extends('layout')

@section('content')

	{{-- TODO: needs to post to your new download.download route --}}
	{{-- TODO: this form needs to contain the hash of the upload you are here for --}}
	{{-- this will be a HIDDEN field, look this up, set the name to hash --}}
	{{ Form::open(['url' => 'download']) }}

		<h3>Enter password to retrieve file:</h3>

		<div class="form-row">
			<label>
				<span>
					<input type="text" name="password"  required>
				</span>
			</label>
		</div>
		{{Form::submit()}}

	{{ Form::close() }}

@stop
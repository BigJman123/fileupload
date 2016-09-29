@extends('layout')

@section('content')

	{{ Form::open(['id' => 'file-download-form']) }}

		<h3>Enter password to retrieve file:</h3>

		<div class="form-row">
			<label>
				<span>
					<input type="text" name="password" required>
				</span>
			</label>
		</div>

	{{ Form::close() }}

@stop
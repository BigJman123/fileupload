@extends('layout')

@section('content')

		<h3>Here is your link and password</h3>
		
		<table class="table">
			<thead>
				<tr>
					<td>Url:</td>
					<td>{{ $hash }}</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Password:</td>
					<td>{{ $upload->password }}</td>
				</tr>
			</tbody>
		</table>

@stop
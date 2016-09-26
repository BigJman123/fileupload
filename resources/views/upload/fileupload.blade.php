@extends('layout')

@section('content')

    <form action="upload" method="POST" class="dropzone">
        {{ csrf_field() }}
    </form>

@stop

@section('scripts.footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.js"></script>
@stop
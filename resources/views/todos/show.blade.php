@extends('layouts.app')

@section('content')
	<a class="btn btn-default" href="/">Go Back</a>
	<h3><a href="todo/{{ $todo->id }}">{{ $todo->text }}</a></h3>
	<div class="label label-danger">{{ $todo->due }}</div>
	<hr>
	<p>{{ $todo->body }}</p>
@endsection
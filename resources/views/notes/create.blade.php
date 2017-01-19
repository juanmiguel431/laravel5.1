@extends('layout')

@section('content')
	<h2>Create a Note</h2>
	@include('partials/errors')
	<form method="post" action="{{ url('notes') }}" class="form">
		<h4>Note</h4>
		<textarea cols="60" rows="6" name="note" class="form-control" placeholder="Write your text">{{ old('note') }}</textarea>
		<br>
		<input type="submit" value="Create note" class="btn btn-primary">
		{{ csrf_field() }}
	</form>
@endsection
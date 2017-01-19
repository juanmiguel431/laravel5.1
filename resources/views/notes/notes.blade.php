@extends('layout')

@section('content')
<h2>Notes - {{ currentUser() }}</h2>
	<ul>
		@foreach ($notes as $note)
			<li>
				{{ $note->note }}
			</li>
		@endforeach
	</ul>

	{!! $notes->render() !!}

	<br>
	<input type="button" value="Add a note" class="btn btn-success" onclick="location.href='{{url('notes/create')}}'">

	<form method="GET" action="{{ url('notes/create') }}">
		<input type="submit" value="Add a note" class="btn btn-danger">
	</form>
	<p>
		<a href="/notes/create">Add a note</a> {{-- Esto va a funcionar si se está utilizando un virtual host --}}
		<br>
		<a href="{{ url('notes/create') }}">Add a note</a> {{-- Helper de Blade que genera la url --}}
	</p>

	<form method="POST">
		<label for="comment">Comentarios</label>
		<br>
		<textarea cols="60" rows="5" name="note" class="form-control" placeholder="Write your text">{{ old('note') }}</textarea>
		<br>
		<input type="submit" value="Crear nota" class="btn btn-primary">
		{{ csrf_field() }}
	</form>

	<hr>
	<p>&copy; 2016 - <a href="http://www.juanmiguel431.com">Juanmiguel431</a></p>
@endsection
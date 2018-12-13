@extends('layouts.app')

@section('content')

<h2>categories</h2>
<a href="{{ url('/categories/create') }}" class="btn btn-primary" role="button">Add Category</a>

<hr>

	@foreach($categories as $category)
		<category>
			<h3> <a href="{{ url('categories/'.$category->id) }}">{{ $category->category }}</a> </h3>
			<p>{{ $category->text }}</p>
		</category>
	@endforeach

@stop
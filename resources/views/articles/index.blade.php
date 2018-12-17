@extends('layouts.app')

@section('content')

<h2>Articles</h2>
<a href="{{ url('/articles/create') }}" class="btn btn-primary" role="button">Add Articles</a>
<hr>

	@foreach($articles as $article)
		<article>
			<h3> <a href="{{ url('articles/'.$article->id) }}">{{ $article->title }}</a> </h3>
			<p>{{ $article->body }}</p>
		</article>
	@endforeach

@stop
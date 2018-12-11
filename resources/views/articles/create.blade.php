@extends('layouts.app')

@section('content')

	@include('articles._error')

	{!! Form::open(['url' => 'articles']) !!}

		@include('articles._form', ['btnText' => 'Add new article'])

	{!! Form::close() !!}

@stop
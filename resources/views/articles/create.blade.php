@extends('layouts.app')

@section('content')

	@include('articles._error')

	{!! Form::open(['url' => 'articles']) !!}
		@include('articles._form', $categories, ['btnText' => 'Add new article'])
		<div class="form-group" >
		<select name="category_id" id="category_id" onChange="onSelect()"> 
					<option value="" disabled selected>Select your option</option>
					@foreach($categories->all() as $category)
						<option value="{{$category->id}}">{{$category->category}}</option>
					@endforeach
					<option value="">--add category--</option>
				</select>
				</div>
	
		<!-- {!! Form::select('category_id', ['Tips', 'Technology', 'Health', ' Politics', 'Review'], '',['class' => 'form-control']) !!} -->
	{!! Form::close() !!}

@stop

<script>

function onSelect()
{
	var currIndex = document.getElementById("category_id").selectedIndex;
	if( currIndex == (<?php echo sizeof($categories) ?> + 1) )
	{
		window.open("{{ url('categories/create') }}", "_self")
	}
}
</script>
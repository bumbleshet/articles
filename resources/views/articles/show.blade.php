@extends('layouts.app')

@section('content')
<h2>Title: {{$article->title}}</h2>
	@include('articles._error')
	{!! Form::model($article, ['method' => 'put']) !!}
	
		@include('articles._form', ['btnText' => 'save changes'])
		<div class="form-group" >
		<select name="category_id" id="category_id" onChange="onSelect()"> 
					<option value="" disabled selected>Select Category</option>
					@foreach($categories->all() as $category)
						<option value="{{$category->id}}">{{$category->category}}</option>
					@endforeach
					<option value="">--add category--</option>
				</select>
				</div>
	{!! Form::close() !!}
@stop

<script>
window.onload = function() {onSelect()};
function onSelect()
{
	document.getElementById("category_id").value = <?php echo $category_index ?>;
	var currIndex = document.getElementById("category_id").selectedIndex;
	if( currIndex == (<?php echo sizeof($categories) ?> + 1) )
	{
		window.open("{{ url('categories/create') }}", "_self")
	}
}
</script>
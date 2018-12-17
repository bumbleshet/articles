{!! Form::label('category', 'Title') !!}
		{!! Form::text('category', null, ['class' => 'form-control', 'placeholder' => 'ex. Category Title']) !!}

		<div class="form-group" >
			{!! Form::label('text', 'Body:') !!}
			{!! Form::textarea('text', null, ['class' => 'form-control']) !!}
		</div>
		{!! Form::submit($btnText, ['class' => 'btn btn-primary']) !!}
{!! Form::label('title', 'Title') !!}
		{!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'ex. Article Title']) !!}

		<div class="form-group" >
			{!! Form::label('body', 'Body:') !!}
			{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
		</div>
		{!! Form::submit('Save Changes', ['class' => 'btn btn-primary']) !!}
{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('courseName', 'Nombre del curso') }}
	{{ Form::text('courseName', null, ['class' => 'form-control', 'id' => 'courseName']) }}
</div>



<div class="form-group">
	{{ Form::label('Fecha de inicio') }}
	{{ Form::date('start_date') }}
</div>

<div class="form-group">
	{{ Form::label('Fecha de termino') }}
	{{ Form::date('finalization_date') }}
</div>

<div class="form-group">
	{{ Form::label('instructorName', 'Nombre del Instructor') }}
	{{ Form::text('instructorName', null, ['class' => 'form-control', 'id' => 'instructorName']) }}
</div>

<div class="form-group">
	{{ Form::label('courseAddress', 'Direccion del curso') }}
	{{ Form::text('courseAddress', null, ['class' => 'form-control', 'id' => 'courseAddress']) }}
</div>

<div class="form-group">
	{{ Form::label('excerpt', 'Extracto') }}
	{{ Form::text('excerpt', null, ['class' => 'form-control', 'id' => 'excerpt']) }}
</div>

<div class="form-group">
	{{ Form::label('description', 'Descripcion del curso') }}
	{{ Form::text('description', null, ['class' => 'form-control', 'id' => 'description']) }}
</div>

<div class="form-group">
	{{ Form::label('status', 'Estatus') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publicado
	</label>
	<label>
		{{ Form::radio('status', 'Draft') }} Borrador
	</label>
</div>

<div class="form-group">
	{{ Form::label('file', 'Imagen') }}
	{{ Form::file('file', null, ['class' => 'form-control', 'id' => 'file']) }}
</div>	

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-outline-primary']) }}
</div>	
{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('profileName', 'Nombre del Perfil') }}
	{{ Form::text('profileName', null, ['class' => 'form-control', 'id' => 'profileName']) }}
</div>

<div class="form-group">
	{{ Form::label('dateOfIncorporation', 'Fecha de Ingreso') }}
	{{ Form::text('dateOfIncorporation', null, ['class' => 'form-control', 'id' => 'dateOfIncorporation']) }}
</div>

<div class="form-group">
	{{ Form::label('languages', 'Lenguajes') }}
	{{ Form::text('languages', null, ['class' => 'form-control', 'id' => 'languages']) }}
</div>

<div class="form-group">
	{{ Form::label('dateOfGraduation', 'Fecha de Graduacion') }}
	{{ Form::text('dateOfGraduation', null, ['class' => 'form-control', 'id' => 'dateOfGraduation']) }}
</div>

<div class="form-group">
	{{ Form::label('file', 'Fotografia') }}
	{{ Form::text('file', null, ['class' => 'form-control', 'id' => 'file']) }}
</div>

<div class="form-group">
	{{ Form::label('status', 'Estatus') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publicado
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }} Borrador
	</label>
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-outline-primary']) }}
</div>	
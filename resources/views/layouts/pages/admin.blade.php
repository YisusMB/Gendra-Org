@extends('layouts.styles')

@section('content')
@component('layouts.partials._headerAdmin')@endcomponent
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2" style="background-color: #5267a0;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 style="padding-top: 7px; color: #fff;">
					ESTA SECCION ES PARA LOS CURSOS
					</h5>
				</div>
			</div>
		</div>
		<div class="col-md-1"> 
			<a href="{{ route('courses.create') }}" class="btn btn-sm btn-primary">
				Crear curso
			</a>
		</div>
		<div class="col-md-4 offset-md-1" style="background-color: #5267a0;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 style="padding-top: 7px; color: #fff;">
					ESTA SECCION ES PARA LOS PERFILES
					</h5>
				</div>
			</div>
		</div>
		<div class="col-md-1"> 
			<a href="{{ route('profiles.create') }}" class="btn btn-sm btn-primary">
				Crear perfil
			</a>
		</div>
	</div>
	<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
		<div class="col-md-6">
	<div class="table table-striped table-hover	">
		<table class="table">
		<thead>
			<tr>
				<th width="10px">ID</th>
				<th>NOMBRE</th>
				<th colspan="3">HERRAMIENTAS</th>
			</tr>
		</thead>
		<tbody>
			@foreach($courses as $course)
			<tr>
				<td>{{ $course->id }}</td>
				<td>{{ $course->courseName }}</td>
				<td width="10px">
					<a href="" class="btn btn-sm btn-primary">
						ver
					</a>
				</td>
				<td>
					<a href="" class="btn btn-sm btn-primary">
						editar
					</a>
				</td>
				<td>
					<a href="" class="btn btn-sm btn-primary">
						eliminar
					</a>
				</td>
			</tr>
			@endforeach
			{{ $courses->render() }}
		</tbody>
		</table>
	</div>
</div>
			
	</div>			
</div>
@component('layouts.partials._footer')@endcomponent
@endsection

@extends('layouts.styles')

@section('content')
@component('layouts.partials._header')@endcomponent
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
			<a href="{{ route('courses.create') }}" class="btn btn-sm btn-outline-success">
				Crear Curso
			</a>
		</div>
	</div>
	<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
		<div class="col-md-8 offset-md-2">
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
							<a href="{{ route('curso', $course->slug) }}" class="btn btn-sm btn-outline-info">
								VER
							</a>
						</td>
						<td width="10px">
							<a href=" {{ route('courses.edit', $course->id) }} " class="btn btn-sm btn-outline-primary">
								EDITAR
							</a>
						</td>
						<td width="10px">
							{!! Form::open(['route' => ['courses.destroy', $course->id], 'method' => 'DELETE']) !!}
							<button href="" class="btn btn-sm btn-outline-danger">
								ELIMINAR
							</button>
						</td>
					</tr>
					@endforeach
				</tbody>
				</table>
				{{ $courses->render() }}
			</div>
		</div>	
	</div>			
</div>
@component('layouts.partials._footer')@endcomponent
@endsection

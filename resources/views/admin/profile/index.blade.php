@extends('layouts.styles')
@component('layouts.partials._header')@endcomponent

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2" style="background-color: #5267a0;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 style="padding-top: 7px; color: #fff;">
					ESTA SECCION ES PARA LOS PERFILES
					</h5>
				</div>
			</div>
		</div>
		<div class="col-md-1"> 
			<a href="{{ route('profiles.create') }}" class="btn btn-sm btn-outline-success">
				Crear Perfil
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
					@foreach($profiles as $profile)
					<tr>
						<td>{{ $profile->id }}</td>
						<td>{{ $profile->profileName }}</td>
						<td width="10px">
							<a href="{{ route('perfil', $profile->slug) }}" class="btn btn-sm btn-outline-info">
								VER
							</a>
						</td>
						<td width="10px">
							<a href=" {{ route('profiles.edit', $profile->id) }}" class="btn btn-sm btn-outline-primary">
								EDITAR
							</a>
						</td width="10px">
						<td>
							{!! Form::open(['route' => ['profiles.destroy', $profile->id], 'method' => 'DELETE']) !!}
							<button class="btn btn-sm btn-outline-danger">
								ELIMINAR
							</button>
						</td>
					</tr>
					@endforeach
				</tbody>
				</table>
				{{ $profiles->render() }}
			</div>
		</div>	
	</div>			
</div>
@component('layouts.partials._footer')@endcomponent
@endsection

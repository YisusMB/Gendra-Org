<div class="container">
	<div class="row">
		<div class="col-md-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5>ESTA SECCION ES PARA LOS CURSOS</h5>
				</div>
			</div>
		</div>
		<div class="col-sm-1"> 
			<a href="{{ route('courses.create') }}" class="btn btn-sm btn-primary">
				Crear curso
			</a>
		</div>
		<div class="col-md-5">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5>ESTA SECCION ES PARA LOS PERFILES</h5>
				</div>
			</div>
		</div>
		<div class="col-sm-1"> 
			<a href="{{ route('profiles.create') }}" class="btn btn-sm btn-primary">
				Crear perfil
			</a>
		</div>
	</div>
</div>
<div class="panel-body">
	<div class="table table-striped table-hover	">
		<table>
		<thead>
			<tr>
				<th width="10px">ID</th>
				<th>NOMBRE</th>
				<th colspan="3">&nbsp;</th>
			</tr>
		</thead>
		<tbody>
			@foreach($courses as $course)
			<tr>
				<td>id del curso</td>
				<td>nombre del</td>
				<td width="10px">
					<a href="" class="">
						ver
					</a>
				</td>
			</tr>
			@endforeach
		</tbody>
		</table>
	</div>
</div>
			
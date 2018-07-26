@extends('layouts.styles')
@component('layouts.partials._header')@endcomponent
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2" style="background-color: #5267a0;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 style="padding-top: 7px; color: #fff;">
						Editar Perfil
					</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
		<div class="col-md-8 offset-md-2">
			{!! Form::model($profile, ['route' => ['profiles.update', $profile->id],
			'method' => 'PUT']) !!}
				@include('admin.profile.partials.form')
			{!! Form::close() !!}
		</div>	
	</div>			
</div>
@component('layouts.partials._footer')@endcomponent
@endsection
@extends('layouts.styles')
@component('layouts.partials._header')@endcomponent
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2" style="background-color: #5267a0;">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h5 style="padding: 5px; color: #fff;">
					Crear curso
					</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="padding-top: 10px; padding-bottom: 10px;">
		<div class="col-md-8 offset-md-2">
			{!! Form::open(['route' => 'courses.store', 'files' => true]) !!}
				@include('admin.course.partials.form')
			{!! Form::close() !!}
		</div>	
	</div>			
</div>
@component('layouts.partials._footer')@endcomponent
@endsection
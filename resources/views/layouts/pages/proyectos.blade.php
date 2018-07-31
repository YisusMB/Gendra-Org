@extends('layouts.styles')

@component('layouts.partials._header')@endcomponent

	@component('layouts.partials._pageInfSectProyectos')@endcomponent
	@component('layouts.partials._sermonSection')@endcomponent
	
	<section class="sermons-list-section spad">
			<div class="container">
				<div class="section-title">
					<span>Nuestra historia</span>
					<h2>Casos de exito</h2>
				</div>
				<div class="row">
					@foreach($profiles as $profile)
					<div class="col-sm-6 col-md-4">
						<div class="sermon-item">
							<div class="si-thumb set-bg" data-setbg="{{ $profile->file_url }}"></div>
							<div class="si-content">
								<h4>{{ $profile->profileName }}</h4>
								<ul class="sermon-info">
									<li>Se unio el: <span>{{ $profile->dateOfIncorporation }}</span></li>
									<li>Lenguajes: <span>{{ $profile->languages }}</span></li>
									<li>Se supero el: <span>{{ $profile->dateOfGraduation }}</span></li>
								</ul>
							</div>
						</div>
					</div>
					@endforeach
					{{ $profiles->render() }}
				</div>
			</div>
	</section>

@component('layouts.partials._footer')@endcomponent
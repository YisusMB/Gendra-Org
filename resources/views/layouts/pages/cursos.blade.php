@extends('layouts.styles')
	@component('layouts.partials._header')@endcomponent
	@component('layouts.partials._pageInfSectCursos')@endcomponent
	@component('layouts.partials._eventSection')@endcomponent
	<!-- Event list section -->
		<section class="event-list-section spad">
			<div class="container">
				<div class="section-title title-left">
					<span>Dale un vistazo a nuestra oferta</span>
					<h2>Proximos Cursos</h2>
				</div>
				<div class="event-list">
					<!-- event list item -->
					@foreach($courses as $course)
					<div class="el-item">
						<div class="row">
							<div class="col-md-4">
								<div class="el-thubm set-bg" style="background-size: contain;" 
								data-setbg="{{ $course->file_url }}"></div>
							</div>
							<div class="col-md-8">
								<div class="el-content">
									<div class="el-header">
										<div class="el-date">
											<h2>{{ $course->start_date->formatLocalized('%d') }}</h2>
												{{ $course->start_date->formatLocalized('%B') }}
										</div>
										<h3> {{ $course->courseName }} </h3>
										<div class="el-metas">
											<div class="el-meta"><i class="fa fa-user"></i> {{ $course->instructorName }}</div>
											<div class="el-meta"><i class="fa fa-calendar"></i> {{ $course->start_date->formatLocalized('%A %d %B %Y') }} </div>
											<div class="el-meta"><i class="fa fa-map-marker"></i> {{ $course->courseAddress }} </div>
										</div>
									</div>
									<p>{{ $course->excerpt }}</p>
									<a href="{{ route('curso', $course->slug) }}" class="site-btn sb-line">Mas Informacion</a>
								</div>
							</div>
						</div>
					</div>
					<!-- event list item -->
					@endforeach
					{{ $courses->render() }}
				</div>
			</div>
		</section>
		<!-- Event list section end-->
	@component('layouts.partials._footer')@endcomponent
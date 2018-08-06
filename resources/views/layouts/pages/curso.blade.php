@extends('layouts.styles')
@component('layouts.partials._header')@endcomponent
@component('layouts.partials._pageInfSectCursos')@endcomponent

	<!-- Page section section -->
	<section class="page-section spad">
		<div class="container">
			<div class="row">
				<!-- Single blog post -->
				<div class="col-md-8 single-post">
					<figure class="post-thumb">
						<img src="{{ $course->file_url }}" alt="" style="max-height: 500px;">
					</figure>
					<div class="post-content">
						<h2 class="post-title">{{ $course->courseName }}</h2>
						<div class="date">Fecha de inicio: {{ $course->start_date->formatLocalized('%A %d %B %Y') }}</div>
						<div class="date">Fecha de termino: {{ $course->finalization_date->formatLocalized('%A %d %B %Y')}} </div>
						<div class="post-metas">
							<div class="post-meta">Instructor: {{ $course->instructorName }} </div> <br />
							<div class="post-meta">Lugar: {{ $course->courseAddress }}</div>
						</div>
						<p>{{ $course->description }}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section section end-->

@component('layouts.partials._newsletterCourses')@endcomponent
@component('layouts.partials._footer')@endcomponent
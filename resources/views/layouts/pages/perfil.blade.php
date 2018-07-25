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
						<img src="{{ $profile->file }}" alt="">
					</figure>
					<div class="post-content">
						<div class="date">Fecha de inicio: {{ $profile->startDate }}</div>
						<h2 class="post-title">{{ $profile->profileName }}</h2>
						<div class="post-metas">
							<div class="post-meta">Instructor: {{ $profile->instructorName }}</div>
							<div class="post-meta">Lugar: {{ $profile->profileAddress }}</div>
						</div>
						<p>{{ $profile->description }}</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page section section end-->

@component('layouts.partials._newsletterCourses')@endcomponent
@component('layouts.partials._footer')@endcomponent
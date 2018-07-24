	<!-- Event list section -->
	<section class="event-list-section spad">
		<div class="container">
			<div class="section-title title-left">
				<span>Dale un vistazo a nuestra oferta</span>
				<h2>Porximos Cursos</h2>
			</div>
			<div class="event-list">
				<!-- event list item -->
				<div class="el-item">
					<div class="row">
						<div class="col-md-4">
							<div class="el-thubm set-bg" style="background-size: contain;" data-setbg="img/courses/react-icon.jpg"></div>
						</div>
						<div class="col-md-8">
							<div class="el-content">
								<div class="el-header">
									<div class="el-date">
										<h2>{{ $course->dayCalendar }}</h2>
											{{ $course->month }}
									</div>
									<h3> {{ $course->courseName }} </h3>
									<div class="el-metas">
										<div class="el-meta"><i class="fa fa-user"></i> {{ $course->instructorName }}</div>
										<div class="el-meta"><i class="fa fa-calendar"></i> {{ $course->startDate }} </div>
										<div class="el-meta"><i class="fa fa-map-marker"></i> {{ $course->courseAddress }} </div>
									</div>
								</div>
								<p>{{ $course->excerpt }}</p>
								<a href="event.html" class="site-btn sb-line">Mas Informacion</a>
							</div>
						</div>
					</div>
				</div>
				<!-- event list item -->
			</div>
		</div>
	</section>
	<!-- Event list section end-->
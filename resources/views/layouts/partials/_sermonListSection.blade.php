

<!-- Sermons list section -->
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
						<div class="si-thumb set-bg" style="background-size: contain;" data-setbg="img/sermons/1.jpg"></div>
						<div class="si-content">
							<h4>{{ $profile->name }}</h4>
							<ul class="sermon-info">
								<li>Se unio el: <span>{{ $profile->dateOfIncorporation }}</span></li>
								<li>Lenguajes: <span>{{ $profile->languages }}</span></li>
								<li>Se supero el: <span>{{ $profile->dateOfGraduation }}</span></li>
							</ul>
							<div class="icon-links">
								<a href="sermons.html"><i class="fas fa-link"></i></a>
								<a href="sermons.html"><i class="far fa-file-archive"></i></a>
								<a href="sermons.html"><i class="fas fa-headphones-alt"></i></a>
								<a href="sermons.html"><i class="fas fa-file-import"></i></a>
							</div>
						</div>
					</div>
				</div>
				@endforeach
				{{ $profiles->render() }}
				<!--div class="col-sm-6 col-md-4">
					<div class="sermon-item">
						<div class="si-thumb set-bg" style="background-size: contain;"data-setbg="img/sermons/2.jpg"></div>
						<div class="si-content">
							<h4>Perseverance of the Saints</h4>
							<ul class="sermon-info">
								<li>Sermon From: <span>Vincent John</span></li>
								<li>Categories: <span>God, Pray</span></li>
								<li><span>On Monday 23 DEC, 2018</span></li>
							</ul>
							<div class="icon-links">
								<a href="sermons.html"><i class="fas fa-link"></i></a>
								<a href="sermons.html"><i class="far fa-file-archive"></i></a>
								<a href="sermons.html"><i class="fas fa-headphones-alt"></i></a>
								<a href="sermons.html"><i class="fas fa-file-import"></i></a>
							</div>
						</div>
					</div>
				</div-->
				<!--div class="col-sm-6 col-md-4">
					<div class="sermon-item">
						<div class="si-thumb set-bg" style="background-size: contain;"data-setbg="img/sermons/3.jpg"></div>
						<div class="si-content">
							<h4>I Will Be Gracious to Whom I Will Be Gracious</h4>
							<ul class="sermon-info">
								<li>Sermon From: <span>Vincent John</span></li>
								<li>Categories: <span>God, Pray</span></li>
								<li><span>On Monday 23 DEC, 2018</span></li>
							</ul>
							<div class="icon-links">
								<a href="sermons.html"><i class="fas fa-link"></i></a>
								<a href="sermons.html"><i class="far fa-file-archive"></i></a>
								<a href="sermons.html"><i class="fas fa-headphones-alt"></i></a>
								<a href="sermons.html"><i class="fas fa-file-import"></i></a>
							</div>
						</div>
					</div>
				</div-->
				<!--div class="col-sm-6 col-md-4">
					<div class="sermon-item">
						<div class="si-thumb set-bg" style="background-size: contain;"data-setbg="img/sermons/4.jpg"></div>
						<div class="si-content">
							<h4>The Lofty One Whose Name Is Holy</h4>
							<ul class="sermon-info">
								<li>Sermon From: <span>Vincent John</span></li>
								<li>Categories: <span>God, Pray</span></li>
								<li><span>On Monday 23 DEC, 2018</span></li>
							</ul>
							<div class="icon-links">
								<a href="sermons.html"><i class="fas fa-link"></i></a>
								<a href="sermons.html"><i class="far fa-file-archive"></i></a>
								<a href="sermons.html"><i class="fas fa-headphones-alt"></i></a>
								<a href="sermons.html"><i class="fas fa-file-import"></i></a>
							</div>
						</div>
					</div>
				</div-->
				<!--div class="col-sm-6 col-md-4">
					<div class="sermon-item">
						<div class="si-thumb set-bg" style="background-size: contain;"data-setbg="img/sermons/5.jpg"></div>
						<div class="si-content">
							<h4>The Lord, a God Merciful and Gracious</h4>
							<ul class="sermon-info">
								<li>Sermon From: <span>Vincent John</span></li>
								<li>Categories: <span>God, Pray</span></li>
								<li><span>On Monday 23 DEC, 2018</span></li>
							</ul>
							<div class="icon-links">
								<a href="sermons.html"><i class="fas fa-link"></i></a>
								<a href="sermons.html"><i class="far fa-file-archive"></i></a>
								<a href="sermons.html"><i class="fas fa-headphones-alt"></i></a>
								<a href="sermons.html"><i class="fas fa-file-import"></i></a>
							</div>
						</div>
					</div>
				</div-->
				<!--div class="col-sm-6 col-md-4">
					<div class="sermon-item">
						<div class="si-thumb set-bg" style="background-size: contain;"data-setbg="img/sermons/6.jpg"></div>
						<div class="si-content">
							<h4>The Lord Whose Name Is Jealous</h4>
							<ul class="sermon-info">
								<li>Sermon From: <span>Vincent John</span></li>
								<li>Categories: <span>God, Pray</span></li>
								<li><span>On Monday 23 DEC, 2018</span></li>
							</ul>
							<div class="icon-links">
								<a href="sermons.html"><i class="fas fa-link"></i></a>
								<a href="sermons.html"><i class="far fa-file-archive"></i></a>
								<a href="sermons.html"><i class="fas fa-headphones-alt"></i></a>
								<a href="sermons.html"><i class="fas fa-file-import"></i></a>
							</div>
						</div>
					</div>
				</div-->
			</div>
			<!--div class="pagination-area">
				<ul class="pageination-list">
					<li><a href="sermons.html#">1</a></li>
					<li><a href="sermons.html#">2</a></li>
					<li><a href="sermons.html#">3</a></li>
					<li><a href="sermons.html#">Next <i class="fa fa-angle-double-right"></i></a></li>
				</ul>
				<p>Page 1 of 08 results</p>
			</div-->
		</div>
	</section>
	<!-- Sermons list section end -->
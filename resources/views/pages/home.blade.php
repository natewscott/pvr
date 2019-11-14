@extends('welcome')
@section('content')
<section class="hero" id="home-hero">
	<article>
		
	</article>
</section>
<section class="content">
	<article class="inner-content">
		<h1>Paris Valley Ranch</h1>
		<hr>
		<p>
			Paris Valley Ranch sits on 1,000 Acres nestled in the rolling hills of San Ardo, California. The Ranch is about 45 minutes north of Paso Robles and close to some of the finest wineries in Monterey County and Paso Robles. This open range provides our guests with some picturesque views and wide range of activities like sport shooting, hunting and miles of trails perfect for riding a quad or dirt bike. In the evening you can relax with family and friends, while enjoying exceptional food from our private chef, ensuring you will have an adventure you will never forget.
		</p>
		{{-- <p>
			At Paris Valley Ranch,
		</p> --}}
		<hr>
	</article>
	<article class="grid-cards">
		<ul class="cards">
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-main-house"></div>
					<div class="card-content">
						<div class="card-title">Accommodations</div>
						<p class="card-text">
							The Ranch has three houses for guests to stay at. The main house has two bedrooms, one bathroom and a full kitchen. The bunkhouse is an open space and then there is the party house located high up in the hills with a view out over the valley.
						</p>
						<a href="{{ route('accommodations') }} ">Read More</a>
						<main class="page-wrap">
							<section class="main-content">
								<div class="fullscreen-bg">
									<video autoplay muted loop class="fullscreen-bg_video">
										<source src="img/video/pvr-video.mp4" type="video/mp4">
									</video>
								</div>
								<div id="video-cap">
									<article id="home-title">
										<h1>Paris Valley Ranch</h1>
										<h2>Find your prefect place.</h2>
									</article>
								</div>
								<article class="inner-content" id="home-about">
									<h1>Paris Valley Ranch</h1>
									<hr>
									<p>
										Paris Valley Ranch sits on 1,000 Acres nestled in the rolling hills of San Ardo, California. The Ranch is about 45 minutes north of Paso Robles and close to some of the finest wineries in Monterey County and Paso Robles. This open range provides our guests with some picturesque views and wide range of activities like sport shooting, hunting and miles of trails perfect for riding a quad or dirt bike. In the evening you can relax with family and friends, while enjoying exceptional food from our private chef, ensuring you will have an adventure you will never forget.
									</p>
									<hr>
								</article>
								<article class="img-grid">
									<ol>
										<figure class="img-desc">
											<img src="img/cards/main-house.jpg" alt="sq-sample26"/>
											<figcaption>
											<h1>Accommodations</h1>
											<h2>Learn More</h2>
											</figcaption>
											<a href="{{ route('accommodations') }} "></a>
										</figure>
										<figure class="img-desc">
											<img src="img/cards/quads.jpg" alt="sq-sample27"/>
											<figcaption>
											<h1>Ranch Activities</h1>
											<h2>Learn More</h2>
											</figcaption>
											<a href="{{ route('activities')}}"></a>
										</figure>
										<figure class="img-desc">
											<img src="img/cards/ranch-info.jpg" alt="sq-sample28"/>
											<figcaption>
											<h1>Ranch Info</h1>
											<h2>Learn More</h2>
											</figcaption>
											<a href="{{ route('info')}}"></a>
										</figure>
									</ol>
								</article>
							</section>
							<section class="map">
								<iframe class="pvr-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.2387498295743!2d-120.99813354894738!3d36.06328031643342!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8092e729d3ee6107%3A0xf7e16071155dd7fc!2sRancho%20San%20Lucas!5e0!3m2!1sen!2sus!4v1573683337382!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
							</section>
						</main>
						<footer id="home-footer">
							<article>
								
							</article>
							<article class="contact">
								<form action="POST">
									<fieldset>
										<div class="formrow">
											<div class="formitem col1of2">
												<label class="label" for="name">Name</label>
												<input type="text" name="name" id="name" x-autocompletetype="given-name"/>
											</div>
											<div class="formitem col1of2">
												<label class="label" for="last-name">Last Name</label>
												<input type="text" name="last-name" id="last-name" x-autocompletetype=""/>
											</div>
										</div>
										<div class="formrow">
											<div class="formitem">
												<label class="label" for="email">Email</label>
												<input type="email" name="email" id="email" x-autocompletetype="email"/>
											</div>
										</div>
										<div class="formrow">
											<div class="formitem">
												<label class="label req" for="message">Message</label>
												<textarea name="message" id="message" cols="40" rows="5" required="required"></textarea>
											</div>
										</div>
										
									</li>
								</ul>
							</article>
						</section>
						@stop
					</fieldset>
					<div class="buttons">
						<div class="forth">
							<button class="primary button">Submit</button>
						</div>
					</div>
				</form>
			</article>
		</footer>
		@endsection
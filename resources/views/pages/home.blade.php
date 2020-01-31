@extends('welcome')
@section('content')
<main class="page-wrap">
	@include('includes/messages')
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
			<h1>Plan your stay with us</h1>
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
		<iframe class="pvr-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27663.00527722873!2d-120.98073060739482!3d36.037080531341076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8092e0bae3135073%3A0x7fe2516bca923e46!2s59038%20Paris%20Valley%20Rd%2C%20San%20Ardo%2C%20CA%2093450!5e0!3m2!1sen!2sus!4v1580428623170!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</section>
</main>
@endsection
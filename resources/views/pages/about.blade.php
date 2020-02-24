@extends('main')
@section('title', '| About Us')
@section('description', 'Paris Valley Ranch is family owned and operated by the Mack Family. The Ranch sites on 1,000 acres in the rolling hills of the San Ardo CA.')
@section('keywords', 'ranch, san ardo, family')
@section('content')
<section class="hero" id="about-hero">
	<article>
		<h1>Who We Are</h1>
	</article>
</section>
<section class="content">
	<article class="inner-content">
		<p>
			Paris Valley Ranch was founded in 2016 by the Mack Family. The Ranch sits on 1,000 acres in the rolling hills of the San Ardo CA. The Ranch was founded with the intent of providing it's guest with world class amenities, but allow you to be completely removed from the modern world. Whether you are looking for a quick relaxing weekend get away or a chance to do some hunting. Paris Valley Ranch has it all for you.
		</p>
	</article>
	<hr>
	<article class="grid-cards" id="about">
		<ul class="cards">
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-reed"></div>
					<div class="card-content">
						<div class="card-title">Reed Mack</div>
						<div class="card-price">Owner</div>
						{{-- <p class="card-text"></p> --}}
					</div>
				</div>
			</li>
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-spencer"></div>
					<div class="card-content">
						<div class="card-title">Spencer Keiser</div>
						<div class="card-price">Facilities Manager</div>
						{{-- <p class="card-text"></p> --}}
					</div>
				</div>
			</li>
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-lisa"></div>
					<div class="card-content">
						<div class="card-title">Lisa LaMack</div>
						<div class="card-price">Booking Coordinator</div>
						{{-- <p class="card-text">.</p> --}}
					</div>
				</div>
			</li>
		</ul>
	</article>
</section>
@stop
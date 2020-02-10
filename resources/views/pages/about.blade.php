@extends('main')
@section('content')
<section class="hero" id="about-hero">
	<article>
		<h1>Who We Are</h1>
	</article>
</section>
<section class="content">
	<article class="inner-content">
		<p>
			Paris Valley Ranch was founded in 2016 by the Mack Family. The Ranch sites on 1,000 acres in the rolling hills of the San Ardo CA. The Ranch was founded with the intent of giving providing it's guest with world class aminities, but allow you to be completely removed from the modern world. Weither you are looking for a quick realxing weekend get away or a chance to do some hunt Paris Valley Ranch has it all for you.
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
						{{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi officiis ea dignissimos, exercitationem aut corporis dolore sunt debitis expedita illo voluptatibus aliquid cumque voluptas, itaque vel! Voluptatum provident, laboriosam rem?</p> --}}
					</div>
				</div>
			</li>
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-spencer"></div>
					<div class="card-content">
						<div class="card-title">Spencer Keiser</div>
						<div class="card-price">Facilities Manager</div>
						{{-- <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis molestiae, enim consectetur iste cum aperiam facere, quasi nobis ea numquam dolores error facilis quia velit optio saepe, animi minima sed.</p> --}}
					</div>
				</div>
			</li>
		</ul>
	</article>
</section>
@stop
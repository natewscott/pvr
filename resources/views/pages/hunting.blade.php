@extends('main')
@section('title', '| Hunting Packages')
@section('description', 'Paris Valley Ranch has the perfect hunt for everybody no matter the skill level. All our hunts are guided with experts that know the terrain and all the best spots to find the prey that you are looking for.')
@section('keywords', 'hunting, bird hunts, pig hunts, turkey hunts, guided, shooting, outdoors, skill.')
@section('content')
<section class="hero" id="hunting-hero">
	<article>
		<h1>Bag Your Next Tag</h1>
		{{-- <h1>is Waiting</h1> --}}
	</article>
</section>
<section class="content">
	<article class="inner-content">
		<p>
			<em>
			* All hunts require a non-refundable deposit to book (this will go towards your payment).
			</em>
		</p>
		<hr>
		<article class="grid-cards">
			<ul class="cards">
				<li class="cards-item">
					<div class="card">
						<div class="card-image card-image-competition"></div>
						<div class="card-content">
							<div class="card-title">Shooting Competition</div>
							<div class="card-price">$450 per person</div>
							<hr>
							<ul class="card-text">
								<li>1/2 day</li>
								<li>Timed plate rack shooting</li>
								<li>Dueling rack</li>
								<li>Lunch is included</li>
							</ul>
							{{-- <a href="{{ route('book hunting')}} ">Book Now</a> --}}
						</div>
					</div>
				</li>
				<li class="cards-item">
					<div class="card">
						<div class="card-image card-image-bird-hunt"></div>
						<div class="card-content">
							<div class="card-title">Bird Hunt</div>
							<div class="card-price">$925 per person</div>
							<hr>
							<ul class="card-text">
								<li>Day Hunt</li>
								<li>2 hunters are required</li>
								<li>2 hunters, 1 guide</li>
								<li>Lunch is included</li>
							</ul>
							<a href="{{ route('bird hunt')}} ">Learn more</a>
						</div>
					</div>
				</li>
				<li class="cards-item">
					<div class="card">
						<div class="card-image card-image-sping-turkey"></div>
						<div class="card-content">
							<div class="card-title">Spring Turkey Hunt</div>
							<div class="card-price">$1850 per person</div>
							<hr>
							<ul class="card-text">
								<li>Day Hunt</li>
								<li>2 hunters are required</li>
								<li>Up to 2 Turkeys per hunter</li>
								<li>Breakfast, Lunch and Dinner are included</li>
							</ul>
							<a href="{{ route('spring hunt')}} ">Learn More</a>
						</div>
					</div>
				</li>
				<li class="cards-item">
					<div class="card">
						<div class="card-image card-image-day-hunt"></div>
						<div class="card-content">
							<div class="card-title">PVR Day hunt</div>
							<div class="card-price">$1950 per person</div>
							<hr>
							<ul class="card-text">
								<li>Day Hunt</li>
								<li>Up to 2 hunters, 1 guide</li>
								<li>Up to 2 Turkeys per hunter</li>
								<li>Breakfast, Lunch and Dinner are included</li>
							</ul>
							<a href="{{ route('day hunt')}} ">Learn More</a>
						</div>
					</div>
				</li>
				<li class="cards-item">
					<div class="card">
						<div class="card-image card-image-two-day-hunt"></div>
						<div class="card-content">
							<div class="card-title">PVR two Day hunt</div>
							<div class="card-price">$3700 per person</div>
							<hr>
							<ul class="card-text">
								<li>2 Day's hunting</li>
								<li>Turkey, Pig and birds</li>
								<li>Breakfast, lunch and dinner are included</li>
								<li>Includes lodging</li>
							</ul>
							<a href="{{ route('two day')}} ">Learn More</a>
						</div>
					</div>
				</li>
				<li class="cards-item">
					<div class="card">
						<div class="card-image card-image-three-day-hunt"></div>
						<div class="card-content">
							<div class="card-title">PVR three Day hunt</div>
							<div class="card-price">$6000 per person</div>
							<hr>
							<ul class="card-text">
								<li>Up to 3 day's of hunting</li>
								<li>One deer</li>
								<li>Breakfast, lunch and dinner are included</li>
								<li>Includes lodging</li>
							</ul>
							<p class="card-text">
								<em>* Must be booked 6 months in advance.</em>
							</p>
							<a href="{{ route('three day')}} ">Learn More</a>
						</div>
					</div>
				</li>
			</ul>
		</article>
	</article>
</section>
@stop
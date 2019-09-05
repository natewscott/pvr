@extends('main')
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
			Paris Valley Ranch sits on 1,000 Acres nestled in the rolling hills of San Ardo, California. The Ranch is about 45 minutes north of Paso Robles and close to some of the finest wineries in Monterey County and Paso Robles. This open range provides our guests with some picturesque views and wide range of activities like sport shooting, hunting and miles of trails perfect for quadding or dirt biking. In the evening you can relax with family and friends, while enjoying exceptional food from our private chef, ensuring you will have an adventure you will never forget.
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
					</div>
				</div>
			</li>
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-activities"></div>
					<div class="card-content">
						<div class="card-title">Ranch Activities</div>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, impedit nostrum nulla non quis repellat ad mollitia! Eos earum animi minus. Laboriosam suscipit explicabo voluptates voluptatem quae, unde similique quos.
						</p>
						<a href="{{ route('activities')}} ">Read More</a>
					</div>
				</div>
			</li>
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-info"></div>
					<div class="card-content">
						<div class="card-title">Ranch Info</div>
						<p class="card-text">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, laboriosam obcaecati. Consequuntur totam facilis quibusdam quia, nobis quis ut minus neque nesciunt autem facere odit at architecto, necessitatibus. Deleniti, obcaecati.
						</p>
						<a href="{{ route('info')}} ">Read More</a>
					</div>
				</div>
			</li>
		</ul>
	</article>
</section>
@stop
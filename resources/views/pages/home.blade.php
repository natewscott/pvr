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
			Paris Valley Ranch is a 1,000 Acre ranch nestled in the rolling hills of the Salinas Valley. The ranch consists of 3 grassy valleys, a full shooting range, and miles of trails perfect for quadding or dirt bike riding. Paris Valley Ranch has a main house, a bunkhouse and a “party pad” high on the hill overlooking the entire Salinas Valley. Whether you are looking to do some hunting, practice shooting, do some riding or just have a relaxing get away Paris Valley Ranch has it all.
		</p>
		<hr>
	</article>
	<article class="grid-cards">
		<ul class="cards">
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-main-house"></div>
					<div class="card-content">
						<div class="card-title">Flex</div>
						<p class="card-text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
						<button class="btn btn-block card-btn">Button</button>
					</div>
				</div>
			</li>
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-range"></div>
					<div class="card-content">
						<div class="card-title">Flex Grow</div>
						<p class="card-text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
						<button class="btn btn--block card__btn">Button</button>
					</div>
				</div>
			</li>
			<li class="cards-item">
				<div class="card">
					<div class="card-image card-image-quads"></div>
					<div class="card-content">
						<div class="card-title">Flex Shrink</div>
						<p class="card-text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
						<button class="btn btn-block card-btn">Button</button>
					</div>
				</div>
			</li>
		</ul>
	</article>
</section>
@stop
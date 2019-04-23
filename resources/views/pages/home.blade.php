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
			Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda mollitia magnam at laudantium odit tenetur, amet optio deserunt esse, consequatur aspernatur veniam, quae accusantium animi similique. Reprehenderit dignissimos sint veritatis.
		</p>
		<hr>
	</article>
	<article class="grid-cards">
		<ul class="cards">
			<li class="cards__item">
				<div class="card">
					<div class="card__image card__image--fence"></div>
					<div class="card__content">
						<div class="card__title">Flex</div>
						<p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
						<button class="btn btn--block card__btn">Button</button>
					</div>
				</div>
			</li>
			<li class="cards__item">
				<div class="card">
					<div class="card__image card__image--river"></div>
					<div class="card__content">
						<div class="card__title">Flex Grow</div>
						<p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
						<button class="btn btn--block card__btn">Button</button>
					</div>
				</div>
			</li>
			<li class="cards__item">
				<div class="card">
					<div class="card__image card__image--record"></div>
					<div class="card__content">
						<div class="card__title">Flex Shrink</div>
						<p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
						<button class="btn btn--block card__btn">Button</button>
					</div>
				</div>
			</li>
		</ul>
	</article>
</section>
@stop
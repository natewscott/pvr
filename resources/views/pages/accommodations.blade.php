@extends('main')
@section('content')
<section class="hero" id="ranch-hero">
	<article>
		
	</article>
</section>
<section class="content" id="article-img-text">
	<article class="inner-content">
		<h1>Accomodations</h1>
		<hr>
		<articele class="img-text">
			<img src="img/houses/main-house.jpg" alt="">
			<h2>Main House</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates odit temporibus enim veniam cupiditate, natus consectetur sit consequuntur impedit blanditiis, aspernatur eum mollitia. <a href="{{ route('main house')}} ">See More</a>
			</p>
		</articele>
		<articele class="img-text">
			<img src="img/houses/party-pad.jpg" alt="">
			<h2>Party Pad</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Expedita reprehenderit, labore consectetur ea. Neque quos fugit doloremque illo ex, sapiente voluptates. <a href="{{ route('bunk_house')}} ">See More</a>
			</p>
		</articele>
		<articele class="img-text">
			<img src="img/houses/bunk-house.jpg" alt="">
			<h2>Bunk House</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente accusamus, magni aut voluptatum debitis. Autem impedit, vero illum, voluptas nulla laboriosam consequuntur. <a href="{{ route('party pad')}}">See More</a>
			</p>
		</articele>
	</article>
</section>
@stop
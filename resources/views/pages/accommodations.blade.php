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
			<div class="left">
				<img src="img/houses/main-house.jpg" alt="">
				<h2>Main House</h2>
			</div>
			<div class="right">
				<h3>Average per Night: $1,025</h3>
				<p>The main house will sleep up to 4 people comfortably. <a href="{{ route('main house')}} ">Learn More</a>
				</p>
			</div>
		</articele>
		<articele class="img-text">
			<img src="img/houses/bunk-house.jpg" alt="">
			<h2>Bunk House</h2>
			<h3>Average per Night: $500</h3>
			<p>The bunk house will sleep up to 4 people comfortably. <a href="{{ route('bunk_house')}}">Learn More</a>
			</p>
		</articele>
		<articele class="img-text">
			<img src="img/houses/party-pad.jpg" alt="">
			<h2>Party Pad</h2>
			<h3>Average per Night: $1,000</h3>
			<p>The bunk house will sleep up to 4 people comfortably. <a href="{{ route('party pad')}} ">Learn More</a>
			</p>
		</articele>
	</article>
</section>
@stop
@extends('main')
@section('content')
<section class="hero" id="activites-hero">
	<article>
		
	</article>
</section>
<section class="content" id="article-img-text">
	<article class="inner-content">
		<h1>Activities</h1>
		<hr>
		<article class="img-text">
			<img src="img/activities/hunting.jpg" alt="Hunting Station" >
			<h2>Hunting</h2>
			<h3></h3>
			<p>Paris Valley Ranch offers five hunting packages. <a href="{{ route('hunting')}}">Learn More</a></p>
		</article>
		<article class="img-text">
			<img src="img/activities/riding.jpg" alt="Motorcycle" >
			<h2>Riding</h2>
			<h3></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque nobis illo quidem, autem atque alias deserunt voluptates tempore obcaecati tenetur fugiat, sint error doloribus consectetur ut sequi! Distinctio, officia, molestias.</p>
		</article>
		<article class="img-text">
			<img src="img/activities/shooting.jpg" alt="Shooting Range">
			<h2>Shooting Range</h2>
			<h3></h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem a neque, officiis saepe numquam inventore provident unde praesentium. Voluptas cumque velit laboriosam, voluptatem quidem, consequatur nobis deleniti ipsa commodi distinctio.</p>
		</article>
	</article>
</section>
@stop
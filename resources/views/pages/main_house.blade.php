@extends('main')
@section('content')
<section class="hero" id="main-house">
	<article>
		
	</article>
</section>
<section class="content">
	<article class="inner-content">
		<h1>
		The Main House
		</h1>
		<hr>
		<p>
			The main cabin has two bedrooms and two bathrooms, a living room and a full kitchen. This cabin can comfortably sleep up to 6 people. The main cabin is available for both hunting parties as well as special events.
		</p>
	</article>
	<article class="inner-content">
		<hr>
		<div class="list">
				<div class="list-title">
					<strong>
					Amenities
					</strong>
				</div>
			<div class="list-content">
				<div class="list-item">
					<i class="icon-tv"></i>
					<span>T.V.</span>
				</div>
				<div class="list-item">
					<i class="icon-washer"></i>
					<span>Washer & Dryer</span>
				</div>
				<div class="list-item">
					<i class="icon-fan"></i>
					<span>Heating & Air-Conditioning</span>
				</div>
			</div>
		</div>
		<hr>
	</article>
	<article class="inner-content">
		<div class="list">
			<div class="list-title">
				<strong>
					General Pricing
				</strong>
			</div>
			<div class="list-content">
				<div class="list-item">
					Price Per Night:
					<strong>$1,025</strong>
				</div>
			</div>
		</div>
		<div class="list">
			<div class="list-title">
				<strong>
					Day Party Pricing
				</strong>
			</div>
			<div class="list-content">
				<div class="list-item">
					Hourly:
					<strong>$300</strong>
				</div>
				<div class="list-item">
					All Day:
					<strong>$6,500</strong>
				</div>
			</div>
		</div>
		<div class="buttons">
			<a href="{{ route('booking')}} " class="book button">Book Now</a>
		</div>
		<hr>
	</article>
</section>
<section id="masonry">
	<img src="img/accommodations/main/mh-entrance.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-entrance-2.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-pig.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-kitchen.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-living-tv.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-living-room.jpg" /alt="" title="" >
	<img src="img/accommodations/main/mh-dining.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-spare-bed.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-bunks.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-master-view.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-master-bed.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-grapes-wrath.jpg" alt="" title="" />
	<img src="img/accommodations/main/mh-deer-ice.jpg" alt="" title="" />
</section>
<div class="lightbox">
	<div class="title"></div>
	<div class="filter"></div>
	<div class="arrowr"></div>
	<div class="arrowl"></div>
	<div class="close"></div>
</div>
@stop
@section('scripts')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
$(window).load(function() {
$("section img").click(function() {
$(".lightbox").fadeIn(300);
$(".lightbox").append("<img src='" + $(this).attr("src") + "' alt='" + $(this).attr("alt") + "' />");
$(".filter").css("background-image", "url(" + $(this).attr("src") + ")");
$("html").css("overflow", "hidden");
if ($(this).is(":last-child")) {
$(".arrowr").css("display", "none");
$(".arrowl").css("display", "block");
} else if ($(this).is(":first-child")) {
$(".arrowr").css("display", "block");
$(".arrowl").css("display", "none");
} else {
$(".arrowr").css("display", "block");
$(".arrowl").css("display", "block");
}
});
$(".close").click(function() {
$(".lightbox").fadeOut(300);
$(".lightbox img").remove();
$("html").css("overflow", "auto");
});
$(document).keyup(function(e) {
if (e.keyCode == 27) {
$(".lightbox").fadeOut(300);
$(".lightbox img").remove();
$("html").css("overflow", "auto");
}
});
$(".arrowr").click(function() {
var imgSrc = $(".lightbox img").attr("src");
var search = $("section").find("img[src$='" + imgSrc + "']");
var newImage = search.next().attr("src");
$(".lightbox img").attr("src", newImage);
$(".filter").css("background-image", "url(" + newImage + ")");
if (!search.next().is(":last-child")) {
$(".arrowl").css("display", "block");
} else {
$(".arrowr").css("display", "none");
}
});
$(".arrowl").click(function() {
var imgSrc = $(".lightbox img").attr("src");
var search = $("section").find("img[src$='" + imgSrc + "']");
var newImage = search.prev().attr("src");
$(".lightbox img").attr("src", newImage);
$(".filter").css("background-image", "url(" + newImage + ")");
if (!search.prev().is(":first-child")) {
$(".arrowr").css("display", "block");
} else {
$(".arrowl").css("display", "none");
}
});
});
</script>
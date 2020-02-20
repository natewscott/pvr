@extends('main')
@section('title', '| Party Pad')
@section('description', 'Enjoy panoramic views from the ocean to the Sierra Nevada mountains all while staying in this luxurious two bed cabin.')
@section('keywords', 'luxury, cabin, panoramic, california, mountains, hunting')
@section('content')
<section class="hero" id="party-pad-hero">
	<article>
		<h1>
		The Party Pad
		</h1>
	</article>
</section>
<section class="content">
	<article class="inner-content">
		<div id="reservation">
			<article class="reserve-info">
				<p>
					The party pad is the perfect spot to if you want to be completely removed from the outside world. This little cabin is nestled far back in the ranch high a top a hill. The pad give you an amazing 360 degree views of the of the Sierra Nevada's, the Central Valley and out to the Pacific Ocean.
				</p>
				<hr>
				<div class="list">
					<div class="list-title">
						<strong>
						Amenities
						</strong>
					</div>
					<div class="list-content">
						<div class="list-item">
							<i class="icon-fan"></i>
							<span>Heating & Air-Conditioning</span>
						</div>
						<div class="list-item">
							<i class="icon-bbq"></i>
							<span>BBQ Grill</span>
						</div>
						<div class="list-item">
							<i class="icon-fire"></i>
							<span>Fire Pit</span>
						</div>
					</div>
				</div>
				<hr>
				<div class="list">
					<div class="list-title">
						<strong>
						General Pricing
						</strong>
					</div>
					<div class="list-content">
						<div class="list-item">
							Price Per Night:
							<strong>$1,000</strong>
						</div>
					</div>
				</div>
				<div class="list">
					<div class="list-title">
						<strong>
						Details
						</strong>
					</div>
					<div class="list-content">
						<div class="list-item">
							<strong>
							Check in:
							</strong>
							After 2 PM
						</div>
						<div class="list-item">
							<strong>
							Check out:
							</strong>
							before 12 PM
						</div>
						<div class="list-item">
							<strong>
							Cancellation:
							</strong>
							24 hour notice is required
						</div>
					</div>
				</div>
			</article>
			<aside class="reserve-booking">
				<form action="{{ route('party pad send') }}" method="POST">
					{{ csrf_field() }}
					<fieldset>
						<div class="formrow">
							<div class="formitem">
								<label class="label req" for="name">Name</label>
								<input type="text" name="name" value="{{ old('name')}} " id="name" required="required" />
							</div>
						</div>
						<div class="formrow">
							<div class="formitem">
								<label class="label req" for="phone">Phone</label>
								<input type="tel" name="phone" value="{{ old('phone')}} " id="phone" required="required" />
							</div>
						</div>
						<div class="formrow">
							<div class="formitem">
								<label class="label req" for="email">Email</label>
								<input type="email" name="email" value="{{ old('email')}}" id="email" required="required"/>
							</div>
						</div>
						<div class="formrow">
							<div class="formitem ">
								<label class="label req" for="checkin">Check-in</label>
								<input type="date" name="checkin" id="checkin" required="required" />
							</div>
							<div class="formitem ">
								<label class="label req" for="checkout">Check-out</label>
								<input type="date" name="checkout" id="checkout" required="required"/>
							</div>
						</div>
						<div class="formrow">
							<div class="formitem">
								<label class="label req" for="guests">Number of Guests</label>
								<input type="number" name="guests" id="guests" required="required" />
							</div>
						</div>
						<div class="buttons">
							
							<div class="buttons">
								<div class="back">
									<button class="primary button" type="submit" value="">Check Availability</button>
								</div>
							</div>
						</fieldset>
					</form>
				</aside>
			</article>
		</section>
	</div>
	<section id="masonry">
		<img src="img/accommodations/party/pp-bbq-pit.jpg" />
		<img src="img/accommodations/party/pp-view.jpg" />
		<img src="img/accommodations/party/pp-beds.jpg" />
		<img src="img/accommodations/party/pp-beds-2.jpg" />
		<img src="img/accommodations/party/pp-living-room.jpg" />
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
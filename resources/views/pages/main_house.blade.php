@extends('main')
@section('title', '| Main Cabin')
@section('description', 'Enjoy first class luxury away from all the hustle and bustle of city life at Paris Valley Ranch. The main cabin has all the luxuries and furnishings that you need to fully decompress.')
@section('keywords', 'cabin, ranch, relaxing, luxury, furnished')
@section('content')
<section class="hero" id="main-house">
	<article>
		<h1>
			Main House
		</h1>
	</article>
</section>
<section class="content">
	@include('includes/messages')
	<article class="inner-content">
		<div id="reservation">
			<article class="reserve-info">
				<p>
					The main cabin has two bedrooms and two bathrooms, a living room and a full kitchen. The main cabin is available for both hunting parties as well as special events.
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
						<div class="list-item">
							<i class="icon-kitchen"></i>
							<span>Full Kitchen</span>
						</div>
						<div class="list-item">
							<i class="icon-bath"></i>
							<span>Full Bathroom</span>
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
							<strong>Price Per Night:</strong>
							$1,025
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
								Sleeps:
							</strong>
							<br>
							<em>Up to 6 people</em>
						</div>
						<div class="list-item">
							<strong>
							Check in:
							</strong>
							<br>
							<em>After 2 PM</em>
						</div>
						<div class="list-item">
							<strong>
								Check out:
							</strong>
							<br>
							<em>before 12 PM</em>
						</div>
						<div class="list-item">
							<strong>
								Cancellation:
							</strong>
							<br>
							<em>24 hour notice is required</em>
						</div>
					</div>
				</div>
			</article>
			<aside class="reserve-booking">
				<form action="{{ route('main house form') }}" method="POST">
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
								<input type="email" name="email" value="{{ old('email')}} " id="email" required="required"/>
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
			</section>
		</div>
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
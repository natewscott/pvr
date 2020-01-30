@extends('main')
@section('content')
<section class="hero" id="three-day-hero">
	<article>
		<h1>Paris Valley Three Day Hunt</h1>
	</article>
</section>
<section class="content">
	<article class="inner-content" id="hunting-content">
		<div id="hunts">
			<article class="hunt-info">
				{{-- <h2>Paris Valley Bird Hunt</h2> --}}
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero ut perspiciatis, aspernatur odio. Adipisci officia vel, ipsum modi iure corporis distinctio ducimus, aliquid nemo! Assumenda quisquam repellendus explicabo perferendis provident!</p>
				<hr>
				<h3>Hunt Rules</h3>
				<ul>
					<li>Up to 3 day's of hunting</li>
					<li>One deer</li>
					<li>Breakfast, lunch and dinner are included</li>
					<li>Includes lodging</li>
				</ul>
				<hr>
				<h3>Safety Rules</h3>
				<p>
					All who are participating in the hunt must sign and return the hunter safefty rules before they can partake in the hunt. You can download the form here: <a href="img/pdf/pvr_gun_safety_rules.pdf" download>Hunter Safety Rules</a>
				</p>
				<ul>
					<li>Guns need to carried in there cases to and from the shooting area.</li>
					<li>Guns and ammunition are to be stored separately.</li>
					<li>Always keep the muzzle of a gun pointed in a safe direction.</li>
					<li>Make sure the gun barrel is free from obstructions.</li>
					<li>Treat every gun as it were loaded.</li>
					<li>Leave the safety on until you are ready to shoot.</li>
					<li>Guns must be unloaded when not in use.</li>
					<li>Actions must be open when not hunting or shooting.</li>
					<li>Always check the back stop.</li>
					<li>Make sure you are using the correct ammunition.</li>
					<li>Always wear eye and ear protection.</li>
					<li>Do not cosume alcohol or drugs before or while shooting.</li>
				</ul>
			</article>
			<aside class="reserve">
				<form action="">
					<fieldset>
						{{ csrf_field() }}
						<div class="formrow">
							<div class="formitem col1of2">
								<label class="label req" for="checkin">Check-in</label>
								<input type="date" name="checkin" id="checkin" required="required" />
							</div>
							<div class="formitem col1of2">
								<label class="label req" for="checkout">Check-out</label>
								<input type="date" name="checkout" id="checkout" required="required"/>
							</div>
						</div>
						<div class="formrow">
							<div class="formitem">
								<label class="label req" for="guests">Number of Hunters</label>
								<input type="number" name="guests" id="guests" required="required" />
							</div>
						</div>
						<div class="buttons">
							
							<div class="buttons">
								<div class="back">
									<button class="primary button" type="submit" value="">Check Availabily</button>
								</div>
							</div>
						</fieldset>
					</form>
				</aside>
		</div>
		</article>
	</section>
	@endsection
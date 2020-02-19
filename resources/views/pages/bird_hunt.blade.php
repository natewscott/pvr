@extends('main')
@section('content')
<section class="hero" id="bird-hunt-hero">
	<article>
		<h1>Paris Valley Bird Hunt</h1>
	</article>
</section>
<section class="content">
	<article class="inner-content" id="hunting-content">
		<div id="reservation">
			<article class="reserve-info">
				<h2>The Hunt</h2>
				<p>The Paris Valley Bird Hunt is a one day hunt. All our bird hunts are seasonal you will have to contact us to find out what birds are currently in season.</p>
				<hr>
				<h3>What to Expect</h3>
				<p>
					Each hunt will have a Paris Valley Ranch guide with it for the duration of the trip. Our guides are experienced in navigating the terrain of the ranch and know the best spots to locate animals. The guides will educate the hunters on the rules of the ranch and give you tips ensuring that you have the best possible hunting experience.
				</p>
				<p>
					Hunters are expected to come prepared for varying terrain as well any possible weather condition that can happen. Hunters are also expected to have a valid California hunting license.
				</p>
				<hr>
				<h3>Ranch Safety Rules</h3>
				<p>
					All who are participating in the hunt must sign and return the hunter safety rules before they can partake in the hunt. You can download the form here: <a href="img/pdf/pvr_gun_safety_rules.pdf" download>Hunter Safety Rules</a>
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
					<li>Do not consume alcohol or drugs before or while shooting.</li>
				</ul>
			</article>
			<aside class="reserve-booking">
				<form action="{{ route('bird hunt send')}}" method="POST">
					<fieldset>
						{{ csrf_field() }}
						<div class="formrow">
							<div class="formitem">
								<label for="name" class="label req">Name</label>
								<input type="text" name="name" value="{{ old('name')}}" id="name" required="required">
							</div>
						</div>
						<div class="formrow">
							<div class="formitem">
								<label for="phone" class="label req">Phone</label>
								<input type="text" name="phone" value="{{ old('phone')}} " id="phone" required="required">
							</div>
						</div>
						<div class="formrow">
							<div class="formitem">
								<label for="email" class="label req">Email</label>
								<input type="text" name="email" value="{{ old('email')}} " id="name" required="required">
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
								<label class="label req" for="guests">Number of Hunters</label>
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
			</div>
		</article>
	</section>
	@endsection
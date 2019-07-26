@extends('bookings')
@section('styles')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@section('content')
<section class="content" style="margin:0;">
	<article class="inner-content">
		<form action="" method="">
			<fieldset>
				<div class="formrow">
					<div class="formitem col1of2">
						<label for="check-in req" class="label">Check-In</label>
						<input type="text" id="check-in" placeholder="mm/dd/yyyy" required="required">
					</div>
					<div class="formitem col1of2">
						<label for="check-out req" class="label">Check-Out</label>
						<input type="text" id="check-out" placeholder="mm/dd/yyyy" required="required">
					</div>
				</div>
				<div class="formrow">
					<div class="formitem">
						<label for="number-guests req">Number of Guest</label>
						<input type="number" id="number-guests" required="required">
					</div>
				</div>
			</div>
			<div class="formrow">
				<div class="formitem col1of2">
					<label for="firstname req" class="label">First Name</label>
					<input type="text" name="firstname" id="firstname" placeholder="First Name" required="required" x-autocomplete="given-name">
				</div>
				<div class="formitem col1of2">
					<label for="lastname req" class="label">Last Name</label>
					<input type="text" name="lastname" id="lastname" placeholder="Last Name" x-autocomplete="family-name">
				</div>
			</div>
			<div class="formrow">
				<div class="formitem">
					<label for="address" class="label">Address</label>
					<input type="text" name="address" id=
					"address" x-autocomplete="address-line1">
				</div>
			</div>
			<div class="formrow">
				<div class="formitem col1of2">
					<label for="city" class="label">City</label>
					<input type="text" name="city" id="city" x-autocomplete="city">
				</div>
				<div class="formitem col1of2">
					<label for="state" class="label">State</label>
					<input type="text" name="state" id="state" x-autocomplete="state">
				</div>
			</div>
		</div>
		<div class="formrow">
			<div class="formitem col1of2">
				<label for="email" class="label">Email</label>
				<input type="email" name="email" id="email" x-autocomplete="email">
			</div>
			<div class="formitem col1of2">
				<label for="phone" class="label">Phone</label>
				<input type="tel" name="phone" id="phone" x-autocomplete="tel">
			</div>
		</div>
	</fieldset>
	<div class="buttons">
		<button class="book button" type="submit" value="">Submit</button>
	</div>
</form>
</article>
</section>
@stop
@section('scripts')
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$( function() {
		$( "#check-in" ).datepicker();
	} );
</script>
<script>
	$( function() {
		$( "#check-out" ).datepicker();
	} );
</script>
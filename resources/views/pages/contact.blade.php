@extends('main')
@section('content')
<section class="hero" id="contact-hero">
	<article>
		
	</article>
</section>
<section class="content">
	<article class="inner-content">
		@include('includes/messages')
		<form action="{{ route('contact form')}}" method="POST">
				{{ csrf_field() }}
				<fieldset>
					<div class="formrow">
						<div class="formitem col1of2">
							<label class="label" for="name">Name</label>
							<input type="text" name="name" id="name" x-autocompletetype="given-name"/>
						</div>
						<div class="formitem col1of2">
							<label class="label" for="last_name">Last Name</label>
							<input type="text" name="last_name" id="last_name" x-autocompletetype=""/>
						</div>
					</div>
					<div class="formrow">
						<div class="formitem">
							<label class="label" for="email">Email</label>
							<input type="email" name="email" id="email" x-autocompletetype="email"/>
						</div>
					</div>
					<div class="formrow">
						<div class="formitem">
							<label class="label" for="email">Reason for Inquiry</label>
							<input type="text" name="subject" id="subject" />
						</div>
					</div>
					<div class="formrow">
						<div class="formitem">
							<label class="label req" for="msg">Message</label>
							<textarea name="msg" id="msg" cols="40" rows="5" required="required"></textarea>
						</div>
					</div>
					<div class="buttons">
						<div class="forth">
							<button class="primary button" id="contact">Send Message</button>
						</div>
					</div>
				</fieldset>
			</form>
	</article>
</section>
@stop
@extends('main')
@section('content')
<section class="hero" id="contact-hero">
	<article>
		
	</article>
</section>
<section class="content">
	<article class="inner-content">
		<div id="hunts">
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
			<aside class="reserve">
				<iframe class="pvr-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27663.00527722873!2d-120.98073060739482!3d36.037080531341076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8092e0bae3135073%3A0x7fe2516bca923e46!2s59038%20Paris%20Valley%20Rd%2C%20San%20Ardo%2C%20CA%2093450!5e0!3m2!1sen!2sus!4v1580428623170!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</aside>
		</div>
	</article>
</section>
@stop
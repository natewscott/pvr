<footer>
	<section class="footer">
		<article class="contact">
			<form {{route('contact form')}} action="POST">
				{{ csrf_field() }}
				<fieldset>
					<div class="formrow">
						<div class="formitem col1of2">
							<label class="label" for="name">Name</label>
							<input type="text" name="name" id="name" x-autocompletetype="given-name"/>
						</div>
						<div class="formitem col1of2">
							<label class="label" for="last-name">Last Name</label>
							<input type="text" name="last-name" id="last-name" x-autocompletetype=""/>
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
							<label class="label req" for="message">Message</label>
							<textarea name="message" id="message" cols="40" rows="5" required="required"></textarea>
						</div>
					</div>
					<div class="buttons">
						<div class="forth">
							<button class="primary button" id="foot-contact">Send</button>
						</div>
					</div>
				</fieldset>
			</form>
		</article>
		<article id="weather">
			<a class="weatherwidget-io" href="https://forecast7.com/en/36d13n121d02/san-lucas/" data-label_1="SAN LUCAS" data-label_2="WEATHER" data-theme="desert" >SAN LUCAS WEATHER</a>
			<script>
			!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
			</script>
		</article>
	</section>
	<p>
		Paris Valley Ranch | {{ now()->year}}
	</p>
</footer>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/nav.js"></script>
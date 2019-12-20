<footer>
	<article>
	</article>
	<article class="contact">
		<form action="POST">
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
			</fieldset>
			<div class="buttons">
				<div class="forth">
					<button class="primary button" id="foot-contact">Submit</button>
				</div>
			</div>
		</form>
	</article>
	<p>
		Paris Valley Ranch | {{ now()->year}}
	</p>
</footer>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/nav.js"></script>

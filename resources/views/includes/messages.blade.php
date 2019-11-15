@if (Session::has('seccess'))
	<div class="alert-messages">
		<p class="alert" role="alert">
			{{ Session::get('success')}}
		</p>
	</div>
@endif
@if(count($errors) > 0)
	<p class="alert" role="alert">
		<strong>Errors</strong>
		<ul>
			@foreach($errors->all() as $error)
			<li>
				{{$error}}
			</li>
			@endforeach
		</ul>
	</p>
@endif
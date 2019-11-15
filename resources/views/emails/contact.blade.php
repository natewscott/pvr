@component('mail::message')
{{ $request->$name }}
{{ $request->$lastname }}
{{ $request->$email }}
{{ $request->$subject }}
{{ $request->$msg }}
@endcomponent
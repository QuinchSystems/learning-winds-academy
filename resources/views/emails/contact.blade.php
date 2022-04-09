@component('mail::message')

Hello Admin,

{{ $name }} has sent you a message.

@component('mail::panel')
{{ $message }}
@endcomponent

@component('mail::button', ['url' => 'mailto:'.$email])
{{ $email }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

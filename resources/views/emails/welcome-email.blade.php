@component('mail::message')
# Welcome to Acetagram.

This website is built with Laravel.
It is a mini copy of the famous social media "Instagram".

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

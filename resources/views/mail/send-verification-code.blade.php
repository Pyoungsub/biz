<x-mail::message>
# Hello {{ $name }},

Thank you for your inquiry. Please use the verification code below to complete your submission:

<x-mail::panel>
# {{ $code }}
</x-mail::panel>

This code will expire in 5 minutes.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
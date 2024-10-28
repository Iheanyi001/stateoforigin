<x-mail::message>
# Request for Certificate of State of Origin

Hello {{ $app->first_name }},

We have received your request for a Certificate of State of Origin.

Please ensure that the necessary documentation is submitted. Our team will process your request, and you will receive updates via email.


<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

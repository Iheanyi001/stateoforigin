<x-mail::message>
# Application Approved

Hello {{ $app->first_name}}, {{$app->last_name}},

We are pleased to inform you that your application for a Certificate of State of Origin has been approved. You can now download or print your certificate by clicking the link below.


<x-mail::button :url="{{$certificate_url}}">
Download Certificate
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

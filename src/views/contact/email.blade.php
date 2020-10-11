@component('mail::message')
# Introduction
There is a query 
<br/>
From: {{$name}}
<br/>
{{$message}}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

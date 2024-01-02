<x-mail::message>
# Introduction

<p>name: {{$data['name']}}</p>
<p>Email: {{$data['email']}}</p>
<p>Subject: {{$data['subject']}}</p>
<p>Message: {{$data['message']}}</p>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

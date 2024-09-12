<x-mail::message>
# Hello, you have a new Prayer Request!

<h3>First name:{{ $data['fname']}}</h3>
<h3>Last name:{{ $data['lname']}}</h3>
<h3>Subject:{{ $data['subject']}}</h3>
<h3>Email:{{ $data['email']}}</h3>
<h3>Message:{{ $data['message']}}</h3>

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

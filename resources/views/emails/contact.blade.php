<x-mail::message>
# Contact form informations : <br>
First name: {{ $firstName }}<br>
Last Name : {{ $lastName }}<br>
Email : {{ $email }}

Message : {{ $message }}

{{-- <x-mail::button :url="'http://127.0.0.1:8000/'">
Visit us
</x-mail::button> --}}

{{ config('app.name') }}
</x-mail::message>

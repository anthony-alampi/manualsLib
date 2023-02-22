<x-mail::message>
# Cancellation form informations : <br>
This user wants to cancel their subscription <br>
Email : {{ $email }}



{{-- <x-mail::button :url="'http://127.0.0.1:8000/'">
Visit us
</x-mail::button> --}}

{{ config('app.name') }}
</x-mail::message>

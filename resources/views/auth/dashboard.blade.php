@extends('base')

@section('content')


        <div class="update-link-container">
        <h2>API Key</h2>
        <div class="affiliate-container">
            <form class="affiliate-link" action="#" method="dialog">
                @csrf
                <label for="api_key">Your API Key</label>
                <input type="text" id="affiliateInput" name="api_key" value="{{ old('api_key') ?? auth()->user()->api_key }}" disabled >
                <button id="linkCopy">Copy</button>
            </form>
        </div>
    </div>

        <div class="full-container-manuals-downloaded">
            <div class="sub-container-manuals-dl">
                @foreach ($common_names as $name)
                <div class="dl-manual-card">
                    <h3>
                        {{ $name }}
                    </h3>
                </div>
                @endforeach
            </div>
        </div>
@endsection


<p></p>
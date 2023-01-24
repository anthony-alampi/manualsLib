
    <form class="search-form">
            <h2>{{ trans('lang.STR_TITLE_HOMEPAGE_2') }}</h2>
  <div class="input-fields">
    {{-- <label for="brand">Brand</label> --}}
    <input type="text" id="brand" name="brand" placeholder="Brand" class="styled-input">

    {{-- <label for="model">Model</label> --}}
    <input type="text" id="model" name="model" placeholder="Model" class="styled-input">

    {{-- <label for="serial">Serial Number</label> --}}
    <input type="text" id="serial" name="serial" placeholder="Serial Number" class="styled-input">
  </div>
      <button type="submit" id="search-button">Go Search
      <img src="{{asset('assets/img/search.svg')}}" alt="search icon">
    </button>

  {{-- <button type="submit" id="search-button">Go Search</button> --}}
</form>

    

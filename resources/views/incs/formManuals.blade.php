
    <form class="search-form">
  <div class="input-fields">
<h1 class="STR_TITLE_FORM_1">{{trans('lang.STR_TITLE_FORM_1')}}</h1>
<h3 class="STR_TITLE_FORM_2">{{trans('lang.STR_TITLE_FORM_2')}}</h3>
    <label for="brand">Brand</label>
    <input type="text" id="brand" name="brand" class="styled-input">

    <label for="model">Model</label>
    <input type="text" id="model" name="model" class="styled-input">

    <label for="serial">Serial Number</label>
    <input type="text" id="serial" name="serial" class="styled-input">
    
    <button type="submit" id="search-button">Go Search
      <img src="{{asset('assets/img/search.svg')}}" alt="search icon">
    </button>

  </div>
  {{-- <button type="submit" id="search-button">Go Search</button> --}}
</form>

    

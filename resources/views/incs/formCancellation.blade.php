<form action={{route('cancellation.submit')}} method="POST" class='contactCarreers-form-container'>
    @csrf
@if (session('message'))
    <div class="success">
        {{ session('message') }}
    </div>
@endif
    <div class="email-message-container">
        <div class="email-container">
            <label for="email-address">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email">
        </div>
    </div>
    <button type="submit" id="send-button">End Subscription
    </button>

</form
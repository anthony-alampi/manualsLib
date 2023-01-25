<form action="" class='contactCarreers-form-container'>
    @csrf

    <div class="identity-container">
        <div class="first-name-container">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first-name" placeholder="First Name">
        </div>

        <div class="last-name-container">
            <label for="last-name">Last name</label>
            <input type="text" id="last-name" name="last-name" placeholder="Last Name">
        </div>
    </div>

    <div class="email-message-container">
        <div class="email-container">
            <label for="email-address">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter Your Email">
        </div>

        <div class="message-container">
            <label for="message">Message</label>
            <textarea type="text" name="message" id="message" placeholder="Your message goes here.."></textarea>
        </div>
        
    </div>

    <button type="submit" id="send-button">Send Message
    </button>

</form
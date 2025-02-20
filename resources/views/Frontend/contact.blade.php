@extends('Layouts.connection')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737877658/Energy/Group_48097580_pohesc.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <h4>Contact</h4>
                    <h1>
                        Contact Us
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->

<!-- Contact Us -->
<section class="contact-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-lg-6 col-md-12">
                <div class="contact-details">
                    <h2 class="">Reach Out to Us</h2>
                    <p>Fill in the contact form with the appropriate information to send us a message and we will get back to you in 24 hours.</p>
                    <h5 class="mt-4 mb-3"><strong>Contact Details</strong></h5>
                    <p>652 Lagos-Abeokuta Express Way, Alagbado, Adura bus stop, Lagos.</p>
                    <p class="mb-3"><strong>Telephone:</strong><br>+234 913 714 8567<br>+234 913 713 1599</p>
                    <p class="mb-3"><strong>Email:</strong><br>info@baltaienergy.com<br>baltaienergy@gmail.com</p>

                    <!-- <h5 class="mt-4 mb-3"><strong>Social Media</strong></h5>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-x"></i></a>
                    </div> -->

                    <h5 class="mt-4 mb-3"><strong>Get In Touch</strong></h5>
                    <p>Do reach out to us, should you need any intel about waste solutions and management, and we’ll be happy to help you out.</p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 col-md-12 mt-lg-0">
                <form class="Just" id="contactFForm">
                    <div class="mb-4">
                        <label for="fullName" class="form-label mb-3">Full Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your full name" required>
                    </div>
                    <div class="mb-4">
                        <label for="emailAddress" class="form-label mb-3">Email Address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your email address" required>
                    </div>
                    <div class="mb-4">
                        <label for="phoneNumber" class="form-label mb-3">Phone Number</label>
                        <input type="text" class="form-control" name="phoneNumber" id="phoneNumber" placeholder="Your phone number" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label mb-3">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="5" placeholder="Write your message here" required></textarea>
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="notARobot" required>
                            <label class="form-check-label" for="notARobot">I'm not a robot</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Send Message</button>
                </form>

                <p id="responseMessage" style="margin-top: 15px; color: green;"></p>
            </div>

        </div>
    </div>
</section>
<!-- Contact Us Ends -->

<!-- Map -->

<!-- Mapl Us Ends -->
@section('page-content')

@endsection

<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>

<script>
    // Initialize EmailJS
    emailjs.init('7OTHPg9Z5xMdEA6I0');  // Replace with your actual EmailJS user ID

    // Form submission event listener
    document.getElementById('contactFForm').addEventListener('submit', function (event) {
        event.preventDefault();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const phoneNumber = document.getElementById('phoneNumber').value;
        const message = document.getElementById('message').value;

        const emailParams = {
            name: name,
            email: email,
            phoneNumber: phoneNumber,
            message: message
        };

        // Send the email using EmailJS
        emailjs.send('service_gofp5t1', 'template_hb06axz', emailParams)
            .then(function (response) {
                // Success callback
                document.getElementById('responseMessage').innerText = 'Message sent successfully!';
            }, function (error) {
                // Error callback
                document.getElementById('responseMessage').innerText = 'Failed to send message. Please try again.';
            });
    });
</script>
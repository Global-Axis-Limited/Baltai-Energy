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
                    <h5 class="mt-4">Contact Details</h5>
                    <p>652 Lagos-Abeokuta Express Way, Alagbado, Adura bus stop, Lagos.</p>
                    <p><strong>Telephone:</strong><br>+234 913 714 8567<br>+234 913 713 1599</p>
                    <p><strong>Email:</strong><br>info@baltaienergy.com<br>baltaienergy@gmail.com</p>

                    <h5 class="mt-4">Social Media</h5>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-x"></i></a>
                    </div>

                    <h5 class="mt-4">Get In Touch</h5>
                    <p>Do reach out to us, should you need any intel about waste solutions and management, and we’ll be happy to help you out.</p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                <form class="Just">
                    <div class="mb-4">
                        <label for="fullName" class="form-label mb-3">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Your full name" required>
                    </div>
                    <div class="mb-4">
                        <label for="emailAddress" class="form-label mb-3">Email Address</label>
                        <input type="email" class="form-control" id="emailAddress" placeholder="Your email address" required>
                    </div>
                    <div class="mb-4">
                        <label for="phoneNumber" class="form-label mb-3">Phone Number</label>
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Your phone number" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label mb-3">Message</label>
                        <textarea class="form-control" id="message" cols="30" rows="5" placeholder="Write your message here" required></textarea>
                    </div>
                    <div class="mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="notARobot" required>
                            <label class="form-check-label" for="notARobot">
                                I'm not a robot
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Us Ends -->

<!-- Map -->

<!-- Mapl Us Ends -->
@section('page-content')

@endsection
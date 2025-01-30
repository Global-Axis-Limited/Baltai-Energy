@extends('Layouts.connection')

@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrum">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <h1>
                        Finance
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->

<!--  -->
<section class="Pricing">
    <div class="container">
        <h6 class="text-center text-warning">OUR PLANS</h6>
        <h2 class="text-center fw-bold">Our Financing Options</h2>
        <p class="text-center text-muted mb-4">Flexible Payment Plans and Packages Designed for You</p>

        <div class="row mt-5 justify-content-center">
            <!-- Option A -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <h3 class="fw-bold">Option A</h3>
                    <p class="text-muted">Per Month</p>
                    <ul class="list-unstyled">
                        <li>✔️ NO Down Payment</li>
                        <li>✔️ Monthly Installments of N[X]</li>
                        <li>✔️ 24 months Validity</li>
                    </ul>
                    <button class="btn btn-warning w-100 py-3">Purchase Plan</button>
                </div>
            </div>

            <!-- Option B (Highlighted) -->
            <div class="col-md-4">
                <div class="card shadow-lg border-0 text-white" style="background: linear-gradient(180deg, #FFBF47, #E4A400);">
                    <h3 class="fw-bold">Option B</h3>
                    <p>Per Month</p>
                    <ul class="list-unstyled">
                        <li>✔️ N[X] Down Payment</li>
                        <li>✔️ Monthly Installments of N[Y]</li>
                        <li>✔️ 18 months Validity</li>
                    </ul>
                    <button class="btn btn-light w-100 py-3">Purchase Plan</button>
                </div>
            </div>

            <!-- Option C -->
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <h3 class="fw-bold">Option C</h5>
                    <p class="text-muted">Per Month</p>
                    <ul class="list-unstyled">
                        <li>✔️ Full Payment</li>
                        <li>✔️ Save N[Z] with single payment</li>
                        <li>✔️ 6 years Validity</li>
                    </ul>
                    <button class="btn btn-warning w-100 py-3">Purchase Plan</button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section" style="background:#FEF9ED">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-lg-6 col-md-12">
                <div class="contact-details">
                    <h2 style="color: #E4A400;">FINANCING</h2>
                    <h2 class="">Switch to Solar with Flexible Financing Options</h2>
                    <p>As an extension of our services to meet our clients at their point of need, with the goal to improve energy supply, and achieve energy sufficiency, we are happy to provide great payment options to finance the switch to Solar Power. </p>
                    
                    <p>If you are a proud business or homeowner who has done a holistic analysis on the real cost saving benefits of investing in a solar solution, we can make your transition quick and painless with a finance plan that’s just right for you. We've made the process as seamless as possible. </p>
                    <p>Go through the various home and business solutions available and proceed by choosing any of the solutions most suited to your situation to get started. </p>
                    <p>You can also call the numbers on display to speak to an Energy Consultant for professional assistance.</p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                <form class="Just" style="background: #fff; border-radius:5px; padding:70px 30px;">
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
                    <div>
                    <button type="submit" class="btn btn-submit mb-4" required>Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

@endsection
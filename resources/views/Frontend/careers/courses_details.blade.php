@extends('Layouts.connection')


@section('page-content')
<div class="dividerr"></div>
<!-- Hero Section -->
<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 hero-content">
                <h1 class="hero-title">Sales Techniques and Customer Acquisition</h1>
                <p class="hero-text">In this course, you will learn about the core values of Baltai Energy.</p>
            </div>
        </div>
    </div>
</section>
<section class="Justttt">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="fw-bold mb-4">What you'll learn:</h3>
                <h5 class="mb-3">
                    Module Objective:
                </h5>
                <p class="Sales">
                    Equip Sales Relationship Managers (SRMs) with an in-depth understanding of Baltai Energy's history, mission, vision, and core values to inspire confidence and alignment with the company’s goals.
                </p>
                <div class="accordion mt-3" id="courseAccordion">

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                About Baltai Energy
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                Learn about Baltai Energy, its mission, and its role in the industry.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                Our Story
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                Discover the journey of Baltai Energy and how it has grown over time.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                Core Values
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                Learn the fundamental values that drive Baltai Energy's culture.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                Why Choose Baltai Energy?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                Understand why Baltai Energy stands out in the industry.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                Importance of Core Values to SRMs
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                Explore how core values impact the success of SRMs at Baltai Energy.
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
                                Challenge Questions

                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#courseAccordion">
                            <div class="accordion-body">
                                Get Started with the challenge questions
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="course-info-card">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1743743517/freepik__the-style-is-candid-image-photography-with-natural__75552_qxdeif.jpg" class="img-fluid rounded" alt="Course Image">
                    <h5 class="mt-3">About this course</h5>
                    <hr>
                    <p class="icon-text"><i class="fas fa-tag"></i> Free</p>
                    <p class="icon-text"><i class="fas fa-file-alt"></i> 10 lessons</p>
                    <p class="icon-text"><i class="fas fa-clock"></i> 0 hours of video content</p>
                </div>
            </div>

        </div>
    </div>
</section>
<div class="container-fluid cta-section">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="cta-text">Kickstart your journey with Baltai Energy </h2>

            <a href="{{route('kick_start')}}">
                <button class="cta-button" class="btn btn-primary">Start Now</button>
            </a>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Form</h1>
               
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <p class="text-center text-muted mt-3">Create a new account to access the modules</p>
            <form action="" id="contact-form" onsubmit="sendEmail(event)">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-4 mt-2">
                                <label for="fuel-cost" class="form-label text-black">Full Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="name" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Email Address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter email address" id="email" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Phone Number</label>
                                <div class="input-group">
                                    <input type="tel" id="phone" class="form-control" placeholder="Enter phone number" required />
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Message</label>
                                <div class="input-group">
                                    <textarea name="" id="message" cols="30" placeholder="Write your message here" rows="10" required></textarea>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submitBtn" class="btn btn-warning text-white">Submit</button>
                    <div id="loader" class="loader"></div>
                </div>
                <!-- Success Message -->
                <div id="successMessage" class="success-message">
                    ✅ Your message has been sent successfully!
                </div>
            </form>
        </div>
    </div>
</div>
<!-- <div class="dividerr"></div> -->
@endsection
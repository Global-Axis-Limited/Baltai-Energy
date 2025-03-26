@extends('Layouts.connection')


@section('page-content')
<div class="dividerr"></div>
<!-- Hero Section -->
<section class="hero-section d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-6 hero-content">
                <h1 class="hero-title">Protecting Accounts With Moniepoint Two Factor Authentication</h1>
                <p class="hero-text">In this course, you will learn about the core values of Moniepoint.</p>
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
                    <img src="https://res.cloudinary.com/greenmouse-tech/image/upload/v1743007042/AoStyle/NdPr3DXvQa2KEYBXWNjM_The_Moniepoint_Core_Values_d7jhxo.jpg" class="img-fluid rounded" alt="Course Image">
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
            <a href="{{route('login')}}">
                <button class="cta-button">Start Now</button>
            </a>
        </div>
    </div>
</div>


<!-- <div class="dividerr"></div> -->
@endsection
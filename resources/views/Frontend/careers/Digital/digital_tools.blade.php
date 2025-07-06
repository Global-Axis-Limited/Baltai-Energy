@extends('Layouts.connection')
<!-- Beadcrum -->
<section class="Beadcrumm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <p>
                   <a href="{{route('index')}}">Home</a> >> <a href="{{route('baltai')}}">Baltai Learning</a> >> Digital Tools and Technology
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<section class="insights-section">
    <div class="container">
        <h2 class="text-left mb-3">Digital Tools and Technology</h2>
        <p class="mb-4">
            Teach SRMs to leverage digital tools for efficient sales management and customer engagement.
        </p>
        <p class="mb-5"></p>
        <div class="row mt-5">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745869517/Group_48097641_adb6cv.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">CRM Tools for Sales and Customer Management</h5>
                        <p class="card-text">Knowledge and skills to effectively use Customer Relationship Management (CRM) tools for tracking leads, managing customer ...</p>
                    </div>
                    <a href="{{route('crm_tools')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745869517/Group_48097642_nqvqxv.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Digital Platforms for Lead Tracking and Communication</h5>
                        <p class="card-text">Equip SRMs with knowledge of digital platforms that help track leads, manage customer interactions, and communicate effectively...</p>
                    </div>
                    <a href="{{route('lead_tracking')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745869517/Group_48097643_rw0v1g.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Solar System Design Software Basics</h5>
                        <p class="card-text">Solar system design software, enabling SRMs to create accurate system proposals, size solar installations, and communicate...</p>
                    </div>
                    <a href="{{route('solar_system_design')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>

            </div>
            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745869517/Group_48097644_ve9k3o.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">Using Social Media for Customer Outreach</h5>
                        <p class="card-text">How to leverage social media platforms to generate leads, build customer relationships, and increase solar product awareness.</p>
                    </div>
                    <a href="{{route('social_media')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745869517/Group_48097645_s2km5d.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Digital Marketing Fundamentals for SRMs</h5>
                        <p class="card-text">Essential digital marketing skills to generate leads, increase brand awareness, and drive sales for solar energy solutions.</p>
                    </div>
                    <a href="{{route('digital_marketing')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745869517/Group_48097646_wvamk2.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Cybersecurity Awareness and Safe Practices for SRMs</h5>
                        <p class="card-text">Educate SRMs on cybersecurity threats, best practices for protecting digital assets, and safe online behavior to prevent cyberattacks.</p>
                    </div>
                    <a href="{{route('cybersecurity')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="New">
</div>
@section('page-content')

@endsection

<script>
    // Add click event listener for interactivity
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('click', function() {
            let btn = this.querySelector('.enroll-btn');
            btn.style.opacity = '1';
            btn.style.transform = 'translateX(-50%) translateY(-10px)';
        });
    });
</script>
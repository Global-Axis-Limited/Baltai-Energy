@extends('Layouts.connection')

@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrumm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <p>
                        <a href="{{route('index')}}">Home</a> >> <a href="{{route('baltai')}}">Baltai Learning</a> >> Onboarding and Solar Basics
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<section class="insights-section">
    <div class="container">
        <h2 class="text-left mb-3">Onboarding And Solar Basics</h2>
        <p class="mb-4">
            Providing new SRMs with foundational knowledge about Baltai Energy, the SSN campaign, and the basics of solar technology.
        </p>
        <p class="mb-5"></p>
        <div class="row mt-5">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745612702/Group_48097648_qeomc9.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">Getting to Know Baltai Energy: Our Story, Vision, and Values</h5>
                        <p class="card-text">An in-depth understanding of Baltai Energy's history, mission, vision, and core values to inspire confidence and alignment with the company’s goals.</p>
                    </div>
                    <a href="{{route('company_introduction')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745612621/Group_48097641_iycc8j.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Understanding the Solar Solutions Network (SSN) Campaign</h5>
                        <p class="card-text">A comprehensive understanding of the SSN campaign, its goals, target audience, and how it aligns with Baltai Energy’s mission to transform.</p>
                    </div>
                    <a href="{{route('ssn_overview')}}">
                    <button class="btn btn-primary enroll-btn">View courses</button>
                </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745612698/Group_48097642_ix2f8a.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Understanding the Building Blocks of Solar Technology</h5>
                        <p class="card-text">Key components of solar technology—panels, batteries, and inverters. This knowledge will enable SRMs to explain the technology confidently.</p>
                    </div>
                    <a href="{{route('solar_technology')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>

            </div>
            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745612701/Group_48097643_ohjj3x.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">Harnessing Solar Energy: Benefits and Real-World Applications</h5>
                        <p class="card-text">A clear understanding of the key benefits and versatile applications of solar energy, enabling them to communicate its value effectively to.</p>
                    </div>
                    <a href="{{route('solar_energy_benefits')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745612701/Group_48097644_oljzwg.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Ensuring Seamless Solar Transitions: The Customer Onboarding Process</h5>
                        <p class="card-text">A clear understanding of the customer onboarding process, enabling them to guide potential.</p>
                    </div>
                    <a href="{{route('onboarding_process')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745612704/Group_48097645_jfpu6f.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Dressing for Success: Professional Representation as an SRM</h5>
                        <p class="card-text">Importance of professional appearance, adherence to company dress codes, and how their presentation reflects Baltai Energy’s.</p>
                    </div>
                    <a href="{{route('dress_code')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745612704/Group_48097646_imech3.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Communicating with Confidence: Establishing Professional Communication Channels</h5>
                        <p class="card-text">Knowledge and skills to set up and maintain professional communication channels that align.</p>
                    </div>
                    <a href="{{route('communication')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="New">
</div>
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
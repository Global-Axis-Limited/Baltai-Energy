@extends('Layouts.connection')
<!-- Beadcrum -->
<section class="Beadcrumm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <p>
                   <a href="{{route('index')}}">Home</a> >> <a href="{{route('baltai')}}">Baltai Learning</a> >> Compliance and Ethical Standards
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<section class="insights-section">
    <div class="container">
        <h2 class="text-left mb-3">Compliance and Ethical Standards</h2>
        <p class="mb-4">
        Ensure SRMs operate within regulatory and ethical boundaries while promoting solar adoption responsibly.
        </p>
        <p class="mb-5"></p>
        <div class="row mt-5">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745868933/Group_4809764_rwbcyw.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">Solar Industry Regulations in Nigeria</h5>
                        <p class="card-text">Key regulations, policies, and frameworks governing the solar industry in Nigeria, enabling them to operate within compliance...</p>
                    </div>
                    <a href="{{route('industry_regulations')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745868930/Group_48097642_vhxyqc.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Government Incentives for Solar Solutions in Nigeria</h5>
                        <p class="card-text">Knowledge of government programs, subsidies, and incentives designed to promote solar energy adoption in Nigeria, enabling SRMs to effectively..</p>
                    </div>
                    <a href="{{route('government_incentives')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745868929/Group_48097643_wtpdk0.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Environmental Compliance and Sustainability Goals</h5>
                        <p class="card-text">Knowledge of environmental standards and sustainability goals, enabling SRMs to promote solar solutions responsibly while adhering..</p>
                    </div>
                    <a href="{{route('environmental_compliance')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>

            </div>
            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745868931/Group_48097644_hxrcps.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">Ethical Sales Practices for Solar Solutions</h5>
                        <p class="card-text">Knowledge and skills to engage with customers ethically, ensuring trust, transparency, and a positive reputation for Baltai Energy.</p>
                    </div>
                    <a href="{{route('ethical_standards')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745868932/Group_48097645_lw1u06.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Customer Data Privacy and Protection</h5>
                        <p class="card-text">Importance of safeguarding customer information and ensuring compliance with data protection laws while fostering trust in Baltai ...</p>
                    </div>
                    <a href="{{route('customer_data_privacy')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745868941/Group_48097646_d0a1y8.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Documentation and Contract Management</h5>
                        <p class="card-text">Knowledge and skills required to effectively manage customer documentation, contracts, and records while ensuring accuracy.</p>
                    </div>
                    <a href="{{route('documentation')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

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
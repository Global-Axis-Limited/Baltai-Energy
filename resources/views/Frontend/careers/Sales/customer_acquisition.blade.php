@extends('Layouts.connection')
@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrumm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <p>
                        <a href="{{route('index')}}">Home</a> >> <a href="{{route('baltai')}}">Baltai Learning</a> >> Sales Techniques and Customer Acquisition
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<section class="insights-section">
    <div class="container">
        <h2 class="text-left mb-3">Sales Techniques and Customer Acquisition</h2>
        <p class="mb-4">
            Equip SRMs with effective strategies to identify, target, and acquire customers for solar solutions.
        </p>
        <p class="mb-5"></p>
        <div class="row mt-5">
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745686510/Group_48097641_nmekdk.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Navigating the Solar Landscape: Insights into the Nigerian Market</h5>
                        <p class="card-text">Understanding of the solar energy market in Nigeria, including its challenges, opportunities, and potential for growth.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745686510/Group_48097642_mm4sq7.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Targeting Success: Identifying Solar Customers for Maximum Impact</h5>
                        <p class="card-text">The skills to identify and segment potential customers effectively, enabling SRMs to target efforts on...</p>
                    </div>
                    <a href="{{route('target_audiences')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745686510/Group_48097643_fbqpuz.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">Turning Prospects into Opportunities: Effective Lead Generation for Solar Solutions</h5>
                        <p class="card-text">Actionable strategies to identify, attract, and engage potential customers, ensuring a consistent...</p>
                    </div>
                    <a href="{{route('lead_generation')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745686510/Group_48097644_qgojvk.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Understanding Needs, Delivering Solutions: Conducting Solar Consultations</h5>
                        <p class="card-text">How to conduct effective solar consultations and needs assessments, ensuring SRMs.</p>

                    </div>
                    <a href="{{route('consultations')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745686511/Group_480976485_mjue2v.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Closing the Deal: Effective Presentation of Pricing Models and Financial Packages</h5>
                        <p class="card-text">Skills and knowledge to present Baltai Energy’s pricing models and financing options in a clear.</p>
                    </div>
                    <a href="{{route('pricing_models')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745686511/Group_48097646_ypiwoq.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Turning “No” into “Yes”: Confidently Handling Customer Concerns</h5>
                        <p class="card-text">How to identify, address, and overcome common customer objections effectively, ensuring trust.</p>
                    </div>
                    <a href="{{route('overcoming_objections')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>

            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745686511/Group_48097647_vikrne.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">Mastering the Art of Persuasion: Crafting and Presenting Sales Pitches That Convert</h5>
                        <p class="card-text">Craft and deliver compelling, customer-focused sales pitches that effectively communicate the value...</p>
                    </div>
                    <a href="{{route('developing_sales_pitches')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745686512/Group_48097648_gi8i6a.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Measure to Improve: Effective Sales Performance Tracking and Analysis</h5>
                        <p class="card-text">Skills to track and analyze their sales performance, identify areas for improvement, and implement...</p>
                    </div>
                    <a href="{{route('tracking_sales_performance')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
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
@extends('Layouts.connection')
<!-- Beadcrum -->
<section class="Beadcrumm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <p>
                   <a href="{{route('index')}}">Home</a> >> <a href="{{route('baltai')}}">Baltai Learning</a> >> Customer Relationship Management                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<section class="insights-section">
    <div class="container">
        <h2 class="text-left mb-3">Customer Relationship Management</h2>
        <p class="mb-4">
        Train SRMs to build and maintain strong relationships with customers, ensuring satisfaction and retention.
        </p>
        <p class="mb-5"></p>
        <div class="row mt-5">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745688016/Group_48097641_aw8mj9.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">Best Practices for Initial Customer Engagement</h5>
                        <p class="card-text">Effective strategies to establish positive first impressions and build trust with potential and new...</p>
                    </div>
                    <a href="{{route('customer_engagement')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745688016/Group_48097642_tegg3z.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Providing Post-Installation Support</h5>
                        <p class="card-text">Knowledge and skills required to provide excellent post-installation support, ensuring customer satisfaction, fostering loyalty, and...</p>
                    </div>
                    <a href="{{route('customer_feedback')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745688017/Group_48097643_d2xekd.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Collecting and Analyzing Customer Feedback</h5>
                        <p class="card-text">Enable SRMs to systematically gather, analyze, and utilize customer feedback to improve services, enhance customer satisfaction, and...</p>
                    </div>
                    <a href="{{route('continued_satisfaction')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745688017/Group_48097644_c1iwhu.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-bodyy">
                        <h5 class="card-title">Retention Strategies to Ensure Continued Satisfaction</h5>
                        <p class="card-text">Strategies to foster customer loyalty, reduce churn, and ensure long-term satisfaction by delivering exceptional service and value.</p>
                    </div>
                    <a href="{{route('continued_satisfaction')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745688017/Group_48097645_hmeph0.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-bodyy">
                        <h5 class="card-title">Managing Referral Programs to Maximize New Leads</h5>
                        <p class="card-text">Enable SRMs to effectively implement and manage referral programs, leveraging existing customer networks to generate new...</p>
                    </div>
                    <a href="{{route('new_leads')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745688017/Group_48097646_qhx0zg.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Handling Inquiries and Resolving Complaints</h5>
                        <p class="card-text">Skills to effectively address customer inquiries, resolve complaints, and maintain customer satisfaction and loyalty.</p>
                    </div>
                    <a href="{{route('resolving_complaints')}}">
                        <button class="btn btn-primary enroll-btn">View courses</button>
                    </a>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/diqa0sakr/image/upload/v1745688018/Group_48097647_egw9an.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-bodyy">
                        <h5 class="card-title">Building Long-Term Customer Loyalty</h5>
                        <p class="card-text">Strategies to foster long-term customer loyalty, turning satisfied clients into advocates for Baltai Energy’s Solar Solutions Network.</p>
                    </div>
                    <a href="{{route('customer_loyalty')}}">
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
@extends('Layouts.connection')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737877658/Energy/Group_48097580_pohesc.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <h4>Baltai_Learning</h4>
                    <h1>
                        Baltai Learning
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
</section>
<!-- Map -->
<section class="insights-section">
    <div class="container">
        <h2 class="text-left mb-3">Kickstart your journey with Baltai Energy</h2>
        <p class="mb-4">
            Complete each learning module and get equipped with the knowledge required to be effective as a <strong>‘Sales Relationship Manager (SRM)’</strong> .
        </p>
        <p class="mb-5">
            The Sales Relationship Manager Training Program is a comprehensive learning platform designed to equip you with the knowledge and skills to thrive in your role. From understanding solar technology to mastering customer acquisition strategies, this portal is your one-stop resource for success at Baltai Energy.
        </p>
        <p class="mb-5"></p>
        <div class="row mt-5">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738224622/Group_48097648_b7ceus.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-body">
                        <h5 class="card-title">Onboarding and Solar Basics</h5>
                        <p class="card-text">Provide new SRMs with foundational knowledge about Baltai Energy, the SSN campaign, and the basics of solar technology.</p>
                    </div>
                    <a href="{{route('solar_basics')}}">
                        <button class="btn btn-primary enroll-btn">View modules</button>
                    </a>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738224622/Group_48097649_khorlw.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-body">
                        <h5 class="card-title">Sales Techniques and Customer Acquisition</h5>
                        <p class="card-text">Equip SRMs with effective strategies to identify, target, and acquire customers for solar solutions.</p>

                    </div>
                    <a href="{{route('customer_acquisition')}}">
                        <button class="btn btn-primary enroll-btn">View modules</button>
                    </a>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738224622/Group_48097650_rwrvw5.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-body">
                        <h5 class="card-title">Solar Products and Financing Options</h5>
                        <p class="card-text">Deepen SRMs’ understanding of Baltai Energy’s product line and financing solutions to better cater to customer needs.</p>
                    </div>
                    <a href="{{route('financing_options')}}">
                        <button class="btn btn-primary enroll-btn">View modules</button>
                    </a>
                </div>

            </div>
            <!-- Card 4 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738225265/Group_48097651_u10rmb.png" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-body">
                        <h5 class="card-title">Customer Relationship Management</h5>
                        <p class="card-text">Train SRMs to build and maintain strong relationships with customers, ensuring satisfaction and retention.</p>
                    </div>
                    <a href="{{route('relationship_management')}}">
                        <button class="btn btn-primary enroll-btn">View modules</button>
                    </a>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738224623/Group_48097652_edsrr8.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-body">
                        <h5 class="card-title">Technical Knowledge for SRMs</h5>
                        <p class="card-text">Provide technical knowledge necessary to explain solar system operations and address basic customer concerns.</p>

                    </div>
                    <a href="{{route('technical_knowledge')}}">
                        <button class="btn btn-primary enroll-btn">View modules</button>
                    </a>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738224623/Group_48097653_szo5iu.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-body">
                        <h5 class="card-title">Compliance and Ethical Standards</h5>
                        <p class="card-text">Ensure SRMs operate within regulatory and ethical boundaries while promoting solar adoption responsibly.</p>
                    </div>
                    <a href="{{route('courses')}}">
                        <button class="btn btn-primary enroll-btn">View modules</button>
                    </a>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738224633/Group_48097654_iuycxd.png" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-body">
                        <h5 class="card-title">Digital Tools and Technology</h5>
                        <p class="card-text">Teach SRMs to leverage digital tools for efficient sales management and customer engagement.</p>

                    </div>
                    <a href="{{route('courses')}}">
                        <button class="btn btn-primary enroll-btn">View modules</button>
                    </a>
                </div>
            </div>
            <!-- Card 8 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738224652/Group_48097655_rrp3bv.png" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-body">
                        <h5 class="card-title">Soft Skills and Personal Development</h5>
                        <p class="card-text">Develop interpersonal and professional skills that enhance SRMs’ effectiveness and resilience in the field.</p>
                    </div>
                    <a href="{{route('courses')}}">
                        <button class="btn btn-primary enroll-btn">View modules</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Mapl Us Ends -->

<script>
    // Add click event listener for interactivity
    document.querySelectorAll('.card').forEach(card => {
        card.addEventListener('click', function () {
            let btn = this.querySelector('.enroll-btn');
            btn.style.opacity = '1';
            btn.style.transform = 'translateX(-50%) translateY(-10px)';
        });
    });
</script>

@section('page-content')

@endsection
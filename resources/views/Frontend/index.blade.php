@extends('Layouts.connection')

@section('page-content')
<!-- Welcome Screen -->
<section class="welcome-screen">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active banner-one">
                <div class="banner-note">
                    <h1>Powering Nigeria's Future with <span>Reliable Solar</span> Solutions</h1>
                    <p>Join 500,000 households transitioning to clean, reliable energy. Embrace solar power for uninterrupted energy, lower bills, and a greener planet!</p>
                    <div class="btn-div">
                        <a class='btn-read' href="{{route('energy_calculator')}}">Get Your Free Assessment</a>
                        <a class='btn-contact' href="{{route('our_ssn')}}">Learn More About Solar</a>
                    </div>
                </div>
                <!-- Scroll Indicators -->
                <div class="icon-group">
                    <span class="active" data-bs-slide-to="0">⚡</span>
                    <span class="inactive" data-bs-slide-to="1">⚡</span>
                    <span class="inactive" data-bs-slide-to="2">⚡</span>
                    <span class="inactive" data-bs-slide-to="3">⚡</span>
                    <span class="inactive" data-bs-slide-to="4">⚡</span>
                </div>
            </div>
            <div class="carousel-item banner-two">
                <div class="banner-note">
                    <h1>Uninterrupted Power for <span>Homes</span>, <span>Businesses</span>, and <span>Communities</span></h1>
                    <p>Achieve energy independence with Baltai Energy's accessible solar solutions tailored to your needs.</p>
                    <div class="btn-div">
                        <a class='btn-read' href="{{route('energy_calculator')}}">Get Your Free Assessment</a>
                        <a class='btn-contact' href="{{route('our_ssn')}}">Learn More About Solar</a>
                    </div>
                </div>
                <div class="icon-group">
                    <span class="inactive" data-bs-slide-to="0">⚡</span>
                    <span class="active" data-bs-slide-to="1">⚡</span>
                    <span class="inactive" data-bs-slide-to="2">⚡</span>
                    <span class="inactive" data-bs-slide-to="3">⚡</span>
                    <span class="inactive" data-bs-slide-to="4">⚡</span>
                </div>
            </div>
            <div class="carousel-item banner-three">
                <div class="banner-note">
                    <h1><span>Powering</span> Your World with Reliable, Affordable, and <span>Clean Energy</span>.</h1>
                    <p>Experience 24/7 energy independence, save on costs, and contribute to a sustainable future with Baltai Energy's innovative solar solutions.</p>
                    <div class="btn-div">
                        <a class='btn-read' href="{{route('energy_calculator')}}">Get Your Free Assessment</a>
                        <a class='btn-contact' href="{{route('our_ssn')}}">Learn More About Solar</a>
                    </div>
                </div>
                <div class="icon-group">
                    <span class="inactive" data-bs-slide-to="0">⚡</span>
                    <span class="inactive" data-bs-slide-to="1">⚡</span>
                    <span class="active" data-bs-slide-to="2">⚡</span>
                    <span class="inactive" data-bs-slide-to="3">⚡</span>
                    <span class="inactive" data-bs-slide-to="4">⚡</span>
                </div>
            </div>
            <div class="carousel-item banner-four">
                <div class="banner-note">
                    <h1>Your Path to <span>Sustainable Energy </span> Starts Here.</h1>
                    <p>From lowering your bills to lighting your future, Baltai Energy makes going solar easy and impactful.</p>
                    <div class="btn-div">
                        <a class='btn-read' href="{{route('about')}}">Get Your Free Assessment</a>
                        <a class='btn-contact' href="{{route('our_ssn')}}">Learn More About Solar</a>
                    </div>
                </div>
                <div class="icon-group">
                    <span class="inactive" data-bs-slide-to="0">⚡</span>
                    <span class="inactive" data-bs-slide-to="1">⚡</span>
                    <span class="inactive" data-bs-slide-to="2">⚡</span>
                    <span class="active" data-bs-slide-to="3">⚡</span>
                    <span class="inactive" data-bs-slide-to="4">⚡</span>
                </div>
            </div>
            <div class="carousel-item banner-five">
                <div class="banner-note">
                    <h1>Energy You Can <span>Trust</span>. Savings You Can See.</h1>
                    <p>Experience 24/7 energy independence, save on costs, and contribute to a sustainable future with Baltai Energy's innovative solar solutions.</p>
                    <div class="btn-div">
                        <a class='btn-read' href="{{route('energy_calculator')}}">Get Your Free Assessment</a>
                        <a class='btn-contact' href="{{route('our_ssn')}}">Learn More About Solar</a>
                    </div>
                </div>
                <div class="icon-group">
                    <span class="inactive" data-bs-slide-to="0">⚡</span>
                    <span class="inactive" data-bs-slide-to="1">⚡</span>
                    <span class="inactive" data-bs-slide-to="2">⚡</span>
                    <span class="inactive" data-bs-slide-to="3">⚡</span>
                    <span class="active" data-bs-slide-to="4">⚡</span>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</section>
<!-- Welcome Screen Ends -->

<!-- Benefit -->
<section class="Benefit">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="Txt">
                    <div class="highlight mb-3">Key Benefits of Going Solar:</div>
                    <h5 class="Just fw-bold mt-2 text-anime-wave">The Bright Advantage with <br>Baltai Energy</h5>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7 mb-4">
                <p class="E">
                    Experience the power of sustainable living with Baltai Energy. Our cutting-edge solar solutions deliver reliable, cost-effective, and eco-friendly energy tailored to your needs. Make the switch today and illuminate your world!
                </p>
                <div class="my-4">
                    <a href="{{route('business')}}"><button class="btn text-white px-4 py-2">Explore Our Solution</button></a>
                </div>
            </div>
            <div class="row g-2 mt-5">
                <!-- Card 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="">
                            <div class="icon">
                                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736921408/Energy/Frame_438_fqtouq.png" alt="Reliability Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Reliability</h5>
                            <ul>
                                <li>24/7 Uninterrupted Power Supply</li>
                                <li>Never worry about blackouts again</li>
                            </ul>
                        </div>
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736924150/Energy/w_ntn3ms.png" draggable="false" alt="Reliability Image">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="">
                            <div class="icon">
                                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736921408/Energy/Frame_448_lijcit.png" alt="Cost Savings Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Cost Savings</h5>
                            <ul>
                                <li>Reduce Your Energy Bills</li>
                                <li>Long-term savings with predictable costs</li>
                            </ul>
                        </div>
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736924150/Energy/q_q8gdb7.png" draggable="false" alt="Cost Savings Image">
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="">
                            <div class="icon">
                                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736921408/Energy/Frame_4138_mkquu6.png" alt="Sustainability Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Sustainability</h5>
                            <ul>
                                <li>Clean Energy for a Better Future</li>
                                <li>Reduce your carbon footprint</li>
                            </ul>
                        </div>
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736924150/Energy/i_gyhzqy.png" draggable="false" alt="Sustainability Image">
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="">
                            <div class="icon">
                                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736921408/Energy/Frame_4338_qq3uai.png" alt="Easy Process Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Easy Process</h5>
                            <ul>
                                <li>Hassle-free Installation and set-up process</li>
                                <li>Quick and easy to use and maintain</li>
                            </ul>
                        </div>
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736924149/Energy/e_rmxhbh.png" draggable="false" alt="Easy Process Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Benefit Ends -->

<!-- FAQs -->
<main class="faqPage" id="FAQs">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">

                <h1>Why Choose Baltai Energy?</h1>
                <p class=" wow animate__fadeInUp animate__animated"
                    data-wow-duration="1s" data-wow-delay="0s">
                    Experience the power of sustainable living with Baltai Energy. Our cutting-edge solar solutions deliver reliable, cost-effective, and eco-friendly energy
                </p>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-6">
                <div class="faq-box">
                    <details data-aos="fade-up"
                        data-aos-duration="1000">
                        <summary>Best Quality Equipment</summary>
                        <div class="faq-content">
                            <p>We deploy only best-in-class products with EU standards of compliance, and our solutions are tailored to adequately meet your commercial and domestic capacity needs hassle-free. You’ll find that our installation set-ups with specified panel-inverter-Battery combinations are unique, easy to install, and come with an aesthetically pleasing industrial finish.</p>
                        </div>
                    </details>
                    <details data-aos="fade-up"
                        data-aos-duration="2000">
                        <summary>Professional Expertise</summary>
                        <div class="faq-content">
                            <p> From consultation down to final installation, our team of knowledgeable, well-trained expert solar technicians are able to execute your power solution to deliver optimal energy production so you can enjoy an atmosphere of productivity and safety. Our technicians are a cohort of certified professionals with great work ethic, and take pride in delivering the neatest and most efficient installations with minimal peripherals.</p>
                        </div>
                    </details>
                    <details data-aos="fade-up"
                        data-aos-duration="3000">
                        <summary> Tailor-Made Solutions </summary>
                        <div class="faq-content">
                            <p>Our services are solutions oriented, as our aim is to provide complete solar power systems that sustainably caters to the specific needs of our esteemed customers. This minimizes or completely eliminates potentially costly incidents of capacity overload, or under power where a higher expenditure has been incurred than necessary.</p>
                        </div>
                    </details>
                    <details data-aos="fade-up"
                        data-aos-duration="3000">
                        <summary> Excellent Customer / After Sales Service</summary>
                        <div class="faq-content">
                            <p> You as the customer are our most important asset. To this effect we offer great online and offline After Sales & Customer Support. In the event of the unexpected, if at all, we make our qualified technicians available to you on-site and on time when required. </p>
                        </div>
                    </details>
                    <details data-aos="fade-up"
                        data-aos-duration="1000">
                        <summary> Unmatched Warranties </summary>
                        <div class="faq-content">
                            <p> We offer the best warranties in the business for our Panels, Batteries and Inverters which are unmatched by other operators. You can be rest assured that handing the powering of your precious homes and burgeoning businesses to Baltai Energy is the safest best.
                            </p>
                        </div>
                    </details>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736926675/Energy/11-06010c40-unscreen-ezgif.com-optimize_ryupcx.gif" draggable="false" alt="">
            </div>
        </div>
    </div>
</main>
<!-- FAQs  Ends-->


<!-- Providing -->
<section class="custom-section">
    <div class="">
        <div class="row align-items-center">
            <div class="col-lg-1"></div>
            <!-- Left Content -->
            <div class="col-lg-5 Justt ">
                <p class="quote-text" data-aos="fade-right"
                    data-aos-duration="1000">“Leading Sustainable Energy Provider”</p>
                <h1 class="main-heading" data-aos="fade-up"
                    data-aos-duration="2000">Providing Innovative and Sustainable Solutions</h1>
                <p class="" data-aos="fade-down"
                    data-aos-duration="3000">
                    We are a Solar Systems Solutions Provider based in Lagos, Nigeria; with an international team
                    and exclusive partnerships with top European and Asian Engineering OEMs. We provide Off-grid and
                    On-grid solutions that cover every capacity or scale: from residential, to commercial, to
                    industrial applications.
                </p>
                <div class="row mt-4">
                    <div class="col-md-4 icon-text">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736931550/Energy/Rectangle_18_psqrxy.png" class="effec-icon" alt="Sustainability Icon">
                        <p class="mt-2">Environmental <br> Sustainability</p>
                    </div>
                    <div class="col-md-4 icon-text">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736931550/Energy/Rectangle_32_fae3my.png" alt="Personalized Solutions Icon">
                        <p class="mt-2">Personalized <br> Solutions</p>
                    </div>
                    <div class="col-md-4 icon-text">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736931550/Energy/Rectangle_33_atqnrr.png" alt="High Performance Icon">
                        <p class="mt-2">High <br> Performance</p>
                    </div>
                </div>
            </div>

            <!-- Right Image -->
            <div class="col-lg-6">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736927654/Energy/image_uhpdzw.jpg" class="right-image">
                <div class="text-white King">
                    <h1>500,000</h1>
                    <p>Homes and Businesses <br> to be powered by solar.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="solutions-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="solutions-title">Our Solutions</h2>
                <div class="Line"></div>
            </div>
        </div>
        <div class="accordion-container mt-5">
            <!-- Residential Solutions -->
            <div class="accordion-item me-2">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737278964/Energy/image_1_sg2knb.jpg" alt="Residential Solutions">
                <div class="accordion-content">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737279428/Energy/3d-house_1_jdx07h.png" draggable="false" alt="">
                    <h5>Residential Solutions</h5>
                    <p>Reinvent your home with clean, reliable solar energy solutions, tailored, and carefully thought out to help uplift your living spaces while improving daily life. Enjoy uninterrupted power, lower utility bills, and a greener lifestyle for your family and the environment</p>
                    <a href="{{route('residential')}}">Discover more</a>
                </div>
            </div>
            <!-- Business Solutions -->
            <div class="accordion-item  me-2">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737280221/Energy/pexels-house_landscape_with_panels_o_roof_hc0eur.jpg" alt="Business Solutions">
                <div class="accordion-content">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737279428/Energy/3d-house_1_1_bxjurr.png" draggable="false" alt="">
                    <h5>Business Solutions</h5>
                    <p>Empower your business with sustainable energy solutions designed to optimize operations and cut costs. Our innovative solar systems provide reliable power designed to effectively meet your commercial needs.</p>
                    <a href="{{route('business')}}">Discover more</a>
                </div>
            </div>
            <!-- Industrial Solutions -->
            <div class="accordion-item  me-2">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737280244/Energy/pexels-pixabay-433308_1_taa10h.jpg" alt="Industrial Solutions">
                <div class="accordion-content">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737279427/Energy/3d-building_1_fiflbi.png" draggable="false" alt="">
                    <h5>Industrial Solutions</h5>
                    <p>Scale your operations sustainably with our high-capacity solar energy solutions... From powering industrial facilities to large-scale enterprises, our systems will help you achieve operational efficiency and long-term savings with significant years of peak utility for every use case.</p>
                    <a href="{{route('industrial')}}">Discover more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trusted Partners Section -->
<section class="trusted-partners">
    <div class="container">
        <div class="row">
            <h2 class="text-left wow animate__fadeInUp animate__animated" data-wow-duration="1.5s" data-wow-delay="0s">Our Trusted Partners</h2>
            <div class="logo-slider">
                <div class="logo-set">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873120_awpr8o.png" class="d-block" alt="Partner 1">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873121_kin44y.png" class="d-block" alt="Partner 2">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873122_qdx9ld.png" class="d-block" alt="Partner 3">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873124_cspjhz.png" class="d-block" alt="Partner 4">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243714/Frame_1618873123_1_pyntle.png" class="d-block" alt="Partner 4">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243191/Frame_1618873127_zpyf3i.png" class="d-block" alt="Partner 4">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873121_kin44y.png" class="d-block" alt="Partner 2">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873122_qdx9ld.png" class="d-block" alt="Partner 3">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873124_cspjhz.png" class="d-block" alt="Partner 4">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243714/Frame_1618873123_1_pyntle.png" class="d-block" alt="Partner 4">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243191/Frame_1618873127_zpyf3i.png" class="d-block" alt="Partner 4">
                </div>
                <!-- Duplicate for seamless looping -->
            </div>
        </div>
    </div>
</section>

<!-- Spotlight Section -->
<section class="spotlight-section">
    <div class="container">
        <div class="bannerr position-relative">
            <span class="join-btn">JOIN US</span>
            <h1>SOLAR SOLUTIONS NETWORK (SSN)</h1>
        </div>
        <div class="spotlight-bg position-relative rounded">

            <!-- Background Image -->
            <div class="spotlight-background rounded"></div>

            <!-- Overlay Content -->
            <div class="row g-4 align-items-center position-relative z-2 p-4">
                <!-- Left Spotlight Card -->
                <div class="col-lg-6 col-md-12">
                    <div class="text-white">
                        <h2 class="fw-bold Joiil">Spotlight on <strong>SSN</strong></h2>
                        <p class="mt-3">
                            Say goodbye to power outages and high bills. With Baltai Energy’s Solar Solutions Network (SSN), you can now enjoy uninterrupted electricity powered by the sun.
                        </p>
                        <a href="{{route('our_ssn')}}" class="btn btn-warning text-white mt-3 px-4 py-2 text-capitalize">Discover more</a>
                    </div>
                </div>
                <div class="col-md-6"></div>
                <!-- Right Cards -->
                <div class="col-lg-12 mt-5">
                    <div class="row g-3">
                        <!-- Card 1 -->
                        <div class="col-lg-4 col-md-12">
                            <div class="AbiNah p-4 rounded" data-aos="fade-down-right">
                                <h4 class="fw-bold">24/7 Reliable Power Starts Here!</h4>
                                <p class="mt-2">
                                    Say goodbye to power outages and high bills. Enjoy uninterrupted electricity powered by the sun.
                                </p>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-lg-4 col-md-12">
                            <div class="AbiNah p-4 rounded" data-aos="fade-up-left">
                                <h4 class="fw-bold">Switch to Solar and Save Big!</h4>
                                <p class="mt-2">
                                    Discover how much you could save by switching to solar energy. It’s time to power your home.
                                </p>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-lg-4 col-md-12">
                            <div class="AbiNah p-4 rounded" data-aos="fade-down-left">
                                <h4 class="fw-bold">Solar for Every Budget!</h4>
                                <p class="mt-2">
                                    With flexible financing plans, owning a Solar Solution has never been easier. Start today with no upfront cost.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="energy-calculator-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left: Form Section -->
            <div class="col-lg-6 col-md-12">
                <div class="calculator-form p-4 rounded" data-aos="zoom-out-right">
                    <h3 class="fw-bold text-white text-anime-wave">Quick Energy Calculator</h3>
                    <p class="text-white">Estimate Your Solar Savings</p>
                    <form id="savings-form">
                        <!-- Monthly Electricity Bill -->
                        <div class="mb-4">
                            <label for="electricity-bill" class="form-label text-white">Monthly Electricity Bill</label>
                            <div class="input-group">
                                <span class="input-group-text">₦</span>
                                <input type="number" class="form-control" id="electricity-bill" value="40000" required />
                            </div>
                        </div>

                        <!-- Monthly Cost on Fuel -->
                        <div class="mb-4">
                            <label for="fuel-cost" class="form-label text-white">Monthly Cost on Fuel (Generator)</label>
                            <div class="input-group">
                                <span class="input-group-text">₦</span>
                                <input type="number" class="form-control" id="fuel-cost" value="190000" required />
                            </div>
                        </div>

                        <!-- Hours of Electricity Supply -->
                        <div class="mb-4">
                            <label for="electricity-supply" class="form-label text-white">Hours of Electricity Supply (Daily)</label>
                            <select id="electricity-supply" class="form-select" required>
                                <option selected>3-5</option>
                                <option>6-8</option>
                                <option>9-12</option>
                                <option>13-15</option>
                                <option>16-18</option>
                                <option>19-24</option>
                            </select>
                        </div>

                        <!-- Type of Apartment -->
                        <div class="mb-4">
                            <label for="apartment-type" class="form-label text-white">Type of Apartment</label>
                            <select id="apartment-type" class="form-select" required>
                                <option selected>Duplex</option>
                                <option>Flat</option>
                                <option>Bungalow</option>
                                <option>Self-contained</option>
                                <option>Mini-flat</option>
                                <option>Terraced House</option>
                                <option>Penthouse</option>
                            </select>
                        </div>

                        <!-- Electricity Band -->
                        <div class="mb-4">
                            <label for="electricity-band" class="form-label text-white">Electricity Band</label>
                            <select id="electricity-band" class="form-select" required>
                                <option selected value="1.2">Band A</option>
                                <option value="1.1">Band B</option>
                                <option value="1.0">Band C</option>
                                <option value="0.9">Band D</option>
                                <option value="0.8">Band E</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="button" class="btn btn-primary fw-bold" onclick="calculateSavings()">
                                Calculate Savings Cost
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Right: Images -->
            <div class="col-lg-6 col-md-12">
                <div class="d-flex flex-column gap-3" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737284084/Energy/Group_48097585_ve6ahj.jpg" draggable="false" alt="Solar Engineer" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section id="latest-blogs" class="container my-5">
  <h2 class="text-center mb-4">Latest From Our Blog</h2>
  <div id="blog-posts" class="row"></div>
</section> -->

<section class="insights-section">
    <div class="container">
        <h2 class="text-center mb-5">Insights</h2>
        <div class="row mt-5">

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://blog.baltaienergy.com/wp-content/uploads/2025/04/ricardo-gomez-angel-MagdWoazARo-unsplash-scaled.jpg" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-body">
                        <h5 class="card-title">Understanding the Components of a Solar Power System: Inverters, Panels, and Beyond</h5>
                        <p class="card-text">Solar power systems are becoming a popular solution for homes and businesses in Nigeria, but many people are unsure of how the technology works. Understanding the key components of a solar power system can help you make informed decisions about adopting this clean energy solution.</p>
                        <a
                            href="https://blog.baltaienergy.com/understanding-the-components-of-a-solar-power-system-inverters-panels-and-beyond-2/"
                            class="btn"
                            target="_blank"
                            rel="noopener noreferrer">
                            Read More →
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card" data-aos="fade-up"
                    data-aos-duration="3000">
                    <img src="https://blog.baltaienergy.com/wp-content/uploads/2025/04/AD_4nXfSFjPyqFa9N4Gfu_BFUmgrpxHlnxOqMIWzXkchz5qsdgObvXuChAgOENwzHZ-5CSD1Clf32zAxsD-2ZV__tN6lXOZKYgbTb50sNRnMP0uFsOp_CRiZ41UnXrUgoqza_Jma51aO5g.jpg" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-body">
                        <h5 class="card-title">Grid Independence: Why Solar Power Is the Key to Energy Security in Nigeria</h5>
                        <p class="card-text">Nigeria has long struggled with an unreliable power grid, leading to frequent blackouts and energy insecurity. This instability forces many homes and businesses to rely on expensive generators or face long periods without electricity. Solar power offers a solution, providing grid independence and a stable, reliable energy source for millions of Nigerians.</p>

                        <a
                            href="https://blog.baltaienergy.com/grid-independence-why-solar-power-is-the-key-to-energy-security-in-nigeria/"
                            class="btn"
                            target="_blank"
                            rel="noopener noreferrer">
                            Read More →
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 mb-4">
                <div class="card" data-aos="fade-left"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <img src="https://blog.baltaienergy.com/wp-content/uploads/2025/04/AD_4nXcZVUQODjqc_uaTsXpG7_k-nedwmrBx4Wn34f1vZ0KufX0jFEj-pt3nKQhMCOlUjnpxr-pAv4xOMPJdBOVcoA5P-FPrvZgjQA5I7545IPOtwCBK-5YtU0EqT_xhpX6veTEgCHN66w.jpg" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-body">
                        <h5 class="card-title">Powering the Future: How Solar Energy Is Changing Lives in Nigeria</h5>
                        <p class="card-text">As Nigeria grapples with frequent power outages and rising energy costs, solar energy is providing a solution that is transforming lives across the country. Whether in urban areas or rural communities, solar energy is proving to be more than just an alternative—it’s a powerful force for change.</p>
                        <a
                            href="https://blog.baltaienergy.com/wp-content/uploads/2025/04/AD_4nXcZVUQODjqc_uaTsXpG7_k-nedwmrBx4Wn34f1vZ0KufX0jFEj-pt3nKQhMCOlUjnpxr-pAv4xOMPJdBOVcoA5P-FPrvZgjQA5I7545IPOtwCBK-5YtU0EqT_xhpX6veTEgCHN66w.jpg"
                            class="btn"
                            target="_blank"
                            rel="noopener noreferrer">
                            Read More →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="New">
</div>


@endsection
<!-- Modal -->
<div class="modal fade" id="savingsModal" tabindex="-1" aria-labelledby="savingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="savingsModalLabel">Estimated Solar Savings</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="savingsResult">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    const indicators = document.querySelectorAll('.icon-group span');
    const carousel = document.querySelector('#carouselExampleIndicators');

    // Update indicators on carousel slide event
    carousel.addEventListener('slid.bs.carousel', (event) => {
        indicators.forEach((indicator, index) => {
            if (index === event.to) {
                indicator.classList.add('active');
                indicator.classList.remove('inactive');
            } else {
                indicator.classList.remove('active');
                indicator.classList.add('inactive');
            }
        });
    });

    // Click event for indicators to slide
    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            const carouselInstance = bootstrap.Carousel.getInstance(carousel);
            carouselInstance.to(index);
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var carousel = document.getElementById('imageCarousel');
        var carouselInstance = new bootstrap.Carousel(carousel, {
            pause: false // Disables pause on hover
        });
    });
</script>
<script>
    function calculateSavings() {
        let electricityBill = parseFloat(document.getElementById("electricity-bill").value);
        let fuelCost = parseFloat(document.getElementById("fuel-cost").value);
        let electricityBand = parseFloat(document.getElementById("electricity-band").value);
        let electricitySupply = document.getElementById("electricity-supply").value;
        let apartmentType = document.getElementById("apartment-type").value;

        if (isNaN(electricityBill) || isNaN(fuelCost) || isNaN(electricityBand)) {
            alert("Please enter valid numbers for electricity bill and fuel cost.");
            return;
        }

        let supplyFactor = {
            "3-5": 0.7,
            "6-8": 0.8,
            "9-12": 0.9,
            "13-15": 1.0,
            "16-18": 1.1,
            "19-24": 1.2
        } [electricitySupply];

        let apartmentFactor = {
            "Duplex": 1.3,
            "Flat": 1.2,
            "Bungalow": 1.1,
            "Self-contained": 1.0,
            "Mini-flat": 0.9,
            "Terraced House": 1.15,
            "Penthouse": 1.25
        } [apartmentType];

        let estimatedSavings = (electricityBill + fuelCost) * electricityBand * supplyFactor * apartmentFactor;
        document.getElementById("savingsResult").innerHTML = "<p>By switching to solar, you can save a significant amount on your electricity and fuel costs every month!</p>" +
            "<p>Your estimated savings per month: <strong>₦" + estimatedSavings.toLocaleString() + "</strong></p>" +
            "<p>Investing in solar energy reduces your dependence on the grid and brings long-term financial and environmental benefits.</p>";

        var myModal = new bootstrap.Modal(document.getElementById('savingsModal'));
        myModal.show();
    }
</script>


<script>
    async function fetchLatestBlogs() {
        try {
            const response = await fetch('https://api.allorigins.win/get?url=' + encodeURIComponent('https://blog.baltaienergy.com/'));
            const data = await response.json();
            const parser = new DOMParser();
            const xml = parser.parseFromString(data.contents, "application/xml");
            const items = xml.querySelectorAll("item");
            const container = document.getElementById('blog-posts');

            for (let i = 0; i < Math.min(3, items.length); i++) {
                const item = items[i];
                const title = item.querySelector('title').textContent;
                const link = item.querySelector('link').textContent;
                const postDiv = document.createElement('div');
                postDiv.className = 'col-md-4 mb-4';
                postDiv.innerHTML = `
        <div class="card h-100 shadow-sm">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">${title}</h5>
            <a href="${link}" class="btn btn-primary mt-auto" target="_blank">Read More</a>
          </div>
        </div>
      `;
                container.appendChild(postDiv);
            }
        } catch (error) {
            console.error('Error fetching blogs:', error);
        }
    }

    fetchLatestBlogs();
</script>
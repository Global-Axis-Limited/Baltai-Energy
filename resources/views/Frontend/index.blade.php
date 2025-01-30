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
                        <a class='btn-read' href='#'>Get Your Free Assessment</a>
                        <a class='btn-contact' href='#'>Learn More About Solar</a>
                    </div>
                </div>
                <!-- Scroll Indicators -->
                <div class="icon-group">
                    <span class="active" data-bs-slide-to="0">⚡</span>
                    <span class="inactive" data-bs-slide-to="1">⚡</span>
                    <span class="inactive" data-bs-slide-to="2">⚡</span>
                </div>
            </div>
            <div class="carousel-item banner-two">
                <div class="banner-note">
                    <h1>Uninterrupted Power for <span>Homes</span>, <span>Businesses</span>, and <span>Communities</span></h1>
                    <p>Achieve energy independence with Baltai Energy's accessible solar solutions tailored to your needs.</p>
                    <div class="btn-div">
                        <a class='btn-read' href='#'>Get Your Free Assessment</a>
                        <a class='btn-contact' href='#'>Learn More About Solar</a>
                    </div>
                </div>
                <div class="icon-group">
                    <span class="inactive" data-bs-slide-to="0">⚡</span>
                    <span class="active" data-bs-slide-to="1">⚡</span>
                    <span class="inactive" data-bs-slide-to="2">⚡</span>
                </div>
            </div>
            <div class="carousel-item banner-three">
                <div class="banner-note">
                    <h1><span>Powering</span> Your World with Reliable, Affordable, and <span>Clean Energy</span>.</h1>
                    <p>Knowledge is power. Information is liberating. Education is the premise of progress, in every society, in every family. </p>
                    <div class="btn-div">
                        <a class='btn-read' href='#'>Get Your Free Assessment</a>
                        <a class='btn-contact' href='#'>Learn More About Solar</a>
                    </div>
                </div>
                <div class="icon-group">
                    <span class="inactive" data-bs-slide-to="0">⚡</span>
                    <span class="inactive" data-bs-slide-to="1">⚡</span>
                    <span class="active" data-bs-slide-to="2">⚡</span>
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
                <p class="E wow animate__fadeInUp animate__animated"
                                            data-wow-duration="1.5s" data-wow-delay="0s">
                    Experience the power of sustainable living with Baltai Energy. Our cutting-edge solar solutions deliver reliable, cost-effective, and eco-friendly energy tailored to your needs. Make the switch today and illuminate your world!
                </p>
                <div class="my-4">
                    <button class="btn text-white px-4 py-2">Request a free quote</button>
                </div>
            </div>
            <div class="row g-2 mt-5">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
                        <div class="">
                            <div class="icon">
                                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736921408/Energy/Frame_438_fqtouq.png" alt="Reliability Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Reliability</h5>
                            <ul>
                                <li >24/7 Uninterrupted Power Supply</li>
                                <li>Never worry about blackouts again</li>
                            </ul>
                        </div>
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736924150/Energy/w_ntn3ms.png" draggable="false" alt="Reliability Image">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card" data-aos="fade-up"
     data-aos-duration="3000">
                        <div class="">
                            <div class="icon">
                                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736921408/Energy/Frame_448_lijcit.png" alt="Cost Savings Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Cost Savings</h5>
                            <ul>
                                <li>Long-term savings with predictable costs</li>
                                <li>Reduces cost on your energy bills</li>
                            </ul>
                        </div>
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736924150/Energy/q_q8gdb7.png" draggable="false" alt="Cost Savings Image">
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card"  data-aos="fade-down"
                data-aos-offset="300"
     data-aos-easing="ease-in-sine">
                        <div class="">
                            <div class="icon">
                                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736921408/Energy/Frame_4138_mkquu6.png" alt="Sustainability Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Sustainability</h5>
                            <ul>
                                <li>Clean Energy for a Better Future</li>
                                <li>Reduces your carbon footprint to a cleaner environment</li>
                            </ul>
                        </div>
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736924150/Energy/i_gyhzqy.png" draggable="false" alt="Sustainability Image">
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card"  data-aos="fade-left"
                data-aos-offset="300"
     data-aos-easing="ease-in-sine">
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
                    <details>
                        <summary>Best Quality Equipment?</summary>
                        <div class="faq-content">
                            <p> We deploy only best-in-class products with EU standards of compliance, and our solutions are tailored to adequately meet your commercial and domestic capacity needs hassle-free. You’ll find that our installation set-ups with specified panel-inverter-Battery combinations are unique, easy to install, and come with an aesthetically pleasing industrial finish. </p>
                        </div>
                    </details>
                    <details>
                        <summary>Professional Expertise?</summary>
                        <div class="faq-content">
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis adipisci aliquid id atque repudiandae ullam molestias quibusdam impedit. Nemo iste repellat obcaecati iure ad nobis. Nemo cum sunt rem. Recusandae beatae autem animi tenetur, vitae harum. Consequuntur itaque quod dicta unde totam quas pariatur? Dolores, tempore. Fugit magni ex vel. </p>
                        </div>
                    </details>
                    <details>
                        <summary> Tailor-Made Solutions </summary>
                        <div class="faq-content">
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis adipisci aliquid id atque repudiandae ullam molestias quibusdam impedit. Nemo iste repellat obcaecati iure ad nobis. Nemo cum sunt rem. Recusandae beatae autem animi tenetur, vitae harum. Consequuntur itaque quod dicta unde totam quas pariatur? Dolores, tempore. Fugit magni ex vel. </p>
                        </div>
                    </details>
                    <details>
                        <summary> Why Choose Baltai Energy? </summary>
                        <div class="faq-content">
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis adipisci aliquid id atque repudiandae ullam molestias quibusdam impedit. Nemo iste repellat obcaecati iure ad nobis. Nemo cum sunt rem. Recusandae beatae autem animi tenetur, vitae harum. Consequuntur itaque quod dicta unde totam quas pariatur? Dolores, tempore. Fugit magni ex vel. </p>
                        </div>
                    </details>
                    <details>
                        <summary> Tailor-Made Solutions </summary>
                        <div class="faq-content">
                            <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis adipisci aliquid id atque repudiandae ullam molestias quibusdam impedit. Nemo iste repellat obcaecati iure ad nobis. Nemo cum sunt rem. Recusandae beatae autem animi tenetur, vitae harum. Consequuntur itaque quod dicta unde totam quas pariatur? Dolores, tempore. Fugit magni ex vel. </p>
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
                <p class="quote-text">“Leading Sustainable Energy Provider”</p>
                <h1 class="main-heading">Providing Innovative and Sustainable Solutions</h1>
                <p class="wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                            data-wow-delay="0s">
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
                    <a href="#">Discover more</a>
                </div>
            </div>
            <!-- Business Solutions -->
            <div class="accordion-item  me-2">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737280221/Energy/pexels-house_landscape_with_panels_o_roof_hc0eur.jpg" alt="Business Solutions">
                <div class="accordion-content">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737279428/Energy/3d-house_1_1_bxjurr.png" draggable="false" alt="">
                    <h5>Business Solutions</h5>
                    <p>Empower your business with sustainable energy solutions designed to optimize operations and cut costs. Our innovative solar systems provide reliable power designed to effectively meet your commercial needs.</p>
                    <a href="#">Discover more</a>
                </div>
            </div>
            <!-- Industrial Solutions -->
            <div class="accordion-item  me-2">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737280244/Energy/pexels-pixabay-433308_1_taa10h.jpg" alt="Industrial Solutions">
                <div class="accordion-content">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737279427/Energy/3d-building_1_fiflbi.png" draggable="false" alt="">
                    <h5>Industrial Solutions</h5>
                    <p>Scale your operations sustainably with our high-capacity solar energy solutions... From powering industrial facilities to large-scale enterprises, our systems will help you achieve operational efficiency and long-term savings with significant years of peak utility for every use case.</p>
                    <a href="#">Discover more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trusted Partners Section -->
<section class="trusted-partners">
    <div class="container">
        <div class="row">
            <h2 class="text-left  wow animate__fadeInUp animate__animated" data-wow-duration="1.5s"
                                    data-wow-delay="0s">Trusted Partners</h2>
            <div class="d-flex justify-content-center flex-wrap">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737281606/Energy/unnamed_4_1_zabcpg.png" draggable="false" alt="Partner 1">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737281606/Energy/unnamed_3_1_o8cuxe.png" draggable="false" alt="Partner 2">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737281607/Energy/unnamed_5_1_s6uu8m.png" draggable="false" alt="Partner 3">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737281607/Energy/unnamed_5_2_uskncw.png" draggable="false" alt="Partner 4">
            </div>
        </div>
    </div>
</section>

<!-- Spotlight Section -->
<section class="spotlight-section">
    <div class="container">
        <div class="spotlight-bg position-relative rounded">
            <!-- Background Image -->
            <div class="spotlight-background rounded"></div>

            <!-- Overlay Content -->
            <div class="row g-4 align-items-center position-relative z-2 p-4">
                <!-- Left Spotlight Card -->
                <div class="col-md-6">
                    <div class="text-white">
                        <h2 class="fw-bold">Spotlight on <strong>SSN</strong></h2>
                        <p class="mt-3">
                            Say goodbye to power outages and high bills. With Solar Solutions Network (SSN),
                            enjoy uninterrupted electricity powered by the sun.
                        </p>
                        <a href="#" class="btn btn-warning text-white mt-3 px-4 py-2 text-capitalize">Discover more</a>
                    </div>
                </div>
                <div class="col-md-6"></div>
                <!-- Right Cards -->
                <div class="col-lg-12 mt-5">
                    <div class="row g-3">
                        <!-- Card 1 -->
                        <div class="col-md-4">
                            <div class="bg-warning text-white p-4 rounded" data-aos="fade-down-right">
                                <h4 class="fw-bold">24/7 Reliable Power Starts Here!</h4>
                                <p class="mt-2">
                                    Say goodbye to power outages and high bills. Enjoy uninterrupted electricity powered by the sun.
                                </p>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-4">
                            <div class="bg-white p-4 rounded" data-aos="fade-up-left">
                                <h4 class="fw-bold">Switch to Solar and Save Big!</h4>
                                <p class="mt-2">
                                    Discover how much you could save by switching to solar energy. It’s time to power your home and wallet.
                                </p>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-4">
                            <div class="bg-white p-4 rounded" data-aos="fade-down-left">
                                <h4 class="fw-bold">Solar for Every Budget!</h4>
                                <p class="mt-2">
                                    With flexible financing plans, owning solar power has never been easier. Start today with no upfront cost.
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
            <div class="col-md-6">
                <div class="calculator-form p-4 rounded" data-aos="zoom-out-right">
                    <h3 class="fw-bold text-white text-anime-wave">Quick Energy Calculator</h3>
                    <p class="text-white">Estimate Your Solar Savings</p>
                    <form>
                        <!-- Monthly Electricity Bill -->
                        <div class="mb-4">
                            <label for="electricity-bill" class="form-label text-white">Monthly Electricity Bill</label>
                            <div class="input-group">
                                <span class="input-group-text">₦</span>
                                <input type="text" class="form-control" id="electricity-bill" value="40,000" required />
                            </div>
                        </div>

                        <!-- Monthly Cost on Fuel -->
                        <div class="mb-4">
                            <label for="fuel-cost" class="form-label text-white">Monthly Cost on Fuel (Generator)</label>
                            <div class="input-group">
                                <span class="input-group-text">₦</span>
                                <input type="text" class="form-control" id="fuel-cost" value="190,000" required />
                            </div>
                        </div>

                        <!-- Hours of Electricity Supply -->
                        <div class="mb-4">
                            <label for="electricity-supply" class="form-label text-white">Hours of Electricity Supply (Daily)</label>
                            <select id="electricity-supply" class="form-select" required>
                                <option selected>3-5</option>
                                <option>6-8</option>
                                <option>9-12</option>
                            </select>
                        </div>

                        <!-- Type of Apartment -->
                        <div class="mb-4">
                            <label for="apartment-type" class="form-label text-white">Type of Apartment</label>
                            <select id="apartment-type" class="form-select" required>
                                <option selected>Duplex</option>
                                <option>Flat</option>
                                <option>Bungalow</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-bold">
                                Calculate Savings Cost
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right: Images -->
            <div class="col-md-6">
                <div class="d-flex flex-column gap-3" data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737284084/Energy/Group_48097585_ve6ahj.jpg" draggable="false" alt="Solar Engineer" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="insights-section">
    <div class="container">
        <h2 class="text-center mb-5">Insights</h2>
        <div class="row mt-5">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285731/Energy/image_ipdrpv.jpg" draggable="false" class="card-img-top" alt="Solar Home">
                    <div class="card-body">
                        <h5 class="card-title">5 Reasons to Switch to Solar Today</h5>
                        <p class="card-text">From lower electricity bills to eco-friendliness, discover why solar power is the solution for you.</p>
                        <a href="#" class="btn">Read More →</a>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-4 mb-4">
                <div class="card"  data-aos="fade-up"
     data-aos-duration="3000">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285728/Energy/image1_uu1dwu.jpg" draggable="false" class="card-img-top" alt="Solar Panels">
                    <div class="card-body">
                        <h5 class="card-title">Sustainable Future with Solar</h5>
                        <p class="card-text">Solar technology continues to advance, offering more efficient and versatile energy solutions.</p>
                        <a href="#" class="btn">Read More →</a>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-4 mb-4">
                <div class="card" data-aos="fade-left"
                data-aos-offset="300"
     data-aos-easing="ease-in-sine">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285723/Energy/image2_hkepaj.jpg" draggable="false" class="card-img-top" alt="Harnessing the Sun">
                    <div class="card-body">
                        <h5 class="card-title">Harnessing the Sun</h5>
                        <p class="card-text">Solar energy is more than just power—it's a step towards a sustainable and reliable future.</p>
                        <a href="#" class="btn">Read More →</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection

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
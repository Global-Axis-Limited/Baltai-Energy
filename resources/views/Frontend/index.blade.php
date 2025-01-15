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
                    <h5 class="Just fw-bold mt-2">The Bright Advantage with <br>Baltai Energy</h5>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7 mb-4">
                <p class="E">
                    Experience the power of sustainable living with Baltai Energy. Our cutting-edge solar solutions deliver reliable, cost-effective, and eco-friendly energy tailored to your needs. Make the switch today and illuminate your world!
                </p>
                <div class="my-4">
                    <button class="btn text-white px-4 py-2">Request a free quote</button>
                </div>
            </div>
            <div class="row g-2 mt-5">
                <!-- Card 1 -->
                <div class="col-md-3">
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
                <div class="col-md-3">
                    <div class="card">
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
                                <li>Reduces your carbon footprint to a cleaner environment</li>
                            </ul>
                        </div>
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736924150/Energy/i_gyhzqy.png" draggable="false" alt="Sustainability Image">
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
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
                <p>
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
                <p>
                    We are a Solar Systems Solutions Provider based in Lagos, Nigeria; with an international team
                    and exclusive partnerships with top European and Asian Engineering OEMs. We provide Off-grid and
                    On-grid solutions that cover every capacity or scale: from residential, to commercial, to
                    industrial applications.
                </p>
                <div class="row mt-4">
                    <div class="col-md-4 icon-text">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1736931550/Energy/Rectangle_18_psqrxy.png" alt="Sustainability Icon">
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
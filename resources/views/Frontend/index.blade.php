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
            <div class="col-lg-7">
            <p class="E">
                Experience the power of sustainable living with Baltai Energy. Our cutting-edge solar solutions deliver reliable, cost-effective, and eco-friendly energy tailored to your needs. Make the switch today and illuminate your world!
            </p>
            <div class="my-4">
                <button class="btn text-white px-4 py-2">Request a free quote</button>
            </div>
            </div>
            <div class="row g-4 mt-5">
                <!-- Card 1 -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="p-3 text-center">
                            <div class="icon">
                                <img src="https://via.placeholder.com/40" alt="Reliability Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Reliability</h5>
                            <ul>
                                <li>24/7 Uninterrupted Power Supply</li>
                                <li>Never worry about blackouts again</li>
                            </ul>
                        </div>
                        <img src="https://via.placeholder.com/300x150" alt="Reliability Image">
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="p-3 text-center">
                            <div class="icon">
                                <img src="https://via.placeholder.com/40" alt="Cost Savings Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Cost Savings</h5>
                            <ul>
                                <li>Long-term savings with predictable costs</li>
                                <li>Reduces cost on your energy bills</li>
                            </ul>
                        </div>
                        <img src="https://via.placeholder.com/300x150" alt="Cost Savings Image">
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="p-3 text-center">
                            <div class="icon">
                                <img src="https://via.placeholder.com/40" alt="Sustainability Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Sustainability</h5>
                            <ul>
                                <li>Clean Energy for a Better Future</li>
                                <li>Reduces your carbon footprint to a cleaner environment</li>
                            </ul>
                        </div>
                        <img src="https://via.placeholder.com/300x150" alt="Sustainability Image">
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-3">
                    <div class="card">
                        <div class="p-3 text-center">
                            <div class="icon">
                                <img src="https://via.placeholder.com/40" alt="Easy Process Icon">
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="fw-bold">Easy Process</h5>
                            <ul>
                                <li>Hassle-free Installation and set-up process</li>
                                <li>Quick and easy to use and maintain</li>
                            </ul>
                        </div>
                        <img src="https://via.placeholder.com/300x150" alt="Easy Process Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Benefit Ends -->
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
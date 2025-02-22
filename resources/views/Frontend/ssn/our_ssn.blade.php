@extends('Layouts.connection')
@section('page-content')
<!-- Beadcrum -->
<section id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" style="background-image: url('https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739215035/Group_48097580_pzw4s2.png'); background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="text">
                            <h1>Enjoy Quality Time with your Family</h1>
                            <p>
                            Easily access our Solar Financing options to power all your business operations
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739215034/Group_480580_pn7hoa.png'); background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="text">
                            
                            <h1>Your Journey to reliable Power Begins Here</h1>
                            <p>
                            Easily access our Solar Financing options to power all your business operations
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739215033/Group_4580_ockves.png'); background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-10">
                        <div class="text">
                            
                            <h1>Sign Up to the SSN Programme</h1>
                            <p>
                            Easily access our Solar Financing options to power all your business operations
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" style="background-image: url('https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739215029/Group_489_kgyihl.png'); background-size: cover;
    background-position: top center;
    background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="text">
                            
                            <h1>SSN Keeps the wheels of your Business Running</h1>
                            <p>
                            Easily access our Solar Financing options to power all your business operations
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Beadcrum Ends -->
<section class="energy-calculator-section" style="background: #F8F6F5;">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left: Form Section -->
            <div class="col-md-6">
                <div class="calculator-form Justiin p-5" data-aos="zoom-out-right" style="background: #FEF9ED;">
                    <div class="step-indicator">
                        <div class="indicator active"></div>
                        <div class="indicator"></div>
                        <div class="indicator"></div>
                    </div>
                    <h3 class="fw-bold text-black text-anime-wave mb-2">Let’s Calculate Your Savings!"</h3>
                    <h5 class="text-black mb-4">Estimate Your Solar Savings</h5>
                    <form id="multiStepForm">
                        <div class="step active">
                            <!-- What Appliances are critical for you? Bill -->
                            <div class="mb-4">
                                <label for="electricity-bill" class="form-label text-black mb-4">What Appliances are critical for you?</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="refrigerator">
                                            <label class="form-check-label text-dark ms-2" for="refrigerator" required>Refrigerator</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lighting">
                                            <label class="form-check-label text-dark ms-2" for="lighting" required>Lighting</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="laptop">
                                            <label class="form-check-label text-dark ms-2" for="laptop" required>Laptop/Charging</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="fans" required>
                                            <label class="form-check-label text-dark ms-2" for="fans" required>Fans</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="water" required>
                                            <label class="form-check-label text-dark ms-2" for="water" required>Water Pump</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="others" required>
                                            <label class="form-check-label text-dark ms-2" for="others" required>Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hours of Electricity supply (Daily) -->
                            <div class="mb-4">
                                <label for="electricity-supply" class="form-label text-black mb-4">Hours of Electricity supply (Daily)</label>
                                <select id="electricity-supply" class="form-select" required>
                                    <option selected>3-5</option>
                                    <option>6-8</option>
                                    <option>9-12</option>
                                </select>
                            </div>

                            <!-- Monthly Cost on Fuel -->
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black mb-4">Monthly Electricity bill</label>
                                <div class="input-group mb-4">
                                    <span class="input-group-text">₦</span>
                                    <input type="text" class="form-control" id="fuel-cost" value="40,000" required />
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary fw-bold next-btn">
                                    Next
                                </button>
                            </div>
                        </div>

                        <!--  -->
                        <div class="step">
                            <div class="mb-4">
                                <label for="electricity-bill" class="form-label text-black mb-4">AVERAGE HOURS OF ELECTRICITY PER DAY</label>
                                <div class="mb-4">
                                    <label for="fuel-cost" class="form-label text-black mb-4">Monthly Electricity bill</label>
                                    <div class="input-group">
                                        <span class="input-group-text">₦</span>
                                        <input type="text" class="form-control" id="fuel-cost" value="40,000" required />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="electricity-bill" class="form-label text-black mb-4">Do you use any of the following?</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="refrigerator">
                                            <label class="form-check-label text-dark ms-2" for="refrigerator" required>Petrol Generator</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lighting">
                                            <label class="form-check-label text-dark ms-2" for="lighting" required>Diesel Generator</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="laptop">
                                            <label class="form-check-label text-dark ms-2" for="laptop" required>Inverter</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="laptop">
                                            <label class="form-check-label text-dark ms-2" for="laptop" required>None</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="laptop">
                                            <label class="form-check-label text-dark ms-2" for="laptop" required>None</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Type of Apartment -->
                            <div class="mb-4">
                                <label for="electricity-supply" class="form-label text-black mb-4">Type of Apartment</label>
                                <select id="electricity-supply" class="form-select" required>
                                    <option selected>Duplex</option>
                                    <option>Duplex 2</option>
                                    <option>Duplex 3</option>
                                </select>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                            <button type="button" class="btn btn-secondary back-btn mt-3">Back</button>
                            <button type="button" class="btn btn-primary next-btn mt-3">Next</button>
                            </div>
                        </div>
                        <!--  -->

                        <div class="step">
                            <!-- What Appliances are critical for you? Bill -->
                            <div class="mb-4">
                                <label for="electricity-bill" class="form-label text-black mb-4">What Appliances are critical for you?</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="refrigerator">
                                            <label class="form-check-label text-dark ms-2" for="refrigerator" required>Refrigerator</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="lighting">
                                            <label class="form-check-label text-dark ms-2" for="lighting" >Lighting</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="laptop">
                                            <label class="form-check-label text-dark ms-2" for="laptop" >Laptop/Charging</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="fans" >
                                            <label class="form-check-label text-dark ms-2" for="fans" >Fans</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="water" >
                                            <label class="form-check-label text-dark ms-2" for="water" >Water Pump</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="others" >
                                            <label class="form-check-label text-dark ms-2" for="others" >Others</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hours of Electricity supply (Daily) -->
                            <div class="mb-4">
                                <label for="electricity-supply" class="form-label text-black mb-4">Hours of Electricity supply (Daily)</label>
                                <select id="electricity-supply" class="form-select" required>
                                    <option selected>3-5</option>
                                    <option>6-8</option>
                                    <option>9-12</option>
                                </select>
                            </div>

                            <!-- Monthly Cost on Fuel -->
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black mb-4">Monthly Electricity bill</label>
                                <div class="input-group mb-4">
                                    <span class="input-group-text">₦</span>
                                    <input type="text" class="form-control" id="fuel-cost" value="40,000" required />
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid">
                            <button type="button" class="btn btn-secondary back-btn mt-3">Back</button>
                                <button type="submit" class="btn btn-primary fw-bold mt-3 next-btn">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Right: Images -->
            <div class="col-md-6">
                <div class="d-flex flex-column gap-3" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738589782/image_14_ohsawv.png" draggable="false" alt="Solar Engineer" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="benefits-section">
    <div class="container">
        <h2>Benefits of Our Solar Solution Network</h2>
        <p>Save money, limit the environmental impact, and enjoy working with SolarTech & Co.</p>
        <div class="row text-center mt-4">
            <div class="col-md-3">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_49_eeueia.png" draggable="false" alt="">
                    </div>
                    <h5>Cost Savings</h5>
                    <p>Save up to 60% on energy bills.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="benefit-item">
                    <div class="benefit-icon"><img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_46_ei6h2o.png" draggable="false" alt=""></div>
                    <h5>Easy Financing</h5>
                    <p>Flexible payment plans to fit your budget.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="benefit-item">
                    <div class="benefit-icon"><img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_47_wh5pez.png" draggable="false" alt=""></div>
                    <h5>Reliable Energy</h5>
                    <p>24/7 uninterrupted power supply.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="benefit-item">
                    <div class="benefit-icon"><img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738666445/Group_487_doatlr.png" draggable="false" alt=""></div>
                    <h5>Eco-Friendly</h5>
                    <p>Reduce carbon emissions for a sustainable future.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map -->

<!-- Mapl Us Ends -->
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentStep = 0;
        const steps = document.querySelectorAll(".step");
        const indicators = document.querySelectorAll(".indicator");
        
        function updateStep(newStep) {
            steps[currentStep].classList.remove("active");
            indicators[currentStep].classList.remove("active");
            currentStep = newStep;
            steps[currentStep].classList.add("active");
            indicators[currentStep].classList.add("active");
        }

        document.querySelectorAll(".next-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                if (currentStep < steps.length - 1) updateStep(currentStep + 1);
            });
        });

        document.querySelectorAll(".back-btn").forEach(btn => {
            btn.addEventListener("click", () => {
                if (currentStep > 0) updateStep(currentStep - 1);
            });
        });
    });
</script>

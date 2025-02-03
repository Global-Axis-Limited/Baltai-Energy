@extends('Layouts.connection')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738589779/Group_48097580_pkkyx8.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <h4>Our SSN Program</h4>
                    <h1>
                        Our SSN Program
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<section class="energy-calculator-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left: Form Section -->
            <div class="col-md-6">
                <div class="calculator-form Justiin p-4 rounded" data-aos="zoom-out-right" style="background: #FEF9ED;">
                    <div class="step-indicator">
                        <div class="indicator active"></div>
                        <div class="indicator"></div>
                        <div class="indicator"></div>
                    </div>
                    <h3 class="fw-bold text-black text-anime-wave mb-2">Let’s Calculate Your Savings!"</h3>
                    <h5 class="text-black mb-4">Estimate Your Solar Savings</h5>
                    <form class="step active">
                        <!-- What Appliances are critical for you? Bill -->
                        <div class="mb-4">
                            <label for="electricity-bill" class="form-label text-black">What Appliances are critical for you?</label>
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
                            <label for="electricity-supply" class="form-label text-black">Hours of Electricity supply (Daily)</label>
                            <select id="electricity-supply" class="form-select" required>
                                <option selected>3-5</option>
                                <option>6-8</option>
                                <option>9-12</option>
                            </select>
                        </div>

                        <!-- Monthly Cost on Fuel -->
                        <div class="mb-4">
                            <label for="fuel-cost" class="form-label text-black">Monthly Electricity bill</label>
                            <div class="input-group">
                                <span class="input-group-text">₦</span>
                                <input type="text" class="form-control" id="fuel-cost" value="40,000" required />
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-bold next-btn">
                                Next
                            </button>
                        </div>
                    </form>
                    <form class="step">
                        <!-- What Appliances are critical for you? Bill -->
                        <div class="mb-4">
                            <label for="electricity-bill" class="form-label text-black">AVERAGE HOURS OF ELECTRICITY PER DAY</label>
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Monthly Electricity bill</label>
                                <div class="input-group">
                                    <span class="input-group-text">₦</span>
                                    <input type="text" class="form-control" id="fuel-cost" value="40,000" required />
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="electricity-bill" class="form-label text-black">Do you use any of the following?</label>
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
                            <label for="electricity-supply" class="form-label text-black">Type of Apartment</label>
                            <select id="electricity-supply" class="form-select" required>
                                <option selected>Duplex</option>
                                <option>Duplex 2</option>
                                <option>Duplex 3</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary fw-bold next-btn">
                                Next
                            </button>
                        </div>
                    </form>
                    <form class="step">
                        <!-- What Appliances are critical for you? Bill -->
                        <div class="mb-4">
                            <label for="electricity-bill" class="form-label text-black">What Appliances are critical for you?</label>
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
                            <label for="electricity-supply" class="form-label text-black">Hours of Electricity supply (Daily)</label>
                            <select id="electricity-supply" class="form-select" required>
                                <option selected>3-5</option>
                                <option>6-8</option>
                                <option>9-12</option>
                            </select>
                        </div>

                        <!-- Monthly Cost on Fuel -->
                        <div class="mb-4">
                            <label for="fuel-cost" class="form-label text-black">Monthly Electricity bill</label>
                            <div class="input-group">
                                <span class="input-group-text">₦</span>
                                <input type="text" class="form-control" id="fuel-cost" value="40,000" required />
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid">
                        <button type="submit" class="btn btn-primary fw-bold next-btn">
                                Saved
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
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738589782/image_14_ohsawv.png" draggable="false" alt="Solar Engineer" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact Us -->
<section class="contact-section">

</section>
<!-- Contact Us Ends -->

<!-- Map -->

<!-- Mapl Us Ends -->
@section('page-content')

@endsection
<script>
    const steps = document.querySelectorAll(".step");
    const indicators = document.querySelectorAll(".indicator");
    const nextBtns = document.querySelectorAll(".next-btn");
    const prevBtns = document.querySelectorAll(".prev-btn");
    let currentStep = 0;

    function updateForm(step) {
        steps.forEach((s, i) => s.classList.toggle("active", i === step));
        indicators.forEach((ind, i) => ind.classList.toggle("active", i <= step));
    }

    nextBtns.forEach((btn) => btn.addEventListener("click", () => {
        if (currentStep < steps.length - 1) {
            currentStep++;
            updateForm(currentStep);
        }
    }));

    prevBtns.forEach((btn) => btn.addEventListener("click", () => {
        if (currentStep > 0) {
            currentStep--;
            updateForm(currentStep);
        }
    }));
</script>
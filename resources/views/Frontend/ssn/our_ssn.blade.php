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
            <!-- Multi-step Form -->
            <div class="col-md-6">
                <div class="calculator-form Justiin p-4" data-aos="zoom-out-right" style="background: #FEF9ED;">
                    <div class="step-indicator">
                        <div class="indicator active"></div>
                        <div class="indicator"></div>
                    </div>
                    <h3 class="fw-bold text-black text-anime-wave mb-2">Let’s Calculate Your Savings!</h3>
                    <h5 class="text-black mb-4">Estimate Your Potential Solar Savings</h5>
                    <form id="multiStepForm">
                        <!-- Step 1 -->
                        <div class="step active">
                            <div class="mb-4">
                                <label class="form-label text-black mb-4">What Appliances are critical to your daily operations?</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="appliance-refrigerator">
                                            <label class="form-check-label text-dark ms-2" for="appliance-refrigerator">Refrigerator</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="appliance-lighting">
                                            <label class="form-check-label text-dark ms-2" for="appliance-lighting">Lighting</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="appliance-laptop">
                                            <label class="form-check-label text-dark ms-2" for="appliance-laptop">Laptop/Charging</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="appliance-fans">
                                            <label class="form-check-label text-dark ms-2" for="appliance-fans">Fans</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="appliance-water">
                                            <label class="form-check-label text-dark ms-2" for="appliance-water">Water Pump</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="appliance-others">
                                            <label class="form-check-label text-dark ms-2" for="appliance-others">Other Appliances</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-black mb-4">Average Daily Electricity Supply Hours</label>
                                <select id="electricity-supply" class="form-select" required>
                                    <option selected>3-5</option>
                                    <option>6-8</option>
                                    <option>9-12</option>
                                    <option>13-16</option>
                                    <option>17-24</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-black mb-4">Current Monthly Electricity Bill (₦)</label>
                                <div class="input-group mb-4">
                                    <span class="input-group-text">₦</span>
                                    <input type="number" class="form-control" id="monthly-bill" placeholder="Enter amount" required />
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="button" class="btn btn-primary next-btn">Proceed</button>
                            </div>
                        </div>
                        <!-- Step 2 -->
                        <div class="step">
                            <div class="mb-4">
                                <label class="form-label text-black mb-4">Do you currently utilize any backup power solutions?</label>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="generator-petrol">
                                            <label class="form-check-label text-dark ms-2" for="generator-petrol">Petrol Generator</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="generator-diesel">
                                            <label class="form-check-label text-dark ms-2" for="generator-diesel">Diesel Generator</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="generator-inverter">
                                            <label class="form-check-label text-dark ms-2" for="generator-inverter">Inverter System</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label text-black mb-4">Type of Residence or Facility</label>
                                <select id="apartment-type" class="form-select" required>
                                    <option selected>Duplex</option>
                                    <option>Flat</option>
                                    <option>Bungalow</option>
                                    <option>Terraced House</option>
                                    <option>Penthouse</option>
                                </select>
                            </div>
                            <div class="d-grid">
                                <button type="button" class="btn btn-secondary back-btn mt-3">Back</button>
                                <button type="submit" class="btn btn-primary fw-bold mt-3">Calculate Savings</button>
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
<section class="Form">
    <div class="container">
        <iframe aria-label='Solar Solution Network' frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.com/baltaienergyltd1/form/ApplyforSSN/formperma/hV99W39w6FFq_Jr8tuH0WwUqAQx3sq9XYgojDzCEObI'></iframe>
    </div>
</section>
<section class="Justt">

</section>

<!-- Map -->

<!-- Mapl Us Ends -->
@endsection
<!-- Multi-step Form -->


<!-- Bootstrap Modal -->
<div class="modal fade" id="savingsModal" tabindex="-1" aria-labelledby="savingsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="savingsModalLabel">Your Personalized Solar Savings Analysis</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="modalBody">
                <!-- Content will be inserted here by JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{route('contact')}}" class="btn btn-success" data-bs-dismiss="modal">Contact Us for a Quote</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const steps = document.querySelectorAll(".step");
        const indicators = document.querySelectorAll(".indicator");
        const nextButtons = document.querySelectorAll(".next-btn");
        const backButtons = document.querySelectorAll(".back-btn");
        let currentStep = 0;

        const appliances = {
            "refrigerator": 1000,
            "lighting": 60,
            "laptop": 45,
            "fans": 75,
            "water": 750,
            "others": 0
        };

        function showStep(step) {
            steps.forEach((s, index) => {
                s.classList.toggle("active", index === step);
            });
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle("active", index === step);
            });
        }

        nextButtons.forEach(button => {
            button.addEventListener("click", () => {
                if (currentStep < steps.length - 1) {
                    currentStep++;
                    showStep(currentStep);
                }
            });
        });

        backButtons.forEach(button => {
            button.addEventListener("click", () => {
                if (currentStep > 0) {
                    currentStep--;
                    showStep(currentStep);
                }
            });
        });

        document.getElementById("multiStepForm").addEventListener("submit", function(event) {
            event.preventDefault();
            if (currentStep === steps.length - 1) {
                const electricitySupply = document.getElementById("electricity-supply").value.split('-')[0];
                const monthlyBill = parseFloat(document.getElementById("monthly-bill").value) || 0;
                const apartmentType = document.getElementById("apartment-type").value;

                let totalApplianceCost = 0;
                for (let appliance in appliances) {
                    if (document.getElementById(`appliance-${appliance}`).checked) {
                        totalApplianceCost += appliances[appliance];
                    }
                }

                const dailyUsageHours = parseInt(electricitySupply);
                const estimatedSolarCost = totalApplianceCost * 0.8; // 20% savings assumption
                const monthlySavings = monthlyBill * 0.2; // 20% savings on bill
                const annualSavings = monthlySavings * 12;
                const fiveYearSavings = annualSavings * 5 - estimatedSolarCost; // Net savings over 5 years

                const modalBody = document.getElementById("modalBody");
                modalBody.innerHTML = `
                    <p>Dear Valued Customer,</p>
                    <p>Thank you for providing your energy usage details. Based on the information submitted, we have conducted a preliminary analysis of your potential savings by transitioning to a solar energy solution. Below are the key findings:</p>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tbody>
                                <tr><td><strong>Total Annual Appliance Cost:</strong></td><td>₦${totalApplianceCost.toLocaleString()}</td></tr>
                                <tr><td><strong>Estimated Solar System Investment:</strong></td><td>₦${estimatedSolarCost.toLocaleString()}</td></tr>
                                <tr><td><strong>Monthly Savings:</strong></td><td>₦${monthlySavings.toLocaleString()}</td></tr>
                                <tr><td><strong>Annual Savings:</strong></td><td>₦${annualSavings.toLocaleString()}</td></tr>
                                <tr><td><strong>Projected 5-Year Net Savings:</strong></td><td>₦${fiveYearSavings.toLocaleString()}</td></tr>
                                <tr><td><strong>Daily Usage Hours:</strong></td><td>${dailyUsageHours} hours</td></tr>
                                <tr><td><strong>Property Type:</strong></td><td>${apartmentType}</td></tr>
                            </tbody>
                        </table>
                    </div>
                    <p><strong>Compelling Reasons to Switch to Solar Energy:</strong></p>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">Achieve significant cost savings, with up to 20% reduction in electricity expenses and potential long-term returns on investment.</li>
                        <li class="list-group-item">Contribute to environmental sustainability by utilizing a renewable energy source, reducing your carbon footprint by an estimated 3-4 tons annually.</li>
                        <li class="list-group-item">Mitigate the impact of rising energy costs with a stable, predictable energy solution.</li>
                        <li class="list-group-item">Ensure uninterrupted power supply, enhancing reliability for critical appliances and operations.</li>
                        <li class="list-group-item">Benefit from government incentives and potential tax rebates in supported regions (consult local regulations).</li>
                    </ol>
                    <p><em>This analysis was generated on ${new Date().toLocaleString('en-US', { timeZone: 'Africa/Lagos' })} WAT. For a more detailed, please contact our solar experts.</em></p>
                `;
                const modal = new bootstrap.Modal(document.getElementById('savingsModal'));
                modal.show();
            }
        });
    });
</script>
<style>
    .step-indicator {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .indicator {
        width: 80% !important;
        height: 10px;
        background-color: #ccc;
        border-radius: 50%;
        transition: background-color 0.3s;
    }

    .indicator.active {
        background-color: #007bff;
    }

    .step {
        display: none;
    }

    .step.active {
        display: block;
    }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: #f8f9fa;
    }
</style>
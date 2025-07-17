@extends('Layouts.connection')

@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/ddj0k8gdw/image/upload/v1739219497/Group_48097581_1_thvmvt.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="text">
                    <h4>
                        Energy Calculator
                    </h4>
                    <h1>
                        Discover Your Energy Needs with Ease
                    </h1>
                    <p class="text-left" style="text-align: left;">
                        Get a free accessment with our Energy Calculator to estimate your power usage and find the perfect solar solution for your home or business. No technician required—it's simple, fast, and accurate.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->

<section class="calculator">
    <div class="container">
        <div class="lll">
            <h6 class="">ENERGY CALCULATOR</h6>
            <h2>Know Your Power Usage</h2>
            <p>Estimate your electricity consumption and find the right solar solution for your needs.</p>
        </div>
        <div class="alert text-black alert-warning text-center mb-4" role="alert">
            Use our 'Energy Audit' calculator below to calculate how much electricity you use (in kWh) daily and determine your maximum power usage (in kW). Simply enter your appliance details and usage to get started.
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div id="appliance-container"></div>
                <div class="custom-carder">
                    <div class="mt-2 d-flex justify-content-center gap-2">
                        <button class="btn btn-success" onclick="addAppliance()">Add More Appliances</button>
                        <button class="btn btn-primary" onclick="calculateTotals()">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column gap-3" data-aos="flip-left"
                    data-aos-easing="ease-out-cubic"
                    data-aos-duration="2000">
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737284084/Energy/Group_48097585_ve6ahj.jpg" draggable="false" alt="Solar Engineer" class="img-fluid rounded">
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="result-box">
                    <h5>Total Power Usage (kW):</h5>
                    <h3 id="totalPower">0.00 kW</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="result-box">
                    <h5>Total Energy Usage (kWh):</h5>
                    <h3 id="totalEnergy">0.00 kWh</h3>
                </div>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <a href="{{route('product')}}" target="_blank">
                <button class="btn-custom">Reccommended Solution</button>
            </a>
        </div>
    </div>
</section>

<section class="Form">
    <div class="container">
        <div class="text-center mb-4">
            <h6 class="text-warning mb-2">ENERGY AUDIT</h6>
            <h3><strong>Submit Your Energy Audit</strong></h3>
            <p>Let us help you find the perfect solar system tailored to your needs.</p>
        </div>
        <div class="form-container">
            <form id="energyAuditForm" onsubmit="handleSubmit(event)">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Your full name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Email Address</label>
                        <input type="email" class="form-control" id="email" placeholder="Your email address" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Total Energy Consumption (in kWh)</label>
                        <input type="number" class="form-control" id="energyConsumption" placeholder="0.00" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>I Require a System For</label>
                        <select class="form-select" id="systemType" required>
                            <option value="Residential">Residential</option>
                            <option value="Commercial">Commercial</option>
                            <option value="Industrial">Industrial</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label>Additional Information (Optional)</label>
                            <textarea rows="4" cols="30" id="additionalInfo" placeholder="Write your message here"></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn-submit">Submit Your Energy Requirements</button>
                </div>
            </form>
        </div>
    </div>
</section>
<section class="Justt">

</section>
<script>
    // Appliance power rating list
    const appliances = {
        "LED TV": 100,
        "AC": 1500,
        "Freezer": 1000,
        "Refrigerator": 1000,
        "Ceiling Fan": 75,
        "Standing Fan": 100,
        "Water Pump": 750,
        "Laptop": 45,
        "DSTV": 20,
        "Desktop": 150,
        "Smartphone": 6,
        "Sound System": 150,
        "Modem": 15,
        "Blur-Ray/DVD Player": 15,
        "Games Console": 200,
        "Water Heater": 2000,
        "Washing Machine": 750,
        "Central AC": 2500,
        "Printer": 45,
        "CCTV": 15,
        "Projector": 350,
        "Blender": 750,
        "Microwave": 1000,
        "Toaster": 1500,
        "Vacuum Cleaner": 1250,
        "Plasma TV": 250,
        "Game Console": 200,
        "Photocopier": 300,
        "Scanner": 25,
        "LCD Monitor": 40,
        "Smartphone Charger": 6,
        "Sewing Machine": 750,
        "Drill": 720,
        "Pressing Iron": 1000,
        "Rice Cooker": 400,
        "Electric Kettle": 1500,
        "Electric Oven": 1500,
        "LED Light Bulbs": 10,
        "Incandescent Light Bulbs(Yellow)": 60,
        "Router": 20
    };

    function addAppliance() {
        const container = document.getElementById("appliance-container");

        const div = document.createElement("div");
        div.classList.add("custom-card", "mt-1");
        div.innerHTML = `
            <div class="row">
                            <div class="col-md-12">
                    <button class="btn btn-danger mt-3 Mooo" onclick="removeAppliance(this)">X</button>
                </div>
                <div class="col-md-12">
                
                    <label>Appliance</label>
                    <select class="form-select appliance">
                        <option value="">-- Select Appliance --</option>
                        ${Object.keys(appliances).map(appliance => `<option value="${appliance}">${appliance}</option>`).join("")}
                    </select>
                </div>
                <div class="col-md-12">
                    <label>Power Rating (Watts)</label>
                    <input type="number" class="form-control power-rating" placeholder="Auto-fill" readonly>
                </div>
                <div class="col-md-12">
                    <label>Average Daily Usage</label>
                    <input type="number" class="form-control usage" value="0">
                </div>
                <div class="col-md-12">
                    <label>Quantity</label>
                    <input type="number" class="form-control quantity" value="1">
                </div>
            </div>
        `;

        container.appendChild(div);

        // Attach event listener for auto-filling power rating
        div.querySelector(".appliance").addEventListener("change", updatePowerRating);
    }

    function removeAppliance(button) {
        button.closest(".custom-card").remove();
        calculateTotals(); // Recalculate immediately when an appliance is removed
    }

    function updatePowerRating(event) {
        const selectedAppliance = event.target.value;
        const powerInput = event.target.closest(".custom-card").querySelector(".power-rating");
        powerInput.value = appliances[selectedAppliance] || "";
    }

    function calculateTotals() {
        let totalPower = 0;
        let totalEnergy = 0;

        document.querySelectorAll(".custom-card").forEach(card => {
            const power = parseFloat(card.querySelector(".power-rating").value) || 0;
            const usage = parseFloat(card.querySelector(".usage").value) || 0;
            const quantity = parseFloat(card.querySelector(".quantity").value) || 0;

            totalPower += (power * quantity) / 1000; // Convert Watts to kW
            totalEnergy += (power * usage * quantity) / 1000; // Convert Watts to kWh
        });

        document.getElementById("totalPower").textContent = `${totalPower.toFixed(2)} kW`;
        document.getElementById("totalEnergy").textContent = `${totalEnergy.toFixed(2)} kWh`;
    }

    // Add the first appliance row on page load
    addAppliance();
</script>

<script>
    function handleSubmit(event) {
        event.preventDefault(); // Prevent default form submission

        // Collect form data
        const fullName = document.getElementById('fullName').value;
        const email = document.getElementById('email').value;
        const energyConsumption = document.getElementById('energyConsumption').value;
        const systemType = document.getElementById('systemType').value;
        const additionalInfo = document.getElementById('additionalInfo').value;

        // Construct email body
        const subject = encodeURIComponent('Energy Audit Submission');
        const body = encodeURIComponent(
            `Full Name: ${fullName}\n` +
            `Email: ${email}\n` +
            `Total Energy Consumption: ${energyConsumption} kWh\n` +
            `System Type: ${systemType}\n` +
            `Additional Information: ${additionalInfo || 'None'}`
        );

        // Your Gmail address
        const yourEmail = 'hmztadeleke@gmail.com'; // Replace with your actual Gmail address

        // Create mailto link and trigger it
        const mailtoLink = `mailto:${yourEmail}?subject=${subject}&body=${body}`;
        window.location.href = mailtoLink;
    }
</script>
@endsection
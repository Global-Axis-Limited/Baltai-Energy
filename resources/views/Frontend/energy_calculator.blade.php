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
                <div class="custom-card p-3 border rounded">
                    <div class="mb-3">
                        <label for="applianceSelect" class="form-label">Select Appliances</label>
                        <select class="form-select" id="applianceSelect">
                            <option value="">-- Select Appliance --</option>
                        </select>
                    </div>
                    <div id="selectedAppliances" class="d-flex flex-wrap gap-2"></div>
                    <div class="mb-3">
                        <label for="powerRating" class="form-label">Total Power Rating (Watts)</label>
                        <input type="number" class="form-control" id="powerRating" placeholder="Auto-fill" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="usage" class="form-label">Average Daily Usage (Hours)</label>
                        <input type="number" class="form-control" id="usage" value="0">
                    </div>
                    <div class="mb-3">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" id="quantity" value="1">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-primary" onclick="calculateTotals()">Submit</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="d-flex flex-column gap-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000">
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

    </div>
</section>
<div class="modal fade" id="resultsModal" tabindex="-1" aria-labelledby="resultsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow-sm rounded-3">

            <div class="modal-header bg-light border-bottom">
                <h5 class="modal-title fw-bold text-dark" id="resultsModalLabel">Energy Calculation Results</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="mb-4 text-center">
                    <h6 class="text-secondary">Total Power Usage (kW)</h6>
                    <h3 id="modalTotalPower" class="text-primary fw-semibold">0.00 kW</h3>
                </div>

                <div class="mb-4 text-center">
                    <h6 class="text-secondary">Total Energy Usage (kWh)</h6>
                    <h3 id="modalTotalEnergy" class="text-success fw-semibold">0.00 kWh</h3>
                </div>

                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                    <span class="text-black">Would you like a solar recommendation based on your energy consumption?</span>
                    <a id="auditLink" href="#" class="btn btn-custom" onclick="scrollToForm(event)">Submit</a>
                </div>
            </div>

            <div class="modal-footer border-top text-center">
                <button type="button" class="w-100 btn" data-bs-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<section class="Form mt-5">
        <div class="container">
            <iframe aria-label='Energy Audit' frameborder="0" style="height:500px;width:99%;border:none;" src='https://forms.zohopublic.com/baltaienergyltd1/form/EnergyAudit/formperma/UsbEnwSEwARzrB7HD6hr86ehytIBjwODTvay8t2Maas'></iframe>
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

    let selectedAppliances = [];

    // Populate dropdown with appliances
    document.addEventListener("DOMContentLoaded", () => {
        const select = document.getElementById("applianceSelect");
        Object.keys(appliances).forEach(appliance => {
            const option = document.createElement("option");
            option.value = appliance;
            option.textContent = appliance;
            select.appendChild(option);
        });
    });

    function updateSelectedAppliances() {
        const selectElement = document.getElementById("applianceSelect");
        const selectedValue = selectElement.value;
        const selectedAppliancesDiv = document.getElementById("selectedAppliances");
        const powerInput = document.getElementById("powerRating");

        if (selectedValue && !selectedAppliances.includes(selectedValue) && selectedAppliances.length < 4) {
            selectedAppliances.push(selectedValue);
            updateApplianceDisplay();
            selectElement.value = ""; // Reset dropdown
        }

        if (selectedAppliances.length === 4) {
            selectElement.disabled = true; // Disable dropdown when 4 appliances are selected
        }

        let totalPower = selectedAppliances.reduce((sum, appliance) => sum + (appliances[appliance] || 0), 0);
        powerInput.value = totalPower || "";
    }

    function removeAppliance(appliance) {
        selectedAppliances = selectedAppliances.filter(item => item !== appliance);
        updateApplianceDisplay();
        document.getElementById("applianceSelect").disabled = false; // Re-enable dropdown
        let totalPower = selectedAppliances.reduce((sum, appliance) => sum + (appliances[appliance] || 0), 0);
        document.getElementById("powerRating").value = totalPower || "";
    }

    function updateApplianceDisplay() {
        const selectedAppliancesDiv = document.getElementById("selectedAppliances");
        selectedAppliancesDiv.innerHTML = selectedAppliances.map(appliance => `
                <button class="appliance-button" type="button">
                    ${appliance}
                    <button type="button" class="btn-close" aria-label="Close" onclick="removeAppliance('${appliance}')"></button>
                </button>
            `).join("");
    }

    function calculateTotals() {
        if (selectedAppliances.length !== 4) {
            alert("Please select exactly 4 appliances.");
            return;
        }

        const power = parseFloat(document.getElementById("powerRating").value) || 0;
        const usage = parseFloat(document.getElementById("usage").value) || 0;
        const quantity = parseFloat(document.getElementById("quantity").value) || 0;

        const totalPower = (power * quantity) / 1000; // Convert Watts to kW
        const totalEnergy = (power * usage * quantity) / 1000; // Convert Watts to kWh

        // Update immediate results
        document.getElementById("totalPower").textContent = `${totalPower.toFixed(2)} kW`;
        document.getElementById("totalEnergy").textContent = `${totalEnergy.toFixed(2)} kWh`;

        // Show modal after 2 seconds
        setTimeout(() => {
            const modal = new bootstrap.Modal(document.getElementById("resultsModal"));
            document.getElementById("modalTotalPower").textContent = `${totalPower.toFixed(2)} kW`;
            document.getElementById("modalTotalEnergy").textContent = `${totalEnergy.toFixed(2)} kWh`;
            const auditLink = document.getElementById("auditLink");
            if (totalEnergy > 0) {
                auditLink.href = `{{route('product')}}?totalEnergy=${totalEnergy.toFixed(2)}`;
                modal.show();
            } else {
                alert("Total energy usage is 0. Please enter valid usage and quantity.");
            }
        }, 2000); // 2 seconds delay
    }

    function scrollToForm(event) {
            event.preventDefault(); // Prevent default link behavior
            const formSection = document.querySelector(".Form");
            formSection.scrollIntoView({ behavior: "smooth" });
            const modal = bootstrap.Modal.getInstance(document.getElementById("resultsModal"));
            modal.hide(); // Close the modal after scrolling
        }

        // Initialize event listener for appliance selection
        document.getElementById("applianceSelect").addEventListener("change", updateSelectedAppliances);

    // Initialize event listener for appliance selection
    document.getElementById("applianceSelect").addEventListener("change", updateSelectedAppliances);
</script>
<style>
    .appliance-button {
        background-color: #f4c10f;
        color: white;
        border: none;
        padding: 5px 10px;
        margin: 5px;
        border-radius: 5px;
        font-size: 12px;
        display: inline-flex;
        align-items: center;
    }
    .btn-custom{
        color: white !important;
    }

    /* .appliance-button .btn-close {
        margin-left: 5px;
        font-size: 5px;
        background: transparent;
        border: none;
        background-color: #f4c10f;
        color: white !important;
    } */
</style>
@endsection
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
                        Get a free accessment with our Energy Calculator
                    </h1>
                    <p class="text-left" style="text-align: left;">
                        Use our Electricity Calculator to estimate your power usage and find the perfect solar solution for your home or business. No technician required—it's simple, fast, and accurate.
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
        <div id="appliance-container">
            <div class="custom-card">
                <div class="row">
                    <div class="col-md-3">
                        <label>Appliance</label>
                        <select class="form-select">
                            <option>Air Conditioner</option>
                            <option>Refrigerator</option>
                            <option>Washing Machine</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Power Rating (Watts)</label>
                        <input type="number" class="form-control" value="3500">
                    </div>
                    <div class="col-md-3">
                        <label>Average Daily Usage (Hours)</label>
                        <input type="number" class="form-control" value="8.00">
                    </div>
                    <div class="col-md-3">
                        <label>Quantity</label>
                        <input type="number" class="form-control" value="0">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-center gap-3">
            <button class="btn btn-danger">Remove</button>
            <button class="btn btn-success" onclick="addAppliance()">Add more appliances</button>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="result-box">
                    <h5>Total Power Usage (kW):</h5>
                    <h3>0.00 kW</h3>
                </div>
            </div>
            <div class="col-md-6">
                <div class="result-box">
                    <h5>Total Energy Usage (kWh):</h5>
                    <h3>0.00 kWh</h3>
                </div>
            </div>
        </div>
        <div class="mt-4 d-flex justify-content-center">
            <button class="btn-custom">View Recommended Solar Solutions</button>
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
            <form>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Full Name</label>
                        <input type="text" class="form-control" placeholder="Your full name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Email Address</label>
                        <input type="email" class="form-control" placeholder="Your email address" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label>Total Solar Value (in kWh)</label>
                        <input type="number" class="form-control" placeholder="0.00" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>I Require a System For</label>
                        <select class="form-select" required>
                            <option>Residential</option>
                            <option>Commercial</option>
                            <option>Industrial</option>
                        </select>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label>Additional Information (Optional)</label>
                            <textarea rows="4" col="30" placeholder="Write your message here" required></textarea>
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
    function addAppliance() {
        const container = document.getElementById("appliance-container");
        const newAppliance = document.createElement("div");
        newAppliance.classList.add("custom-card", "mt-3");
        newAppliance.innerHTML = `
                <div class="row text-center">
                    <div class="col-md-3">
                        <label>Appliance</label>
                        <select class="form-select">
                            <option>Air Conditioner</option>
                            <option>Refrigerator</option>
                            <option>Washing Machine</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label>Power Rating (Watts)</label>
                        <input type="number" class="form-control" value="3500">
                    </div>
                    <div class="col-md-3">
                        <label>Average Daily Usage (Hours)</label>
                        <input type="number" class="form-control" value="8.00">
                    </div>
                    <div class="col-md-3">
                        <label>Quantity</label>
                        <input type="number" class="form-control" value="0">
                    </div>
                </div>
                <div class="mt-2 text-center">
                    <button class="btn btn-danger" onclick="removeAppliance(this)">Remove</button>
                </div>
            `;
        container.appendChild(newAppliance);
    }

    function removeAppliance(button) {
        button.parentElement.parentElement.remove();
    }
</script>
@endsection
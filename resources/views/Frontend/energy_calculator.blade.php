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
                        Use our Electricity Calculator to estimate your power usage and find the perfect solar solution for your home or business. No technician required—it's simple, fast, and accurate.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->

<section class="calculator">
    <div class="container p-4">
        <div class="header">
            <h6 class="text-warning">ENERGY CALCULATOR</h6>
            <h2>Know Your Power Usage</h2>
            <p>Estimate your electricity consumption and find the right solar solution for your needs.</p>
        </div>
        <div class="alert alert-warning text-center" role="alert">
            Use our 'Energy Audit' calculator below to calculate how much electricity you use (in kWh) daily and determine your maximum power usage (in kW). Simply enter your appliance details and usage to get started.
        </div>
        <table class="table table-dark text-white">
            <thead>
                <tr>
                    <th>Appliance</th>
                    <th>Power Rating (Watts)</th>
                    <th>Average Daily Usage (Hours)</th>
                    <th>Quantity</th>
                </tr>
            </thead>
            <tbody>
                <tr class="appliance-row">
                    <td>
                        <img src="https://via.placeholder.com/40" alt="Appliance"> Air Conditioner
                    </td>
                    <td><input type="number" class="form-control" value="2500"></td>
                    <td><input type="number" class="form-control" value="8"></td>
                    <td><input type="number" class="form-control" value="0"></td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-between">
            <button class="btn btn-danger">Remove</button>
            <button class="btn btn-success">Add more appliances</button>
        </div>
        <div class="mt-4 text-center">
            <h5>Total Power Usage (kW): <strong>0.00 kW</strong></h5>
            <h5>Total Energy Usage (kWh): <strong>0.00 kWh</strong></h5>
        </div>
        <div class="text-center mt-3">
            <button class="btn btn-warning">View Recommended Solar Solutions</button>
        </div>
    </div>
</section>


@endsection
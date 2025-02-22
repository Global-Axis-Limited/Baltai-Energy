@extends('Layouts.connection')

@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737876649/Energy/Group_48097580_cxjw5j.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text text-center">
                    <h1>
                        Business Solutions
                    </h1>
                    <div class="allow"><img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737641641/Energy/Frame_1618873201_lt1d2i.png" draggable="false" alt=""></div>
                    <h4>Save Cost with Efficient Operations</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->

<!-- Hello  -->
<section class="Hello">
    <div class="container">
        <div class="row">
            <div class="justify-content mb-5">
                <h1 class="text-black">
                    Product Range
                </h1>
                <button class="float-end">Speak to a Consultant</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-4">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071923/9_xneof7.png" class="d-block w-100" draggable="false" alt="Product 5" data-bs-toggle="modal" data-bs-target="#modal9">
            </div>
            <div class="col-md-3 mb-4">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071948/10_myute7.png" class="d-block w-100" draggable="false" alt="Product 6" data-bs-toggle="modal" data-bs-target="#modal10">
            </div>
            <div class="col-md-3 mb-4">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071963/11_vtvexh.png" class="d-block w-100" draggable="false" alt="Product 7" data-bs-toggle="modal" data-bs-target="#modal11">
            </div>
        </div>
    </div>
</section>

<!-- Communication -->
<section class="communication" style="background: linear-gradient(to top, #F8861A 0%, #FEC31C 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="thread-text" style="color:#fff;">
                    <h2>
                        BE Alpha
                    </h2>
                    <p style="color:#fff;">
                        This solution is suitable for medium to large homes and mid sized businesses.
                        (5 Bedroom bungalow, Duplex, Mid sized Office, Small Apartment Complex, Supermarket, etc)
                    </p>
                    <a href="{{route('contact')}}">
                        <button style="background: #fff; color:#000;" class="mb-5">
                            Contact Us
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="el-icon-message">
                    <img class="pulse" src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071923/9_xneof7.png" draggable="false" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="communication" style="background: linear-gradient(to top, #F8861A 0%, #FEC31C 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="el-icon-message">
                    <img class="pulse" src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071948/10_myute7.png" draggable="false" alt="">
                </div>
            </div>
            <div class="col-lg-7">
                <div class="thread-text" style="color:#fff;">
                    <h2>
                        BE Alpha Plus
                    </h2>
                    <p style="color:#fff;">
                        This solution is suitable for medium to large homes and mid sized businesses.

                        5 Bedroom bungalow, Duplex, Mid sized Office, Small Apartment Complex, Supermarket, Small Factory Wing, etc
                    </p>
                    <a href="{{route('contact')}}">
                        <button style="background: #fff; color:#000;" class="mb-5">
                            Contact Us
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="communication" style="background: linear-gradient(to top, #F8861A 0%, #FEC31C 100%);">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="thread-text" style="color:#fff;">
                    <h2>
                        BE Alpha Max
                    </h2>
                    <p style="color:#fff;">
                        This solution is suitable for medium to large homes and mid sized businesses.

                        ( Duplex, Mid sized Office, Small Apartment Complex, Supermarket, Factory Wing, etc
                    </p>
                    <a href="{{route('contact')}}">
                        <button style="background: #fff; color:#000;" class="mb-5">
                            Contact Us
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                    <div class="el-icon-message">
                        <img class="pulse" src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071963/11_vtvexh.png" draggable="false" alt="">
                    </div>
                </div>
        </div>
    </div>
</section>

<section class="Components">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="features mb-4" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <h1 class="font-bold">Components</h1>
                    <ul>
                        <li>
                            <i class="bi bi-check2-square"></i> 6 Units of 550 watts Solar Panels
                        </li>
                        <li> <i class="bi bi-check2-square"></i>
                            1 Unit of 3.0 kva Solar Inverter with
                            Inbuilt MPP3 Controller
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i>
                            1 Unit of  5 kwh Lithium Battery
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i> Cable
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i>Mounting Apparatus
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="features mb-4" data-aos="fade-up"
                    data-aos-anchor-placement="top-center">
                    <h1 class="font-bold">Features</h1>
                    <ul>
                        <li>
                            <i class="bi bi-check2-square"></i> Aesthetically Pleasing Equipment Design
                        </li>
                        <li> <i class="bi bi-check2-square"></i>
                            Inbuilt MPP3 Controller
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i>
                            Remote Monitoring Capability via App
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i> Free Mounting Apparatus in package
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i>Plug and Play Installation
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i> High Grade Solar Panels
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i> Temperature Regulation
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Installation Section -->
<div class="installation-section">
    <div class="container">
        <h2 class="installation-title">Installation Process</h2>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card-custom" data-aos="flip-left">
                    <h5>Site Inspection</h5>
                    <p>An Engineer pays you a visit on-location for a physical assessment of your grounds, to determine your energy consumption, capacity requirements, and establish your desired goal and possible outcomes.</p>
                    <div class="number-circle">1</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom" data-aos="flip-up">
                    <h5>System Design</h5>
                    <p>After the expert assessment, we design a solar system that meets your specific energy requirements and/or your desired capacity outcomes for your use case.</p>
                    <div class="number-circle">2</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom" data-aos="flip-down">
                    <h5>Installation</h5>
                    <p>Our professional team of Engineers and Technicians proceed to your location with the required equipment, tools, and accessories to install your tailored solar solution, swiftly and efficiently making sure to deliver on timelines and other agreed expectations.</p>
                    <div class="number-circle">3</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom" data-aos="flip-right">
                    <h5>After Sale Service</h5>
                    <p>We provide a dedicated manager who will be available to you through the process to ensure after-sales service. Offer maintenance and after-sale service to ensure the installed system continues to operate at peak performance.</p>
                    <div class="number-circle">4</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom" data-aos="zoom-in">
                    <h5>Maintenance Services</h5>
                    <p>All installations will enjoy a minimum 1-year maintenance coverage on panels, inverters, and batteries. Terms and conditions apply.</p>
                    <div class="number-circle">5</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom" data-aos="zoom-out">
                    <h5>Warranty Coverage</h5>
                    <p>All our equipment have robust warranty coverage that covers you through your years of use for the equipment and its utility with as much as 25 years of warranty on Panels.</p>
                    <div class="number-circle">6</div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--  -->

<section class="Components">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="features mb-4" data-aos="fade-down"
                    data-aos-easing="linear"
                    data-aos-duration="1500">
                    <h1 class="font-bold">Estimated Utility</h1>
                    <ul>
                        <li>
                            <i class="bi bi-check2-square"></i> 1 Tv Set
                        </li>
                        <li> <i class="bi bi-check2-square"></i>
                            1 Fridge
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i>
                            DSTV Decoder
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i> 1 Sound System
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i> 2 Laptops
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i>
                            4 Standing/Ceiling Fans
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i>
                            8 LED Bulbs
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="features mb-4" data-aos="fade-up"
                    data-aos-duration="3000">
                    <h1 class="font-bold">Warranty Protection</h1>
                    <p>
                        Robust warranty protection on all equipment
                    </p>
                    <ul>
                        <li>
                            <i class="bi bi-check2-square"></i> Battery: 5 Years
                        </li>
                        <li> <i class="bi bi-check2-square"></i>
                            Inverter 5 years
                        </li>
                        <li>
                            <i class="bi bi-check2-square"></i>
                            Panels 20 years
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<div class="modal fade" id="modal9" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Residential Solution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ALLL">
                <div class="row">
                    <div class="col-md-6">
                        <h1>BE Alpha</h1>
                        <p>This solution is suitable for medium to large homes and mid sized businesses.</p>
                        <p><strong>5 Bedroom bungalow, Duplex, Mid sized Office, Small Apartment Complex, Supermarket, Small Factory Wing, etc</strong></p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071923/9_xneof7.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal10" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Business Solution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ALLL">
                <div class="row">
                    <div class="col-md-6">
                        <h1>BE Alpha Plus</h1>
                        <p>This solution is suitable for medium to large homes and mid sized businesses.</p>
                        <p><strong>5 Bedroom bungalow, Duplex, Mid sized Office, Small Apartment Complex, Supermarket, Small Factory Wing, etc</strong></p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071948/10_myute7.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal11" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Business Solution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ALLL">
                <div class="row">
                    <div class="col-md-6">
                        <h1>BE Alpha Max</h1>
                        <p>This solution is suitable for medium to large homes and mid sized businesses.</p>
                        <p><strong>( Duplex, Mid sized Office, Small Apartment Complex, Supermarket, Factory Wing, etc</strong></p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071963/11_vtvexh.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@extends('Layouts.connection')

@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737641495/Energy/Group_48097580_s0acig.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text text-center">
                    <h1>
                        Residential Solutions
                    </h1>
                    <div class="allow"><img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737641641/Energy/Frame_1618873201_lt1d2i.png" draggable="false" alt=""></div>
                    <h4>Make Your Home Come Alive</h4>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->

<section class="Hello">
    <div class="container">
        <div class="row">
            <div class="justify-content">
                <h1 class="text-black">
                    Product Range
                </h1>
                <button class="float-end">Speak to a Consultant</button>
            </div>
        </div>

        <div id="productCarousel" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/1_gxdhq8.png" class="d-block w-100" draggable="false" alt="Product 1" data-bs-toggle="modal" data-bs-target="#modal1">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/2_ukuqyx.png" class="d-block w-100" draggable="false" alt="Product 2" data-bs-toggle="modal" data-bs-target="#modal2">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/3_vogklg.png" class="d-block w-100" draggable="false" alt="Product 3" data-bs-toggle="modal" data-bs-target="#modal3">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/4_wyauvt.png" class="d-block w-100" draggable="false" alt="Product 4" data-bs-toggle="modal" data-bs-target="#modal4">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071922/5_q6sd4y.png" class="d-block w-100" draggable="false" alt="Product 5" data-bs-toggle="modal" data-bs-target="#modal5">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071922/6_lb2ddx.png" class="d-block w-100" draggable="false" alt="Product 6" data-bs-toggle="modal" data-bs-target="#modal6">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071922/7_le3end.png" class="d-block w-100" draggable="false" alt="Product 7" data-bs-toggle="modal" data-bs-target="#modal7">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071923/8_wtgmuy.png" class="d-block w-100" draggable="false" alt="Product 8" data-bs-toggle="modal" data-bs-target="#modal8">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071923/9_xneof7.png" class="d-block w-100" draggable="false" alt="Product 5" data-bs-toggle="modal" data-bs-target="#modal9">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071948/10_myute7.png" class="d-block w-100" draggable="false" alt="Product 6" data-bs-toggle="modal" data-bs-target="#modal10">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071963/11_vtvexh.png" class="d-block w-100" draggable="false" alt="Product 7" data-bs-toggle="modal" data-bs-target="#modal11">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>



<!-- Communication -->
<section class="communication" style="background: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="thread-text">
                    <h2>
                        BE-Active: 3KVA Smart Home Solution
                    </h2>
                    <p>
                        The 3 kVA smart home solution is ideal for families living in small homes and apartments who are looking to enjoy reliable power supply while saving significant cost on electricity and on fuel consumption from generators.
                    </p>
                    <a href="#" class="mb-5">
                        <button>
                            Contact Us
                        </button>
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="el-icon-message">
                    <img class="pulse" src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737642891/Energy/image_enffgj.png" draggable="false" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="Components">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="features mb-4">
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
                <div class="features mb-4">
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
                <div class="card-custom">
                    <h5>Site Inspection</h5>
                    <p>An Engineer pays you a visit on-location for a physical assessment of your grounds, to determine your energy consumption, capacity requirements, and establish your desired goal and possible outcomes.</p>
                    <div class="number-circle">1</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom">
                    <h5>System Design</h5>
                    <p>After the expert assessment, we design a solar system that meets your specific energy requirements and/or your desired capacity outcomes for your use case.</p>
                    <div class="number-circle">2</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom">
                    <h5>Installation</h5>
                    <p>Our professional team of Engineers and Technicians proceed to your location with the required equipment, tools, and accessories to install your tailored solar solution, swiftly and efficiently making sure to deliver on timelines and other agreed expectations.</p>
                    <div class="number-circle">3</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom">
                    <h5>After Sale Service</h5>
                    <p>We provide a dedicated manager who will be available to you through the process to ensure after-sales service. Offer maintenance and after-sale service to ensure the installed system continues to operate at peak performance.</p>
                    <div class="number-circle">4</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom">
                    <h5>Maintenance Services</h5>
                    <p>All installations will enjoy a minimum 1-year maintenance coverage on panels, inverters, and batteries. Terms and conditions apply.</p>
                    <div class="number-circle">5</div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card-custom">
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
                <div class="features mb-4">
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
                <div class="features mb-4">
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
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Residential Solution</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="text
                    ">
                            <h1>
                                3KVA
                            </h1>
                            <p>
                                The 3 kVA smart home solution is ideal for families living in small homes and apartments
                            </p>
                            <a href="#">
                                Discover More
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737642199/Energy/Group_48097625_jhxflb.png" draggable="false" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<!-- Modals for Each Product -->
<div class="modal fade" id="modal1" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Residential Solution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ALLL">
                <div class="row">
                    <div class="col-md-6">
                        <h1>BE Active</h1>
                        <p>This solution is suitable for small homes with low power needs.</p>
                        <p><strong>Mini Flat, 2 Bedroom Apartment, BQ</strong></p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/1_gxdhq8.png" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal2" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Residential Solution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ALLL">
                <div class="row">
                    <div class="col-md-6">
                        <h1>BE Active Plus</h1>
                        <p>This solution is suitable for small homes that require a bit more power.</p>
                        <p>Mini Flat, 2 Bedroom Apartment, BQ, Micro businesses</p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/2_ukuqyx.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal3" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Residential Solution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ALLL">
                <div class="row">
                    <div class="col-md-6">
                        <h1>BE Active Max</h1>
                        <p>This solution is suitable for small homes that require a bit more power and more back up time.</p>
                        <p>Mini Flat, 2 Bedroom Apartment, BQ, Micro business</p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/3_vogklg.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal4" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Residential Solution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ALLL">
                <div class="row">
                    <div class="col-md-6">
                        <h1>BE Smart</h1>
                        <p>This solution is suitable for mid sized homes and small businesses</p>
                        <p>3 Bedroom Apartment, 4 Bedroom bungalow, Small Office, etc</p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/4_wyauvt.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal5" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Residential Solution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ALLL">
                <div class="row">
                    <div class="col-md-6">
                        <h1>BE Smart Plus</h1>
                        <p>This solution is suitable for mid sized homes and Small businesses that require more back up power.</p>
                        <p>3 Bedroom Apartment, 4 Bedroom bungalow, Office, Supermarket, etc</p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071922/5_q6sd4y.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal6" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Residential Solution</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ALLL">
                <div class="row">
                    <div class="col-md-6">
                        <h1>BE Smart Max</h1>
                        <p>This solution is suitable for mid sized homes and Small businesses that require more back up power.</p>
                        <p>3 Bedroom Apartment, 4 Bedroom bungalow, Office, Supermarket, etc</p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071922/6_lb2ddx.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal7" tabindex="-1" aria-hidden="true">
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
                        <p><strong>5 Bedroom bungalow, Duplex, Mid sized Office, Small Apartment Complex, Supermarket, etc</strong></p>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal1">Discover More</button>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071922/7_le3end.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal8" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Residential Solution</h5>
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
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071923/8_wtgmuy.png" class="w-100" draggable="false" alt="Product 2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
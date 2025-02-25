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
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/1_gxdhq8.png" class="d-block w-100" draggable="false" alt="Product 1" data-bs-toggle="modal" data-bs-target="#modal1" id="img1">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/2_ukuqyx.png" class="d-block w-100" draggable="false" alt="Product 2" data-bs-toggle="modal" data-bs-target="#modal2" id="img2">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/3_vogklg.png" class="d-block w-100" draggable="false" alt="Product 3" data-bs-toggle="modal" data-bs-target="#modal3" id="img3">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/4_wyauvt.png" class="d-block w-100" draggable="false" alt="Product 4" data-bs-toggle="modal" data-bs-target="#modal4" id="img4">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071922/5_q6sd4y.png" class="d-block w-100" draggable="false" alt="Product 5" data-bs-toggle="modal" data-bs-target="#modal5" id="img5">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071922/6_lb2ddx.png" class="d-block w-100" draggable="false" alt="Product 6" data-bs-toggle="modal" data-bs-target="#modal6" id="img6">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071922/7_le3end.png" class="d-block w-100" draggable="false" alt="Product 7" data-bs-toggle="modal" data-bs-target="#modal7" id="img7">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071923/8_wtgmuy.png" class="d-block w-100" draggable="false" alt="Product 8" data-bs-toggle="modal" data-bs-target="#modal8" id="img8">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071923/9_xneof7.png" class="d-block w-100" draggable="false" alt="Product 5" data-bs-toggle="modal" data-bs-target="#modal9" id="img9">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071948/10_myute7.png" class="d-block w-100" draggable="false" alt="Product 6" data-bs-toggle="modal" data-bs-target="#modal10" id="img10">
                        </div>
                        <div class="col-md-3">
                            <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071963/11_vtvexh.png" class="d-block w-100" draggable="false" alt="Product 7" data-bs-toggle="modal" data-bs-target="#modal11" id="img11">
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
<section class="Hello"></section>
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
                        <a href="{{route('residential')}}#communication-section"  class="btn btn-warning"
                            data-title="BE Active: 3KVA Home Solution"
                            data-description="The 3 kVA smart home solution is ideal for families living in small homes and apartments who are looking to enjoy reliable power supply while saving significant cost on electricity and on fuel consumption from generators."
                            data-img="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/1_gxdhq8.png"
                            data-id="solution1"
                            onclick="setModalData(this)">
                            Discover More
                        </a>
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
                        <a href="{{route('residential')}}#communication-section"  class="btn btn-warning"
                            data-title="BE Active Plus: 3.3KVA Home Solution"
                            data-description="The 3.3 kVA smart home solution is ideal for families living in small homes and apartments who are looking to enjoy reliable power supply while saving significant cost on electricity and on fuel consumption from generators.
This solution is suitable for small homes that require a bit more power and more back up time.
(Mini Flat, 2 Bedroom Apartment, BQ, Micro business)"
                            data-img="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1740071921/2_ukuqyx.png"
                            data-id="solution2"
                            onclick="setModalData(this)">
                            Discover More
                        </a>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Hover effect on carousel images
        $('.carousel-item img').hover(function() {
            var targetModal = $(this).data('bs-target'); // Get the target modal ID
            var modal = new bootstrap.Modal(document.querySelector(targetModal)); // Create a new modal instance
            modal.show(); // Show the modal
        }, function() {
            var targetModal = $(this).data('bs-target'); // Get the target modal ID
            var modal = bootstrap.Modal.getInstance(document.querySelector(targetModal)); // Get the existing modal instance
            if (modal) {
                modal.hide(); // Hide the modal when hover ends
            }
        });
    });
</script>
<script>
    function setModalData(button) {
        var title = button.getAttribute('data-title');
        var description = button.getAttribute('data-description');
        var img = button.getAttribute('data-img');

        // Store the data in the session or local storage
        sessionStorage.setItem('solutionTitle', title);
        sessionStorage.setItem('solutionDescription', description);
        sessionStorage.setItem('solutionImg', img);
    }
</script>
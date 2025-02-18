@extends('Layouts.connection')

@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737876649/Energy/Group_48097580_cxjw5j.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <h1>
                        Partners
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->

<div class="container partner-section">
    <p class="partner-title">PARTNERSHIPS</p>
    <h2 class="fw-bold">Our Industry Partners</h2>
    <p class="text-muted">
        Our partners are the backbone of our success. We collaborate with industry leaders, innovators,<br>
        and trusted organizations to deliver cutting-edge solar solutions.
    </p>

    <div class="row g-4 mt-4">
        <!-- Partner 1 -->
        <div class="col-md-3 col-6">
            <div class="partner-card">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873120_awpr8o.png" draggable="false" alt="Ktech" class="partner-logo">
            </div>
        </div>
        <!-- Partner 2 -->
        <div class="col-md-3 col-6">
            <div class="partner-card">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873121_kin44y.png" draggable="false" alt="Fox ESS" class="partner-logo">
            </div>
        </div>
        <!-- Partner 3 -->
        <div class="col-md-3 col-6">
            <div class="partner-card">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873122_qdx9ld.png" draggable="false" alt="Opticom Finance" class="partner-logo">
            </div>
        </div>
        <!-- Partner 4 -->
        <div class="col-md-3 col-6">
            <div class="partner-card">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873124_cspjhz.png" draggable="false" alt="Sunrise" class="partner-logo">
            </div>
        </div>
        <!-- Partner 5 -->
        <div class="col-md-3 col-6">
            <div class="partner-card">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243714/Frame_1618873123_1_pyntle.png" draggable="false" alt="Payhippo" class="partner-logo">
            </div>
        </div>
        <!-- Partner 6 -->
        <div class="col-md-3 col-6">
            <div class="partner-card">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243187/Frame_1618873125_ztb5j6.png" draggable="false" alt="Partner Logo" class="partner-logo">
            </div>
        </div>
        <!-- Partner 7 -->
        <div class="col-md-3 col-6">
            <div class="partner-card">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243191/Frame_1618873127_zpyf3i.png" draggable="false" alt="Green Energy" class="partner-logo">
            </div>
        </div>
        <!-- Partner 8 -->
        <div class="col-md-3 col-6">
            <div class="partner-card">
                <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243191/Frame_1618873126_yqnjfr.png" draggable="false" alt="Instollar" class="partner-logo">
            </div>
        </div>
    </div>
</div>
<section class="contact-section" style="background:#FEF9ED">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column -->
            <div class="col-lg-6 col-md-12">
                <div class="Txt">
                    <h6 style="color: #F8861A;">Collaborating for Greater Impact</h6>
                </div>
                <div style="background:#FEF9ED; color:black;">
                    <h2 class="">Strategic Partnerships</h2>
                    <p>As an organization we understand the philosophy of numbers.
                        That is, great things are not achieved alone, but as a team of like-minded entities with aligned values focused on achieving common mutual goals. </p>

                    <p>In furtherance of this and in the interest of our clients we have forged several strategic partnerships in the area of technology infrastructure as well as financing, for solar projects at different scale.  </p>
                    <p>We have also secured technical support partnerships for comprehensive after sales services where installation jobs are monitored and revisited periodically. </p>
                    <p>This is a commitment to the total satisfaction of our customers, as we are not just in business to provide power but also to serve as partners in progress to our clients, helping businesses and households thrive in a challenging economy.</p>
                    <p>
                        Baltai Energy are the proud, exclusive partners of FOX ESS in Nigeria, a leading manufacturer of TIER-1 OEM Solar Equipment on the global stage. We are also proud partners with KTECH ENERGY LTD, another formidable manufacturer of TIER-1 Equipment across Europe, Asia and now Africa.
                    </p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-6 col-md-12 mt-4 mt-lg-0">
                <form class="Just" style="background: #fff; border-radius:5px; padding:20px 30px 70px 30px;">
                <h6 style="color: #F8861A;"  class="text-center"> JOIN US</h6>
                    <h2 class="text-black mb-4 text-center">Become a Partner</h2>
                    <div class="mb-4">
                        <label for="fullName" class="form-label mb-3">Full Name</label>
                        <input type="text" class="form-control" id="fullName" placeholder="Your full name" required>
                    </div>
                    <div class="mb-4">
                        <label for="emailAddress" class="form-label mb-3">Email Address</label>
                        <input type="email" class="form-control" id="emailAddress" placeholder="Your email address" required>
                    </div>
                    <div class="mb-4">
                        <label for="phoneNumber" class="form-label mb-3">Type of Partner</label>
                        <input type="text" class="form-control" id="phoneNumber" placeholder="Type of Partner" required>
                    </div>
                    <div class="mb-4">
                        <label for="phoneNumber" class="form-label mb-3">Phone Number (Optional)</label>
                        <input type="tel" class="form-control" id="phoneNumber" placeholder="Phone Number (Optional)" required>
                    </div>
                    <div class="mb-4">
                        <label for="message" class="form-label mb-3">Additional Information (Optional)</label>
                        <textarea class="form-control" id="message" cols="30" rows="5" placeholder="Write your message here" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-submit mb-4 " style="width: 100%;" required>Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
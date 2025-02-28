@extends('Layouts.connection')

@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrum">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <h1>
                        About Us
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<!-- Benefit -->
<section class="Benefit Pushing">
    <div class="container">
        <div class="grid-container">
            <div class="card" data-aos="flip-left" style="background: linear-gradient(to top, #F8861A 0%, #FEC31C 100%); color:#fff;">
                <div class="">
                    <div class="iconing">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737370853/Energy/Group_48097669_wa4p7l.png" alt="Reliability iconing">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">Together</h5>
                    <p>
                        We can redefine power utility in Nigeria and change the status quote
                    </p>
                </div>
            </div>
            <div class="card" data-aos="flip-up">
                <div class="">
                    <div class="iconing">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737370852/Energy/Group_48097670_gqdt7o.png" alt="Cost Savings iconing">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">Everyone</h5>
                    <p>
                        is a stakeholder, individuals and business alike striving for a better economic future
                    </p>
                </div>
            </div>
            <div class="card" data-aos="flip-down">
                <div class="">
                    <div class="iconing">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737370853/Energy/Group_48097671_byicev.png" alt="Sustainability iconing">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">Achieving</h5>
                    <p>
                        24-Hours power supply is not a luxury but a daily necessity for individuals
                    </p>
                </div>
            </div>
            <div class="card" data-aos="flip-right">
                <div class="">
                    <div class="iconing">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737370853/Energy/Group_48097672_k88q7q.png" alt="Easy Process iconing">
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">More</h5>
                    <p>
                        More capacity can be built, with a stable power-economy expanding our in-roads to a brighter future. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Just -->
<section class="Just">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="Txt">
                    <div class="highlight mb-3" data-aos="fade-right">International team, Exclusive partnerships</div>
                </div>
            </div>
            <div class="col-lg-6"></div>
            <div class="col-lg-12">
                <h5 class="Justing fw-bold mt-2" data-aos="fade-left">Hi, We’re Baltai Energy.</h5>

                <p data-aos="fade-up">
                    We are Solar Systems Solutions Provider based in Lagos, Nigeria; with an international team and exclusive partnerships with top European and Asian Engineering OEMs. We provide  Off-grid and On-grid solutions that cover every capacity or scale: from residential, to commercial, to industrial projects. With a commitment to quality and service delivery, we strive to provide solutions based services that are tailored to the specific needs of our clients. Our equipment are designed and manufactured with cutting edge solar technology and innovative features that not only solve energy problems but also provide great experiences that elevate the utility for every use case.
                </p>
            </div>
        </div>
</section>
<!-- Just Ends -->

<!-- Story -->
<section class="Story">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="Emmet" data-aos="zoom-in" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <h5 class="fw-bold mb-4">Our Story</h5>
                    <p class="mb-4">
                        Baltai Energy was born out of the need to make reliable power an accessible daily necessity rather than a remote luxury, because we believe in a future where energy is clean, affordable, and accessible to all Nigerians. 
                    </p>
                    <p class="mb-4">
                        Having lived through decades of frustration from the days of ECN, to NEPA, to PHCN with little in the way of progress, while in the mist of an exploding population, we realised the immense potential Solar Energy and we’re Inspired to embark on the simple mission to harness the abundant power of the sun in order to transform Nigeria's energy landscape.
                    </p>
                    <p class="mb-4 float-end">
                        <a href="{{route('contact')}}" style="color:#fff; text-underline:none;"> Contact Us <i class="fas fa-phone"></i></a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="Emmeting">
                    <h5 class="fw-bold mb-4">Certifications and Ratings</h5>
                    <p class="mb-4">
                        We have met all regulatory requirements of operation,<br> and our products have achieved standard product certifications.<br> Our aim is to serve respectfully and responsibly while solving <br> everyday power problems.
                    </p>
                    <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737618847/Energy/Group_48097671_xfpt9s.png" draggable="false" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Story Ends -->

<!-- Vision and Mission Section -->
<div class="hero-section">
    <h2 class="text-center">Organizational Goals</h2>
    <p class="text-center">Strategic objectives guiding our growth journey.</p>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="quote-card" data-aos="fade-right"
                    data-aos-offset="300"
                    data-aos-easing="ease-in-sine">
                    <h5>Our Vision</h5>
                    <p>To be Nigeria's foremost provider of innovative, affordable, and reliable solar energy solutions, empowering communities and driving sustainable development.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="quote-card" data-aos="fade-left"
                    data-aos-anchor="#example-anchor"
                    data-aos-offset="500"
                    data-aos-duration="500">
                    <h5>Our Mission</h5>
                    <p>To accelerate Nigeria's transition to renewable energy by delivering innovative and accessible solar solutions that empower communities, strengthen energy independence, and enhance the nation's power infrastructure for a brighter, sustainable future.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials Section -->
<section class="Testimonials">
    <div class="container my-5">
        <h5 class="text-success">Testimonials</h5>
        <h3 class=" mb-5">What Our Customers Say?</h3>
        <div id="testimonialCarousel" class="carousel slide mt-4" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <!-- First Slide -->
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="mb-4">
                                    <span class="text-success">★★★★★</span>
                                </div>
                                <p>Switching to Baltai Energy’s 5KVA Solar solution was the best decision we made for our home. Not only have we seen a significant reduction in our electricity bills but we also feel good knowing we are contributing to a cleaner environment. Highly recommend</p>
                                <p class="fw-medium">Mr & Mrs Marvelous E.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="mb-4">
                                    <span class="text-success">★★★★★</span>
                                </div>
                                <p>A friend of mine introduced me to Baltai Energy. From the initial consultation to the final installation, the process was seamless. My house is now powered with 24 hours electricity. The team’s expertise is truly commendable. Glad I took the opportunity... Next installment will be at my office.</p>
                                <p class="fw-medium">Alhaji Idris M.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="mb-4">
                                    <span class="text-success">★★★★★</span>
                                </div>
                                <p>Baltai Energy’s solar solution is more than just installing solar, It’s giving you value for your money. Our electricity bills have reduced immensely, and we enjoy 24 hours electricity.
                                    The quality of the solar panels and solar inverters are top-notch. Definiely worth every penny!</p>
                                <p class="fw-medium">Mrs Chinenye M.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Slide -->
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="mb-3">
                                    <span class="text-success">★★★★★</span>
                                </div>
                                <p>We are thrilled with our decision to go solar with Baltai Energy. Installing the 30KVA solutions was a wise decision as we love knowing that we are reducing our carbon footprint. The installation process was smooth, and we highly recommend Baltai Energy to anyone looking to switch to solar power!</p>
                                <p class="fw-medium">TRU Media</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="mb-3">
                                    <span class="text-success">★★★★★</span>
                                </div>
                                <p>After installing 10KVA solar solutions at our office, we’ve seen remarkable difference in our energy consumption. Our employees are thrilled to be working in a more eco friendly environment. Thank you Baltai Energy!</p>
                                <p class="fw-medium">Big Ben Furniture</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="testimonial-card">
                                <div class="mb-3">
                                    <span class="text-success">★★★★★</span>
                                </div>
                                <p>I can’t say enough good things anout Baltai Energy. Their team was professional, and the quality of their solar panels are solid. With the 30KVA solutions, I no longer worry about diesel not being enough during productions1</p>
                                <p class="fw-medium">Chief Akinmuyiwa B.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carousel Controls -->
            <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="trustpilot">
            <span class="text-success mb-5">★★★★★</span>
            <p>4.7 out of 5 stars based on 3, 562 reviews | showing our 4 and 5 star reviews</p>
        </div>
    </div>
</section>
<!-- Trusted Partners Section -->
<section class="trusted-partners">
    <div class="container">
        <div class="row">
            <h2 class="text-left">Partnerships</h2>
            <div class="logo-slider">
                <div class="logo-set">
                    <div class="logo-set">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873120_awpr8o.png" class="d-block" alt="Partner 1">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873121_kin44y.png" class="d-block" alt="Partner 2">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873122_qdx9ld.png" class="d-block" alt="Partner 3">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873124_cspjhz.png" class="d-block" alt="Partner 4">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243714/Frame_1618873123_1_pyntle.png" class="d-block" alt="Partner 4">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243191/Frame_1618873127_zpyf3i.png" class="d-block" alt="Partner 4">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873121_kin44y.png" class="d-block" alt="Partner 2">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873122_qdx9ld.png" class="d-block" alt="Partner 3">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243186/Frame_1618873124_cspjhz.png" class="d-block" alt="Partner 4">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243714/Frame_1618873123_1_pyntle.png" class="d-block" alt="Partner 4">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1738243191/Frame_1618873127_zpyf3i.png" class="d-block" alt="Partner 4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Join Us Section -->
<div class="join-us-section">
    <h4 class="join-us-title mb-5">Join Us</h4>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="text mb-4" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Investor
                </div>
            </div>
            <div class="col-lg-4">
                <div class="text mb-4" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                    OEM
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="text" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                    Solar Financier
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Vertically centered modal -->

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Investor Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="contact-form" onsubmit="sendEmail(event)">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-4 mt-2">
                                <label for="fuel-cost" class="form-label text-black">Full Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="name" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Email Address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter email address" id="email" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Phone Number</label>
                                <div class="input-group">
                                    <input type="tel" id="phone" class="form-control" placeholder="Enter phone number" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Message</label>
                                <div class="input-group">
                                    <textarea name="" id="message" cols="30" placeholder="Write your message here" rows="10" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submitBtn" class="btn btn-warning text-white">Submit</button>
                    <div id="loader" class="loader"></div>
                </div>
                <!-- Success Message -->
                <div id="successMessage" class="success-message">
                    ✅ Your message has been sent successfully!
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">OEM Form</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="contact-form" onsubmit="sendEmail(event)">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-4 mt-2">
                                <label for="fuel-cost" class="form-label text-black">Full Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="name" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Email Address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter email address" id="email" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Phone Number</label>
                                <div class="input-group">
                                    <input type="tel" id="phone" class="form-control" placeholder="Enter phone number" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Message</label>
                                <div class="input-group">
                                    <textarea name="" id="message" cols="30" placeholder="Write your message here" rows="10" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submitBtn" class="btn btn-warning text-white">Submit</button>
                    <div id="loader" class="loader"></div>
                </div>
                <!-- Success Message -->
                <div id="successMessage" class="success-message">
                    ✅ Your message has been sent successfully!
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Solar Financier</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="contact-form" onsubmit="sendEmail(event)">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-4 mt-2">
                                <label for="fuel-cost" class="form-label text-black">Full Name</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Your Name" id="name" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Email Address</label>
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter email address" id="email" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Phone Number</label>
                                <div class="input-group">
                                    <input type="tel" id="phone" class="form-control" placeholder="Enter phone number" required />
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <label for="fuel-cost" class="form-label text-black">Message</label>
                                <div class="input-group">
                                    <textarea name="" id="message" cols="30" placeholder="Write your message here" rows="10" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" id="submitBtn" class="btn btn-warning text-white">Submit</button>
                    <div id="loader" class="loader"></div>
                </div>
                <!-- Success Message -->
                <div id="successMessage" class="success-message">
                    ✅ Your message has been sent successfully!
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script>
    (function() {
        emailjs.init("7OTHPg9Z5xMdEA6I0"); // Initialize EmailJS
    })();

    function sendEmail(event) {
        event.preventDefault(); // Prevent default form submission

        // Show loader & disable submit button
        document.getElementById("submitBtn").style.display = "none";
        document.getElementById("loader").style.display = "inline-block";

        let formData = {
            name: document.getElementById("name").value,
            email: document.getElementById("email").value,
            phone: document.getElementById("phone").value,
            message: document.getElementById("message").value
        };

        emailjs.send("service_gofp5t1", "template_35xrlfe", formData)
            .then(response => {
                showSuccessMessage();
                document.getElementById("contact-form").reset(); // Reset form
            })
            .catch(error => {
                alert("Failed to send message.");
                console.error("Email sending failed:", error);
            })
            .finally(() => {
                // Hide loader & show submit button again
                document.getElementById("loader").style.display = "none";
                document.getElementById("submitBtn").style.display = "inline-block";
            });
    }

    function showSuccessMessage() {
        document.getElementById("successMessage").style.display = "block";
        setTimeout(() => {
            document.getElementById("successMessage").style.display = "none";
        }, 4000);
    }
</script>
@endsection
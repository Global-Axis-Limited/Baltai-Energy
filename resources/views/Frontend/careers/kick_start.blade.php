@extends('Layouts.connection')

@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/diqa0sakr/image/upload/v1743745641/Group-4809753727_rcs9hr.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <h4>Baltai Energy</h4>
                    <h1>
                        Kick Start Your Career
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<section class="contact-section" style="background:#FEF9ED">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12 col-md-12 mt-lg-0">
                <form class="Just" id="careerForm" style="background: #fff; border-radius:5px; padding:20px 30px 70px 30px;" action="submit.php" method="POST" enctype="multipart/form-data">
                    <h6 style="color: #F8861A;" class="text-center">JOIN OUR TEAM</h6>
                    <h2 class="text-black mb-4 text-center">Kick Start Your Application</h2>
                    <div class="row">
                        <!-- Column 1 -->
                        <div class="col-md-6 mb-4">
                            <label for="fullName" class="form-label mb-3">Full Name*</label>
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Your full name" required>
                        </div>

                        <!-- Column 2 -->
                        <div class="col-md-6 mb-4">
                            <label for="email" class="form-label mb-3">Email Address*</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your email address" required>
                        </div>

                        <!-- Column 3 -->
                        <div class="col-md-6 mb-4">
                            <label for="phone" class="form-label mb-3">Phone Number*</label>
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Your phone number" required>
                        </div>

                        <!-- Column 4 -->
                        <div class="col-md-6 mb-4">
                            <label for="state" class="form-label mb-3">State of Residence*</label>
                            <select class="form-control" id="state" name="state" required>
                            <option value="">Select your state</option>
                            <option value="Abia">Abia</option>
                            <option value="Adamawa">Adamawa</option>
                            <option value="Akwa Ibom">Akwa Ibom</option>
                            <option value="Anambra">Anambra</option>
                            <option value="Bauchi">Bauchi</option>
                            <option value="Bayelsa">Bayelsa</option>
                            <option value="Benue">Benue</option>
                            <option value="Borno">Borno</option>
                            <option value="Cross River">Cross River</option>
                            <option value="Delta">Delta</option>
                            <option value="Ebonyi">Ebonyi</option>
                            <option value="Edo">Edo</option>
                            <option value="Ekiti">Ekiti</option>
                            <option value="Enugu">Enugu</option>
                            <option value="FCT">Federal Capital Territory</option>
                            <option value="Gombe">Gombe</option>
                            <option value="Imo">Imo</option>
                            <option value="Jigawa">Jigawa</option>
                            <option value="Kaduna">Kaduna</option>
                            <option value="Kano">Kano</option>
                            <option value="Katsina">Katsina</option>
                            <option value="Kebbi">Kebbi</option>
                            <option value="Kogi">Kogi</option>
                            <option value="Kwara">Kwara</option>
                            <option value="Lagos">Lagos</option>
                            <option value="Nasarawa">Nasarawa</option>
                            <option value="Niger">Niger</option>
                            <option value="Ogun">Ogun</option>
                            <option value="Ondo">Ondo</option>
                            <option value="Osun">Osun</option>
                            <option value="Oyo">Oyo</option>
                            <option value="Plateau">Plateau</option>
                            <option value="Rivers">Rivers</option>
                            <option value="Sokoto">Sokoto</option>
                            <option value="Taraba">Taraba</option>
                            <option value="Yobe">Yobe</option>
                            <option value="Zamfara">Zamfara</option>
                        </select>
                        </div>

                        <!-- Column 5 -->
                        <div class="col-md-6 mb-4">
                            <label for="role" class="form-label mb-3">Role You Are Applying For*</label>
                            <select class="form-control" id="role" name="role" required>
                            <option value="">Select desired role</option>
                            <option value="Software Developer">Software Developer</option>
                            <option value="UX Designer">UX Designer</option>
                            <option value="Project Manager">Project Manager</option>
                            <option value="Marketing Specialist">Marketing Specialist</option>
                            <option value="Data Analyst">Data Analyst</option>
                            <option value="Sales Representative">Sales Representative</option>
                            <option value="Customer Support">Customer Support</option>
                            <option value="Other">Other</option>
                        </select>
                        </div>

                        <!-- Column 6 -->
                        <div class="col-md-6 mb-4">
                            <label for="experience" class="form-label mb-3">Years of Experience*</label>
                            <select class="form-control" id="experience" name="experience" required>
                                <option value="">Select experience level</option>
                                <option value="0-2">0-2 years</option>
                                <option value="3-5">3-5 years</option>
                                <option value="6-10">6-10 years</option>
                                <option value="10+">10+ years</option>
                            </select>
                        </div>
                    </div>

                    <!-- Full width elements -->
                    <div class="mb-4">
                        <label for="cv" class="form-label mb-3">Upload CV/Resume*</label>
                        <input type="file" class="form-control" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
                        <small class="text-muted">Accepted formats: PDF, DOC, DOCX (Max 5MB)</small>
                    </div>

                    <div class="mb-4">
                        <label for="coverLetter" class="form-label mb-3">Cover Letter (Optional)</label>
                        <textarea class="form-control" id="coverLetter" name="coverLetter" cols="30" rows="5" placeholder="Tell us why you'd be a great fit for this position"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="linkedin" class="form-label mb-3">LinkedIn Profile (Optional)</label>
                        <input type="url" class="form-control" id="linkedin" name="linkedin" placeholder="https://linkedin.com/in/yourprofile">
                    </div>

                    <div class="mb-4 form-check">
                        <input type="checkbox" class="form-check-input" id="consent" name="consent" required>
                        <label class="form-check-label" for="consent">I consent to the processing of my personal data for recruitment purposes*</label>
                    </div>
                    <div id="formFeedback" style="display: none; margin: 20px 0;"></div>

                    <button type="submit" class="btn btn-submit" id="submitBtn">
            <span id="submitText">Submit Application</span>
            <span id="submitSpinner" style="display: none;">
                <i class="fa fa-spinner fa-spin"></i> Processing...
            </span>
        </button>
                </form>
            </div>
           
        </div>
    </div>
</section>
<script>
    document.getElementById('careerForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const form = e.target;
    const formData = new FormData(form);
    const submitBtn = document.getElementById('submitBtn');
    const submitText = document.getElementById('submitText');
    const submitSpinner = document.getElementById('submitSpinner');
    const feedback = document.getElementById('formFeedback');
    
    // Show loading state
    submitText.style.display = 'none';
    submitSpinner.style.display = 'inline-block';
    submitBtn.disabled = true;
    feedback.style.display = 'none';
    
    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Show feedback
        feedback.style.display = 'block';
        feedback.innerHTML = data.message;
        feedback.className = data.success ? 'alert alert-success' : 'alert alert-danger';
        
        if (data.success) {
            form.reset();
        }
    })
    .catch(error => {
        feedback.style.display = 'block';
        feedback.className = 'alert alert-danger';
        feedback.innerHTML = 'Network error. Please try again.';
        console.error('Error:', error);
    })
    .finally(() => {
        // Reset button state
        submitText.style.display = 'inline-block';
        submitSpinner.style.display = 'none';
        submitBtn.disabled = false;
    });
});
</script>
@endsection
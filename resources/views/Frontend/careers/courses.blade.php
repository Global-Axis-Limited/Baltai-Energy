@extends('Layouts.connection')
@section('page-content')
<!-- Beadcrum -->
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737877658/Energy/Group_48097580_pohesc.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text">
                    <h4>Courses</h4>
                    <h1>
                        All Courses
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
<section class="Courses">
    <div class="container mt-4">

        <div class="d-flex justify-content-between align-items-center flex-wrap mb-5">
            <div class="categories">
                <h1 class="fw-medium">View modules</h2>

            </div>

            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Search" onkeyup="filterCourses()">
                <i class="fas fa-search search-icon"></i>
            </div>
        </div>

        <div class="row mt-4" id="coursesContainer">
            <!-- Course Cards -->
            <div class="col-md-3 mb-4 course-item">
                <a href="{{route('courses_details')}}">
                    <div class="card course-card">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285731/Energy/image_ipdrpv.jpg" class="card-img-top" alt="Working Better Together">
                        <div class="card-body">
                            <h5 class="card-title">Sales Techniques and Customer Acquisition</h5>
                            <p class="card-text">This course teaches BRMs a simple system to build trust and improve communication.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-4 course-item">
                <a href="{{route('courses_details')}}">
                    <div class="card course-card">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285728/Energy/image1_uu1dwu.jpg" class="card-img-top" alt="Data Privacy">
                        <div class="card-body">
                            <h5 class="card-title">Solar Products and Financing Options
                            </h5>
                            <p class="card-text">Learn how to protect customer data and maintain compliance.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-3 mb-4 course-item">
                <a href="{{route('courses_details')}}">
                    <div class="card course-card">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285723/Energy/image2_hkepaj.jpg" class="card-img-top" alt="Fintech Solutions">
                        <div class="card-body">
                            <h5 class="card-title">Customer Relationship Management
                            </h5>
                            <p class="card-text">Help customers understand and use fintech solutions effectively.</p>
                        </div>
                    </div>
                </a>
            </div>


            <div class="col-md-3 mb-4 course-item">
                <a href="{{route('courses_details')}}">
                    <div class="card course-card">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285723/Energy/image2_hkepaj.jpg" class="card-img-top" alt="Cash Out Limit">
                        <div class="card-body">
                            <h5 class="card-title">Soft Skills and Personal Development
                            </h5>
                            <p class="card-text">Understand cash-out limits and regulations for agency banking.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-4 course-item">
                <a href="{{route('courses_details')}}">
                    <div class="card course-card">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285731/Energy/image_ipdrpv.jpg" class="card-img-top" alt="Communication">
                        <div class="card-body">
                            <h5 class="card-title">Compliance and Ethical Standards
                            </h5>
                            <p class="card-text">Learn how to communicate effectively in a multicultural environment.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-4 course-item">
                <a href="{{route('courses_details')}}">
                    <div class="card course-card">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285731/Energy/image_ipdrpv.jpg" class="card-img-top" alt="Cash Out Limit">
                        <div class="card-body">
                            <h5 class="card-title">Digital Tools and Technology</h5>
                            <p class="card-text">Understand cash-out limits and regulations for agency banking.</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-4 mb-4 course-item">
                <a href="{{route('courses_details')}}">
                    <div class="card course-card">
                        <img src="https://res.cloudinary.com/ddj0k8gdw/image/upload/v1737285723/Energy/image2_hkepaj.jpg" class="card-img-top" alt="Consumer Protection">
                        <div class="card-body">
                            <h5 class="card-title">Technical Knowledge for SRMs
                            </h5>
                            <p class="card-text">Understand consumer protection regulations and policies.</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>
@endsection

<script>
    function filterCourses() {
        let input = document.getElementById("searchInput").value.toLowerCase();
        let courses = document.querySelectorAll(".course-item");

        courses.forEach(course => {
            let title = course.querySelector(".card-title").innerText.toLowerCase();
            let description = course.querySelector(".card-text").innerText.toLowerCase();

            if (title.includes(input) || description.includes(input)) {
                course.style.display = "block";
            } else {
                course.style.display = "none";
            }
        });
    }
</script>
@extends('Layouts.connection')
@section('page-content')
<section class="Beadcrum" style=" background-image: url(https://res.cloudinary.com/diqa0sakr/image/upload/v1745724743/Grou_1_gi0qqc.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="texting">
                    <h2>Time Management and Goal Setting</h2>
                    <p>
                        <a href="{{route('index')}}">Home</a> / <a href="{{route('baltai')}}">Baltai Learning</a> / Time Management and Goal Setting / <a href="#">What You’ll Learn</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Beadcrum Ends -->
</section>
<section class="Alling">
    <div class="container">
        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8 mb-4">
                <p class="mb-1" style="color: #052B5E;">Overview</p>
                <div class="line mb-3"></div>
                <h3 class="">Module Objective:</h3>
                <p>Equip SRMs with strategies to manage their time efficiently, prioritize tasks, and set achievable goals to maximize productivity in sales and customer engagement.</p>

                <h3 class="mt-5">Course Contents</h3>
                <div class="table-responsive mt-4">
                    <table class="table table-bordered align-middle">
                        <thead>
                            <tr>
                                <th class="">Learn More with Baltai Energy</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="#" class="course-link">
                                        <i class="bi bi-play-circle"></i> 1. The Importance of Time Management
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="course-link">
                                        <i class="bi bi-play-circle"></i> 2. Time Management Techniques
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="course-link">
                                        <i class="bi bi-play-circle"></i> 3. Goal Setting for Sales Success
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar-card">
                    <h5>Kickstart your journey<br>with Baltai Energy</h5>
                </div>
                <div class="sidebar-card">
                    <a href="https://soft-skills-and-personal-development.zoholearn.com" target="_blank">
                        <button class="btn btn-enroll mt-3">ENROLL NOW</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JobHunter</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.12.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        {{-- <img src="assets/img/logo.png" alt=""> --}}
        <span>JobHunter</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li class="dropdown"><a href="#"><span>{{auth()->user()->name}}</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#" class="text-danger">Logout</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Find your Dream Job at JobHunter!</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">All of the job posted around the world are posted in here</h2>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start">
              <a href="#job" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Get Started</span>
                <i class="bi bi-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{asset('assets/images/job-hunter.svg')}}" class="img-fluid" alt="" width="400px">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <section id="job" class="about">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

      <div class="container" data-aos="fade-up">
        <div class="row gx-0">

          <div class="col-lg-12 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
            <div class="content">
              <h2>Find Your Job!</h2>
              <p>
                Quisquam vel ut sint cum eos hic dolores aperiam. Sed deserunt et. Inventore et et dolor consequatur itaque ut voluptate sed et. Magnam nam ipsum tenetur suscipit voluptatum nam et est corrupti.
              </p>

              <div class="row">
                <div class="input-group mb-3 col-4">
                    <input type="text" class="form-control col-md-2 m-1" placeholder="Java / Ruby" aria-label="description" name="description" aria-describedby="basic-addon1" onchange="filterJobs()" id="filter-description">
                    <input type="text" class="form-control col-md-2 m-1" placeholder="City Name / Zip Code" aria-label="Location" aria-describedby="basic-addon1" onchange="filterJobs()" id="filter-location">
                    <select class="form-control col-md-2 m-1" id="filter-type" onchange="filterJobs()" >
                        <option disabled value="" selected>Type</option>
                        <option value="full-time">Full Time</option>
                        <option value="part-time">Part Time</option>
                      </select>
                </div>
              </div>
              

              <div class="row" id="jobs">
                @foreach ($jobs as $inc => $job)
                    <div class="col-sm-6 mb-3">
                        <div class="card">
                        <div class="card-body">
                            <h2>{{ $job->title }}</h2>
                            <h6 class="card-title">{{ $job->company }}</h6>
                            <h6 class="card-title">{{ $job->location }} - {{ $job->type }}</h6>
                            {{-- <p class="card-text">{{ substr($myStr, 0, 5)}}</p> --}}
                            <a href="#" class="btn btn-primary btn-sm"> Details </a>
                        </div>
                        </div>
                    </div>
                @endforeach
              </div>
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                  <li class="page-item">
                    <a class="page-link" onclick="previous()" href="#job">Previous</a>
                  </li>
                  @for ($i = 1; $i <= $total_page; $i++)
                    <li class="page-item"><a class="page-link" href="#job" onclick="page({{$i}})">{{$i}}</a></li>
                  @endfor
                  <li class="page-item">
                    <a class="page-link" onclick="next()" href="#job">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End About Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    var thisPage = 1;
    var desc     = "";
    var locations = "";
    var type = "";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function next(){
        thisPage++;
        getJobs();
    }

    function previous(){
        thisPage--;
        getJobs();
    }

    function page(pageNumber){
        thisPage = pageNumber;
        getJobs();
    }

    function filterJobs(){
        desc        = document.getElementById("filter-description").value;
        locations    = document.getElementById("filter-location").value;
        type        = document.getElementById("filter-type").value;
        getJobs();
    }

    function getJobs() {
        if (thisPage < 1){
            thisPage = 1;
        }

        if (thisPage > {{ $total_page }}) {
            thisPage = {{ $total_page }};
        }
        $.ajax({
            type: 'POST',
            url: "{{ route('ajaxGetJobs') }}",
            data:{
                    page_no : thisPage,
                    description : desc,
                    location : locations,
                    type : type
            },
            success: function(data) {
                $('#jobs').html(data);
            },
        });
    }
  </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg">

<title>Music Events </title>

<link rel="shortcut icon" href="{{ asset('layout/assets/images/favicon.svg') }}" type="image/svg">

<link rel="stylesheet" href="{{ asset('layout/assets/css/bootstrap.min.css') }}">

<link rel="stylesheet" href="{{ asset('layout/assets/css/lineicons.css') }}">

<link rel="stylesheet" href="{{ asset('layout/assets/css/tiny-slider.css') }}">

<link rel="stylesheet" href="{{ asset('layout/assets/css/glightbox.min.css') }}">
<link rel="stylesheet" href="{{ asset('layout/style.css') }}">
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
</head>
<body>

<section class="navbar-area navbar-nine">
<div class="container">
<div class="row">
<div class="col-lg-12">
<nav class="navbar navbar-expand-lg">
<a class="navbar-brand" href="">
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNine" aria-controls="navbarNine" aria-expanded="false" aria-label="Toggle navigation">
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
<span class="toggler-icon"></span>
</button>
</nav>

</div>
</div>

</div>

</section>


<div class="overlay-left"></div>


<section id="hero-area" class="header-area header-eight">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6 col-md-12 col-12">
<div class="header-content">
<h1>Music Events.</h1>
<p>
We are a digital platform that helps you to find your
favourite music events..
</p>
<div class="button">
<a href="#testimonial" class="btn primary-btn">Check Events</a>

</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-12">
<div class="header-image">
<img src="{{ asset('assets/img/backgrounds/bg2.jpg') }}" alt="#">
</div>
</div>
</div>
</div>
</section>


<section class="about-area about-five">
<div class="container">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('assets/img/backgrounds/img5.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Music Concert</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/backgrounds/img6.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>EDM</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/backgrounds/img7.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Broadway Opera</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('assets/img/backgrounds/img8.jpg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>NMAAC CLASSICAL </h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

</section>
<section id="testimonial" class="testimonial-5">

<div class="section-title-five">
<div class="container">
<div class="row">
<div class="col-12">
<div class="content">
<h2 class="fw-bold">Our Events</h2>
</div>
</div>
</div>

</div>

</div>

<div class="container">
<div class="row testimonial-slider">
<div class="table-responsive">
            <table class="table-striped table-hover table-bordered table-compact" id="myTable" name="myTable">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Event Name</th>
                        <th>Genre</th>
                        <th>Amount</th>
                        <th>Date</th>
                        <th>Artist</th>
                        <th>Venue</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                    <tr>
                        <td>{{ $event->id  }}</td>
                        <td>{{ $event->name }}</td>
                        <td>{{ $event->genre->genre }}</td>
                        <td>{{ $event->amount }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->artist->name  }}</td>
                        <td>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Venue Details
                                </button>
                                <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Venue</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Modal content goes here -->
                                            <p>{{ $event->venue->name . ' , ' . $event->venue->address . ' , ' . $event->venue->mobile}}</</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                        <td>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
                                    Description
                                </button>
                                <div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Description</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- Modal content goes here -->
                                            <p>{{ $event->description}}</</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                            
                                        </div>
                                        </div>
                                    </div>
                                </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>
</div>
</div>
</section>
<a href="#" class="scroll-top btn-hover">
<i class="lni lni-chevron-up"></i>
</a>

<script data-cfasync="false" src="{{ asset('layout/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}"></script><script src="{{ asset('layout/assets/js/bootstrap.bundle.min.js') }}" type="945a4832cec94bdb0bca4318-text/javascript"></script>
<script src="{{ asset('layout/assets/js/glightbox.min.js') }}" type="945a4832cec94bdb0bca4318-text/javascript"></script>
<script src="{{ asset('layout/assets/js/main.js') }}" type="945a4832cec94bdb0bca4318-text/javascript"></script>
<script src="{{ asset('layout/assets/js/tiny-slider.js') }}" type="945a4832cec94bdb0bca4318-text/javascript"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
     <script>
        
      $(document).ready( function () {
        $('#myTable').DataTable();
      } );
     </script>
<script type="945a4832cec94bdb0bca4318-text/javascript">

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });

    //========= glightbox
    GLightbox({
      'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
      'type': 'video',
      'source': 'youtube', //vimeo, youtube or local
      'width': 900,
      'autoplayVideos': true,
    });

    //============== isotope masonry portfolio-three
    const filters = document.querySelectorAll(".portfolio-menu button");

    filters.forEach((filter) => {
      filter.addEventListener("click", function () {
        // ==== Filter btn toggle
        let filterBtn = filters[0];
        while (filterBtn) {
          if (filterBtn.tagName === "BUTTON") {
            filterBtn.classList.remove("active");
          }
          filterBtn = filterBtn.nextSibling;
        }
        this.classList.add("active");

        // === filter
        let selectedFilter = filter.getAttribute("data-filter");
        let itemsToHide = document.querySelectorAll(
          `.grid .col-lg-4:not([data-filter='${selectedFilter}'])`
        );
        let itemsToShow = document.querySelectorAll(
          `.grid [data-filter='${selectedFilter}']`
        );

        if (selectedFilter == "all") {
          itemsToHide = [];
          itemsToShow = document.querySelectorAll(".grid [data-filter]");
        }

        itemsToHide.forEach((el) => {
          el.classList.add("hide");
          el.classList.remove("show");
        });

        itemsToShow.forEach((el) => {
          el.classList.remove("hide");
          el.classList.add("show");
        });
      });
    });

    //========= glightbox
    const myGallery3 = GLightbox({
      selector: ".glightbox3",
      type: "image",
      width: 900,
    });

    //========= testimonial
    tns({
      container: ".testimonial-slider",
      items: 3,
      autoplay: true,
      autoplayButtonOutput: false,
      mouseDrag: true,
      gutter: 0,
      nav: true,
      controls: false,
      controlsText: [
        '<i class="lni lni-arrow-left"></i>',
        '<i class="lni lni-arrow-right"></i>',
      ],
      responsive: {
        0: {
          items: 1,
        },
        1170: {
          items: 2,
        },
      },
    });

  </script>
<script src="{{ asset('layout/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}" data-cf-settings="945a4832cec94bdb0bca4318-|49" defer=""></script></body>
</html>
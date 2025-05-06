<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>CTAA</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600&family=Roboto&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

           <!-- Topbar Start -->
           <div class="container-fluid bg-primary px-5 d-none d-lg-block">
            <div class="row gx-0 justify-content-end">
                <div class="col-lg-8 text-center text-lg-end mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center justify-content-end" style="height: 45px;">
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://twitter.com/ctgroupshahpur?lang=en"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.facebook.com/ctgroup.jalandhar/"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://in.linkedin.com/company/ct-group-of-institutions"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="https://www.instagram.com/accounts/login/?next=%2Fctgroupofinstitutions%2F"><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="https://www.youtube.com/channel/UCbnz-xueiXi4ksPb_Gbn3xg?view_as=subscriber"><i class="fab fa-youtube fw-normal"></i></a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                <h1 class="m-0"><img src="images/logo/ALUMNI_LOGO (1).png" alt="Logo" style="max-height: 300px; max-width: 250px; object-fit: contain;"></h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                    
                        <a href="#about" class="nav-item nav-link"  onclick="scrollToSection('about')">About</a>
                        <a href="#campus_life" class="nav-item nav-link" onclick="scrollToSection('campus_life')">Campus Life</a>
                        <a href="#Awards & Achievements" class="nav-item nav-link" onclick="scrollToSection('Awards & Achievements')">Awards & Achievements</a>
                        <a href="#gallery" class="nav-item nav-link" onclick="scrollToSection('gallery')">Gallery</a>
                        <a href="#placements" class="nav-item nav-link" onclick="scrollToSection('placements')">Our Placements</a>
                        <a href="#campus_tour" class="nav-item nav-link" onclick="scrollToSection('campus_tour')">Campus Tour</a>
                       
                    </div>
                    <a href="https://enroll.ctgroup.in/" class="btn btn-primary rounded-pill py-2 px-4 ms-lg-4">Apply Now</a>
                </div>
            </nav>

            <!-- Carousel Start -->
            <div class="carousel-header">
                <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                       
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                        <img src="images/banner/banner_img.jpg" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                   
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                        <img src="images/banner/banner2.png" class="img-fluid" alt="Image">
                            <div class="carousel-caption">
                                <div class="p-3" style="max-width: 900px;">
                                    <h6 class="text-white text-uppercase fw-bold mb-4" style="letter-spacing: 3px;">"Connecting the Past, Building the Future."</h6>
                                    <h3 class="display-2 text-capitalize text-white mb-4  fs-2">Alumni are invited to contribute their experiences, knowledge, and resources to the community.</h3>
                                    <p class="mb-5 fs-5">
                                    </p>
                                  
                                </div>
                            </div>
                        </div>
                       
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                        <span class="carousel-control-next-icon btn bg-primary" aria-hidden="false"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <!-- Carousel End -->
        </div>
        
        <!-- Navbar & Hero End -->

<?php
include_once('admin/config/connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Jetoff Space</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/space.png" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rajdhani:wght@300&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top" style="background-color: transparent;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">

                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse" style="color: white;font-weight:700">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <a href="project.php" class="nav-item nav-link">Projects</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Gallery</a>
                            <div class="dropdown-menu bg-primary mt-2">
                                <a href="gallery.php" class="dropdown-item">Images</a>
                                <a href="videos.php" class="dropdown-item">Videos</a>
                                <!-- <a href="faq.php" class="dropdown-item">FAQs</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Page</a> -->
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->

    <div class="container-fluid pt-5 bg-primary hero-header mb-5" style="background-image: url(img/earthwp.jpg);">
        <div class="container pt-5">
            <div class="row g-5 pt-5 position-relative">

                <div class="content position-absolute top-50 start-0 translate-middle-y text-white text-left">
                    <h1 class="heading-main" style="color:#D1E9F6; font-family: 'Rajdhani', sans-serif;font-weight: 500!important;font-style: normal;font-size:10rem; ">Welcome to <br>Jetoff Space</h1>
                    <h2 class="heading-sub" style=" font-family: 'Rajdhani', sans-serif;font-weight: 300;font-style: normal;font-size:4rem;color:#BBE9FF">Your gateway to the cosmos.</h2>
                    <!-- <button class="btn btn-space"><a href="about.php" style="color: #fff;">Explore Now</a></button> -->
                    <!-- <img class="line" src="img/line.svg" alt="">  -->
                    <!-- <div class="section-banner1"></div> -->
                    <br><br>
                    <h4 style="color: white;font-family:sans-serif">Space is the next great frontier, and at Jetoff Space, we're dedicated to making it accessible to everyone.</h4>
                </div>

                <video autoplay muted loop id="bg-video">
                    <source src="img/ea" type="video/mp4" />
                </video>
            </div>
        </div>
    </div>

    <style>
        @media (max-width: 768px) {
            .heading-main {
                margin-top: 16rem !important;
                font-size: 3rem !important;
            }

            .heading-sub {
                font-size: 2rem !important;
            }

            .content {
                top: auto;
                left: 50%;
                transform: translateX(-50%);
                text-align: center;
            }

            #bg-video {
                margin-top: 20px !important;
                max-height: 50vh !important;
                display: none;
            }

            .line {
                width: fit-content;
            }
        }
    </style>



    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3" placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
    <!-- <section class="features-section text-center bg-primary py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="fa fa-rocket feature-icon"></i>
                        <h4>Advanced Technology</h4>
                        <p>Cutting-edge solutions driving aerospace innovation.</p>
                    </div>
                </div>
                <br>
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="fa fa-globe feature-icon"></i>
                        <h4>Global Impact</h4>
                        <p>Contributing to space exploration and environmental sustainability.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="fa fa-users feature-icon"></i>
                        <h4>Expert Team</h4>
                        <p>Collaborating with top-tier scientists and engineers.</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-box">
                        <i class="fa fa-lightbulb feature-icon"></i>
                        <h4>Innovative Solutions</h4>
                        <p>Developing groundbreaking technologies for future generations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .feature-box {
            height: 250px;
        }

        .features-section .feature-box {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            overflow: hidden;
            position: relative;
        }

        .features-section .feature-box:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }

        .features-section .feature-icon {
            font-size: 3rem;
            color: #3572EF;
            margin-bottom: 15px;
            transition: color 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .features-section .feature-box:hover .feature-icon {
            color: #1a1a1a;
            transform: rotate(360deg);
        }

        .features-section .feature-box h4 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            transition: color 0.3s ease-in-out;
        }

        .features-section .feature-box:hover h4 {
            color: #3572EF;
        }

        .features-section .feature-box p {
            font-size: 1rem;
            color: #555;
            transition: color 0.3s ease-in-out;
        }

        .features-section .feature-box:hover p {
            color: #1a1a1a;
        }

        .features-section .feature-box:before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(120deg, rgba(53, 114, 239, 0.5), rgba(26, 26, 26, 0.5));
            transition: all 0.3s ease-in-out;
            z-index: 0;
        }

        .features-section .feature-box:hover:before {
            left: 100%;
        }

        .features-section .feature-box>* {
            position: relative;
            z-index: 1;
        }
    </style> -->

    <!-- About Start -->
    <div class="container-fluid py-5 " style="background-color:black">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div>
                        <video autoplay muted loop id="bg-video" style="width: 100%;">
                            <source src="img/210886.mp4" type="video/mp4" />
                        </video>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="margin-top: 20px;">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3" style="font-size: 25px;font-weight:bold;text-align:justify">About Us</div>
                    <p class="mb-4" style="font-size: 25px;font-weight:bold; color:#fff;font-family: 'Rajdhani', sans-serif;">About <span style="color: #6EACDA;">Jetoff Space</span>, India's pioneering private space company committed to revolutionizing rocket propulsion technology. </p>
                    <p class="mb-4" style="text-align:justify;color:#fff;font-weight:600">At Jetoff Space, our mission is to transcend the limitations of current rocket technologies, offering state-of-the-art engines, comprehensive launch services, and pioneering rocket-based solutions. Our commitment to excellence and technological advancement fuels our ambition to push the boundaries of what is possible in space travel.</p>
                    <p class="mb-4" style="text-align:justify;color:#fff;font-weight:600">We are exceptionally proud to be the first private space company in India embarking on the development of the Rotating Detonation Rocket Engine (RDRE). This revolutionary engine represents a significant advancement in rocket propulsion, promising unprecedented power, efficiency, and reliability. Our team of top-tier scientists and engineers is devoted to creating rocket engines that not only meet but exceed global standards.</p>
                    <!-- <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3" style="color: #fff;"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                            <h6 class="mb-0" style="color: #fff;"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3" style="color: #fff;"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0" style="color: #fff;"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                        </div>
                    </div> -->
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>



    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid py-5" style="background-color: black;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-10 wow fadeIn" data-wow-delay="0.5s">
                    <!-- Carousel section -->
                    <div class="owl-carousel testimonial-carousel  border-dark">
                        <div class="testimonial-item1 d-flex">
                            <div class="image-col">
                                <img src="img/rdre1.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="content-col d-flex align-items-center ps-4">
                                <div>
                                    <h2 style="font-family: sans-serif;color:white;text-align:justify">SPACE STARTUP JETOFF SPACE ENGINE SUCCEEDS WITH UPPER-STAGE ENGIINE FIRE TEST</h2>

                                </div>
                            </div>
                        </div>
                        <!-- style="background-color: #1A4870;"?  -->
                        <div class="testimonial-item1 d-flex">
                            <div class="image-col">
                                <img src="img/rdre2.jpeg" alt="" class="img-fluid">
                            </div>
                            <div class="content-col d-flex align-items-center ps-4">
                                <div>
                                    <h2 style="font-family:  sans-serif;color:white;text-align:justify">SPACE STARTUP JETOFF SPACE ENGINE SUCCEEDS WITH UPPER-STAGE ENGIINE FIRE TEST</h2>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .testimonial-item1 {
            display: flex;
            align-items: center;
        }

        .image-col {
            flex: 4;
        }

        .content-col {
            flex: 1;
            display: flex;
            align-items: center;
        }

        .img-fluid {
            max-width: 100%;
            height: max-content;
        }
    </style>



    <script>
        $(document).ready(function() {
            // Initialize Owl Carousel
            var owl = $('.owl-carousel').owlCarousel({
                items: 1,
                loop: true,
                margin: 10,
                nav: true
            });

            // Event listener for carousel changes
            owl.on('changed.owl.carousel', function(event) {
                var currentItemIndex = event.item.index;
                var currentItemContent = $('.owl-item').eq(currentItemIndex).find('.testimonial-item1').data('content');
                $('#carousel-content').text(currentItemContent);
            });
        });
    </script>


    <!-- Service End -->


    <style>
        .space-ride {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px;
        }

        .space-ride-block {
            flex: 1;
            padding-right: 20px;
        }

        .rocket {
            flex: 1;
            text-align: right;
            position: relative;
        }

        .rocket img {
            max-width: 100%;
            height: auto;
            display: none;
        }

        .accordion-button {
            background-color: #333;
            color: #f1f1f1;
            border: none;
            font-weight: bold;
            padding: 15px;
            text-align: left;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        .accordion-button.collapsed {
            background-color: #444;
        }

        .accordion-item {
            border: none;
            margin-bottom: 10px;
        }

        .accordion-body {
            background-color: #222;
            padding: 20px;
        }

        .leo li {
            list-style-type: none;
            font-size: 1.1rem;
            margin: 10px 0;
        }

        .vikram-mb img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 20px;
        }

        .space-know {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .space-know:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container-fluid py-5" style="background-color: black;">
        <div class="container py-5">
            <div class="space-ride">
                <div class="space-ride-block">
                    <h2>our </h2>

                    <div class="accordion accordion-ride" id="accordionExample">
                        <div class="accordion-item" id="headingZero1">
                            <h2 class="accordion-header" id="headingZero">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseZero" aria-expanded="false" aria-controls="collapseZero">
                                    Project 1
                                </button>
                            </h2>
                            <div id="collapseZero" class="accordion-collapse collapse show" aria-labelledby="headingZero" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="leo">
                                        <li><b>80 kg to 100 km</b> Altitude</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="headingOne1">
                            <h2 class="accordion-header" id="headingOne1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Vikram I
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="leo">
                                        <li><b>480 kg to 500 km</b> Low Inclination Orbit</li>
                                        <li><b>290 kg to 500 km</b> SSPO</li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <div class="accordion-item" id="headingTwo1">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Vikram II
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="leo">
                                        <li><b>595 kg to 500 km</b> Low Inclination Orbit</li>
                                        <li><b>400 kg to 500 km</b> SSPO</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="launch-services.html" class="space-know">Know More</a>
                </div>

                <div class="rocket">
                    <img src="img/rocket-flying-through-space.png" alt="Vikrams" class="headingZeroImg" style="display: none;">
                    <img src="img/rocket.png" alt="Rocket with Boosters and Satellite in Cargo.I01 1" class="headingOneImg vikram1" style="display: none;">
                    <img src="img/spacerocket.png" alt="Vikram Series" class="headingTwoImg" style="display: inline;">
                    <img src="images/vikram3.png" alt="Vikram Series" class="headingThreeImg" style="display: none;">
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelectorAll('.accordion-button').forEach((button) => {
            // button.addEventListener('mouseover', function() {
            //     const imageClass = button.getAttribute('data-bs-target').replace('#collapse', '.heading');
            //     document.querySelectorAll('.rocket img').forEach((img) => img.style.display = 'none');
            //     document.querySelector(imageClass + 'Img').style.display = 'inline';
            // });

            button.addEventListener('click', function() {
                const imageClass = button.getAttribute('data-bs-target').replace('#collapse', '.heading');
                document.querySelectorAll('.rocket img').forEach((img) => img.style.display = 'none');
                document.querySelector(imageClass + 'Img').style.display = 'inline';
            });
        });
    </script>



    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5 bg-image">
        <div class="container pt-5">
            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Why Explore with Us</div>
                    <h1 class="text-white mb-4">Leading the Frontier of Space Exploration with 10 Years of Experience</h1>
                    <p class="text-light mb-4" style=" font-weight:bold;text-align:justify">Jetoff Space is at the forefront of aerospace innovation, empowering the future of space exploration with unmatched technological prowess.
                        Our groundbreaking work on the RDRE is a testament to our dedication to excellence and our unwavering commitment to advancing the frontiers of space travel.</p>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Exploring the Mysteries of the Cosmos</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Innovative Space Technologies and Solutions</span>
                    </div>
                    <div class="d-flex align-items-center text-white mb-3">
                        <div class="btn-sm-square bg-white text-primary rounded-circle me-3">
                            <i class="fa fa-check"></i>
                        </div>
                        <span>Leading Space Missions and Discoveries</span>
                    </div>
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-rocket fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">560</h2>
                                    <p class="text-white mb-0">Successful Missions</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-star fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">640</h2>
                                    <p class="text-white mb-0">Celestial Discoveries</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-end text-center text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="img/feature.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <style>
        .bg-image {
            background-image: url('img/planet-galaxy-blue-stars-cosmos-1920x1080-913.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            position: relative;
            z-index: 1;
        }

        .bg-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            /* Optional: dark overlay */
            z-index: -1;
        }
    </style>
    <!-- Feature End -->


    <!-- Case Start -->
    <!-- <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Case Study</div>
                <h1 class="mb-4">Explore Our Recent AI Case Studies</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-1.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Robotic Automation</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-2.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Machine learning</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/project-3.jpg" alt="">
                        <a class="case-overlay text-decoration-none" href="">
                            <small>Predictive Analysis</small>
                            <h5 class="lh-base text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Case End -->


    <!-- FAQs Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Popular FAQs</div>
                <h1 class="mb-4">Frequently Asked Questions</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ1">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.1s">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    How to build a website?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    How long will it take to get a new website?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you only create HTML websites?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    Will my website be mobile-friendly?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ1">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="accordion" id="accordionFAQ2">
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.5s">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Will you maintain my site for me?
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    I’m on a strict budget. Do you have any low cost options?
                                </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                            <h2 class="accordion-header" id="headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                    Will you maintain my site for me?
                                </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                    I’m on a strict budget. Do you have any low cost options?
                                </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionFAQ2">
                                <div class="accordion-body">
                                    Dolor nonumy tempor elitr et rebum ipsum sit duo duo. Diam sed sed magna et magna diam aliquyam amet dolore ipsum erat duo. Sit rebum magna duo labore no diam.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- FAQs Start -->


    <!-- Team Start -->
    <!-- <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Team</div>
                    <h1 class="mb-4">Meet Our Experienced Team Members</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/team-1.jpg" alt="">
                                        <h5 class="mb-0">Boris Johnson</h5>
                                        <small>Founder & CEO</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/team-2.jpg" alt="">
                                        <h5 class="mb-0">Adam Crew</h5>
                                        <small>Executive Manager</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/team-3.jpg" alt="">
                                        <h5 class="mb-0">Kate Winslet</h5>
                                        <small>Co Founder</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="team-item bg-white text-center rounded p-4 pt-0">
                                        <img class="img-fluid rounded-circle p-4" src="img/team-4.jpg" alt="">
                                        <h5 class="mb-0">Cody Gardner</h5>
                                        <small>Project Manager</small>
                                        <div class="d-flex justify-content-center mt-3">
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-instagram"></i></a>
                                            <a class="btn btn-square btn-primary m-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5" style="background-color: black;">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Testimonial</div> -->
                    <h1 class="mb-4" style="color:#0056b3;">What Say Our Clients!</h1>
                    <p class="mb-4" style="color: white;text-align:justify">"Jetoff Space takes you on a captivating journey through the cosmos, uncovering the mysteries of distant galaxies and the technology behind spacecraft.
                         Explore the wonders of space with us, where every star and planet reveals a story waiting to be told."</p>
                    <!-- <a class="btn btn-primary rounded-pill px-4" href="">Read More</a> -->
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel border-start border-primary">
                        <?php
                        $query_test = "SELECT * FROM testimonials";
                        $result_test = mysqli_query($conn, $query_test);
                        if (mysqli_num_rows($result_test) > 0) {
                            while ($data_test = mysqli_fetch_assoc($result_test)) {
                        ?>
                                <div class="testimonial-item ps-5">
                                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                                    <p class="fs-4" style="color: white;text-align:justify"><?php echo $data_test['comment'] ?></p>
                                    <div class="d-flex align-items-center">
                                        <img class="img-fluid flex-shrink-0 rounded-circle" src="admin/uploads/testimonials/<?php echo $data_test['image'] ?>" alt="" style="width: 60px;height:60px">
                                        <div class="ps-3">
                                            <h5 class="mb-1" style="color: white;"><?php echo $data_test['name'] ?></h5>
                                            <span style="color: white;"><?php echo $data_test['post'] ?></span>
                                        </div>
                                    </div>
                                </div>
                        <?php }
                        } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->





    <!-- Footer Start -->
    <?php
    include_once('footer.php')
    ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
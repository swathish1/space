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

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

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
    <?php
    include_once('navbar.php')
    ?>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header" style="background-image: url(img/servicepage.jpg);background-size:cover;  ">
       
    <div class="container pt-5" style="padding-top: 12rem !important;">
         
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Our Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"> Services</li>
                        </ol>
                    </nav>
                </div>
                 

            </div>
        </div>
    </div>
    <!-- Hero End -->
    <style>
        .container-fluid {
           
            background-color: #01204E;
        }
        .hero-header {
            background-image: url('img/galaxy.jpg');
            background-size: cover;
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        
        @media (max-width: 768px) {
            .hero-header {
                height: 50vh;
                 
                background-position: center;
            }
            .hero{
                height: 50vh;
            }
            
        }
    </style>

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


    <!-- Service Start -->
    <div class="container-fluid bg-light py-5" style="background-image: url(img/bg-hero.png);">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div>
                    <h1 class="mb-4">Leading the Future of Space Exploration</h1>
                    <p class="mb-4" style="text-align: justify;font-weight:bolder">At Jetoff Space, we are at the forefront of innovation in rocket propulsion and space exploration. Our state-of-the-art engines, comprehensive launch services, and pioneering rocket-based solutions are designed to meet the most challenging demands of the aerospace industry.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-rocket fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">State of the Art Rocket Engines</h5>
                                        <p style="text-align: justify;font-weight:bolder">Developing advanced propulsion systems, including the revolutionary Rotating Detonation Rocket Engine (RDRE), designed for unmatched power, efficiency, and reliability.</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-cogs fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Comprehensive Launch Services</h5>
                                        <p style="text-align: justify;font-weight:bolder">Providing end-to-end launch solutions, including launch vehicle integration and mission planning, tailored to the specific needs of our clients.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-wrench fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Custom Engine Design</h5>
                                        <p style="text-align: justify;font-weight:bolder">Offering bespoke engine design services to meet unique mission requirements, ensuring optimal performance and reliability in the most demanding environments.</p>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-users fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Consultancy and Support</h5>
                                        <p style="text-align: justify;font-weight:bolder">Providing expert consultancy and ongoing support for aerospace projects, leveraging our deep industry knowledge and experience to drive mission success.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->


    


    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary newsletter py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid" src="img/newsletter.png" alt="FAQ">
            </div>
            <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">FAQ</div>
                <h1 class="text-white mb-4">Frequently Asked Questions</h1>
                <div class="accordion accordion-flush" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                What is Jetoff Space?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-black">
                                Jetoff Space is India's pioneering private space company focused on revolutionizing rocket propulsion technology. We specialize in developing advanced rocket engines and providing comprehensive launch services.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the Rotating Detonation Rocket Engine (RDRE)?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-black">
                                The RDRE is a revolutionary rocket propulsion technology that uses continuous detonation within a rotating chamber to achieve higher efficiency and power output compared to traditional engines.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed text-black" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can I get involved with Jetoff Space?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                            <div class="accordion-body text-black">
                                You can get involved with Jetoff Space by subscribing to our newsletter for updates, applying for career opportunities, or partnering with us for space missions and projects. Visit our website for more information.
                            </div>
                        </div>
                    </div>
                    <!-- Add more FAQ items as needed -->
                </div>
            </div>
        </div>
    </div>
</div>

    <!--   tter End -->


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
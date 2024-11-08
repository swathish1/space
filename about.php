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
    <div class="container-fluid pt-5 bg-primary hero-header" >
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end hero">
                    <img src="img/astronaut.png" alt="" style="width:100%;background-size:cover">
                </div>
            </div>
        </div>
    </div>
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
                height: 70vh;
                 
                background-position: center;
            }
            .hero{
                height: 50vh;
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


    <!-- About Start -->
    <div class="container-fluid py-5" style="padding-top:1rem!important;background-color:aliceblue">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/space-rocket-engine.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3"  style="font-size: 25px;font-weight:bold;text-align:justify">About Us</div> -->
                    <p class="mb-4" style="font-size: 25px;font-weight:bold;">Welcome to <span style="color: #3572EF;">Jetoff Space</span>, India's pioneering private space company committed to revolutionizing rocket propulsion technology. </p>
                    <p class="mb-4" style="text-align:justify">At Jetoff Space, our mission is to transcend the limitations of current rocket technologies, offering state-of-the-art engines, comprehensive launch services, and pioneering rocket-based solutions. Our commitment to excellence and technological advancement fuels our ambition to push the boundaries of what is possible in space travel.</p>
                    <p class="mb-4" style="text-align:justify">We are exceptionally proud to be the first private space company in India embarking on the development of the Rotating Detonation Rocket Engine (RDRE). This revolutionary engine represents a significant advancement in rocket propulsion, promising unprecedented power, efficiency, and reliability. Our team of top-tier scientists and engineers is devoted to creating rocket engines that not only meet but exceed global standards.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <!-- <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a> -->
                        <!-- <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-fluid bg-primary feature pt-5" style="background-image: url(img/galaxy.jpg);background-size:cover;background-color:black">
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
                    <img class="img-fluid" src="img/wallpaperspace.png" alt="" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->





    <!-- Newsletter Start -->
    <div class="container-fluid bg-primary feature pt-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Image Section -->
                <div class="col-lg-5 ps-lg-0 pt-5 pt-lg-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/newsletter.png" alt="">
                </div>

                <!-- Mission and Vision Cards Section -->
                <div class="col-lg-7 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4">
                        <!-- Mission Card -->
                        <div class="col-md-6" style="padding-bottom: 20px !important;">
                            <div class="card border-0 h-100 shadow-lg rounded-4 overflow-hidden bg-secondary text-white">
                                <div class="card-body p-4 d-flex flex-column align-items-start justify-content-center">
                                    <h4 class="card-title">Our Mission</h4>
                                    <p class="card-text">At Jetoff Space, we bridge the gap between Earth and the stars, pioneering advancements that bring the universe closer to you.</p>
                                </div>

                            </div>
                        </div>
                        <!-- Vision Card -->
                        <div class="col-md-6" style="padding-bottom: 20px !important;">
                            <div class="card border-0 h-100 shadow-lg rounded-4 overflow-hidden bg-secondary text-white">
                                <div class="card-body p-4 d-flex flex-column align-items-start justify-content-center">
                              
                                    <h4 class="card-title">Our Vision</h4>
                                    <p class="card-text">A world where space is within everyone's reach, inspiring innovation and discovery beyond the horizon.  </p>
                                </div> 

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card-body{
            height: 170px;
        }
        .card:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease-in-out;
        }

        .card-body p {
            transition: color 0.3s ease-in-out;
        }

        .card:hover .card-body p {
            color: darkblue;
        }

        @media (max-width: 768px) {
            .card {
                margin-bottom: 20px;
            }
        }
    </style>



    <!-- Newsletter End -->


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
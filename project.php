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
    <div class="container-fluid pt-5 bg-primary hero-header" style="background-image: url(img/galaxy.jpg);background-size:cover;width:100%; ">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Our Projects</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                            <li class="breadcrumb-item text-white active" aria-current="page">Our Projects</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end hero">
                    <img class="img-fluid" src="img/project.png" alt="" style="width:80%;background-size:cover">
                </div>
            </div>
        </div>
    </div>
    <style>
        
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
    <br>
    <section class="features-section text-center bg-light py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="feature-box">
                            <i class="fa fa-rocket feature-icon"></i>
                            <h4>Advanced Technology</h4>
                            <p style="font-weight: bolder;color:#1a1a1a;font-size:18px">Cutting-edge solutions driving aerospace innovation.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-box">
                            <i class="fa fa-globe feature-icon"></i>
                            <h4>Global Impact</h4>
                            <p style="font-weight: bolder;color:#1a1a1a;font-size:18px">Contributing to space exploration and environmental sustainability.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-box">
                            <i class="fa fa-users feature-icon"></i>
                            <h4>Expert Team</h4>
                            <p style="font-weight: bolder;color:#1a1a1a;font-size:18px">Collaborating with top-tier scientists and engineers.</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="feature-box">
                            <i class="fa fa-lightbulb feature-icon"></i>
                            <h4>Innovative Solutions</h4>
                            <p style="font-weight: bolder;color:#1a1a1a;font-size:18px">Developing groundbreaking technologies for future generations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<style>
    .feature-box{
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

.features-section .feature-box > * {
    position: relative;
    z-index: 1;
}

</style>

    <!-- Case Start -->
    <div class="project-page">
        <!-- Projects Section -->
        <section class="projects-section container">
            <div class="row">
                <!-- Project Card 1 -->
                <div class="col-md-6 mb-4">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="img/Manufacturing.jpg" alt="Manufacturing Air and Spacecraft">
                        </div>
                        <div class="project-content" style="background-color: #BBE9FF;">
                            <h3>Manufacturing Air and Spacecraft</h3> <br>
                            <p style="color: #1a1a1a;font-weight:600">Design, develop, and produce advanced vehicles for safe and efficient transportation through the Earth's atmosphere and beyond.</p>

                        </div>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="col-md-6 mb-4">
                    <div class="project-card">
                        <div class="project-image">
                            <img src="img/businessdev.jpg" alt="Business Development in Natural Sciences and Engineering">
                        </div>
                        <div class="project-content" style="background-color: #BBE9FF;">
                            <h3>Business Development in Natural Sciences and Engineering</h3>
                            <p style="color: #1a1a1a;font-weight:600">Drive the advancement of technological frontiers through rigorous scientific inquiry and applied engineering practices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
       

        <!-- Call to Action -->

    </div>
    <style>
        .project-page .hero-section {
            position: relative;
            height: 100vh;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .project-page .hero-section .hero-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        .project-page .hero-section .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .project-page .hero-section .hero-content h1 {
            font-size: 4rem;
            color: #fff;
        }

        .project-page .hero-section .hero-content p {
            font-size: 1.5rem;
            color: #ddd;
        }

        .project-page .projects-section .project-card {
            position: relative;
            background-color: #1a1a1a;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .project-page .projects-section .project-card:hover {
            transform: translateY(-10px);
        }

        .project-page .projects-section .project-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        .project-page .projects-section .project-content {
            padding: 20px;
        }

        .project-page .projects-section .project-content h3 {
            color: #3572EF;
            font-size: 1.75rem;
            margin-bottom: 10px;
        }

        .project-page .projects-section .project-content p {
            color: #fff;
            margin-bottom: 15px;
        }

        .project-page .projects-section .project-link {
            color: #3572EF;
            text-decoration: none;
            font-weight: bold;
        }

        .project-page .features-section .feature-box {
            margin-bottom: 20px;
        }

        .project-page .features-section .feature-icon {
            font-size: 2.5rem;
            color: #3572EF;
            margin-bottom: 15px;
        }

        .project-page .cta-section {
            background-color: #3572EF;
            color: #fff;
        }

        .project-page .cta-section h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .project-page .cta-section .btn {
            padding: 15px 30px;
            font-size: 1.25rem;
        }
    </style>
    <div class="container-fluid  py-5"  >
    <div class="container py-5">
        <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
            <!-- <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Mission</div> -->
            <h1 class="mb-4">Pioneering the Future of Space Exploration</h1>
            <p class="mb-4" style="font-weight: bold;">At Jetoff Space, our mission is to transcend the limitations of current rocket technologies, offering state-of-the-art engines, comprehensive launch services, and pioneering rocket-based solutions. Our commitment to excellence and technological advancement fuels our ambition to push the boundaries of what is possible in space travel.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                <div class="case-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/rdre.webp" alt=""  >
                    <a class="case-overlay text-decoration-none" href="">
                        <small>RDRE Development</small>
                        <h5 class="lh-base text-white mb-3">We are exceptionally proud to be the first private space company in India embarking on the development of the Rotating Detonation Rocket Engine (RDRE).</h5>
                         
                    </a>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                <div class="case-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/Aerospace.jpg" alt="" style="width: fit-content;">
                    <a class="case-overlay text-decoration-none" href="">
                        <small>Aerospace Innovation</small>
                        <h5 class="lh-base text-white mb-3">Jetoff Space is at the forefront of aerospace innovation, empowering the future of space exploration with unmatched technological prowess.</h5>
                      
                    </a>
                </div>
            </div>
            <div class="col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                <div class="case-item position-relative overflow-hidden rounded mb-2">
                    <img class="img-fluid" src="img/AI-in-Space-Exploration.jpg" alt="" style="width: fit-content;">
                    <a class="case-overlay text-decoration-none" href=""><br>
                        <small>Space Exploration</small>
                        <h5 class="lh-base text-white mb-3">At Jetoff Space, we are not just developing rocket engines; we are shaping the future of space exploration through relentless innovation and expertise.</h5>
                         
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
 <style>
    .case-item{
        height: 450px;
    }
 </style>
    <!-- Case End -->


    <!-- FAQs Start -->
    <div class="container-fluid py-5">
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
                                What is the Rotating Detonation Rocket Engine (RDRE)?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                The Rotating Detonation Rocket Engine (RDRE) is a cutting-edge propulsion technology being developed by Jetoff Space. It offers unprecedented power, efficiency, and reliability, representing a significant advancement in rocket propulsion technology.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.2s">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What makes Jetoff Space unique in the aerospace industry?
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Jetoff Space is India’s first private space company focused on developing the RDRE. Our dedication to innovation, safety, and exceeding global standards sets us apart as leaders in the aerospace industry.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.3s">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How does Jetoff Space contribute to space exploration?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Jetoff Space is at the forefront of aerospace innovation, creating state-of-the-art engines and launch services that empower the future of space exploration. Our work on the RDRE exemplifies our commitment to pushing the boundaries of what is possible in space travel.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.4s">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                What are Jetoff Space's core services?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionFAQ1">
                            <div class="accordion-body">
                                Jetoff Space offers state-of-the-art rocket engines, comprehensive launch services, and pioneering rocket-based solutions. Our services are designed to meet the needs of both commercial and governmental sectors, ensuring excellence and technological advancement in every project.
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
                                Who are the key players behind Jetoff Space?
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Jetoff Space is driven by a team of top-tier scientists and engineers who are passionate about advancing the frontiers of space travel. Their expertise and innovation are at the heart of our success.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.6s">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                What industries does Jetoff Space serve?
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Jetoff Space serves the aerospace industry by developing cutting-edge rocket engines and propulsion systems. We cater to commercial, governmental, and defense sectors, providing innovative solutions that meet diverse needs.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.7s">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                What are the long-term goals of Jetoff Space?
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Jetoff Space aims to revolutionize space exploration by continuously pushing the boundaries of rocket technology. Our long-term goal is to lead the industry with innovations that make space travel more accessible, efficient, and sustainable.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item wow fadeIn" data-wow-delay="0.8s">
                        <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                How does Jetoff Space ensure the safety and reliability of its products?
                            </button>
                        </h2>
                        <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionFAQ2">
                            <div class="accordion-body">
                                Jetoff Space adheres to stringent quality standards and regulatory requirements in the design, development, and production of our rocket engines. Our commitment to safety and reliability is reflected in every product we create.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- FAQs Start -->


    <!-- Newsletter Start -->
    <!-- <div class="container-fluid bg-primary newsletter py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-5 ps-lg-0 pt-5 pt-md-0 text-start wow fadeIn" data-wow-delay="0.3s">
                    <img class="img-fluid" src="img/newsletter.png" alt="">
                </div>
                <div class="col-md-7 py-5 newsletter-text wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3">Newsletter</div>
                    <h1 class="text-white mb-4">Let's subscribe the newsletter</h1>
                    <div class="position-relative w-100 mt-3 mb-2">
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text" placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i class="fa fa-paper-plane text-primary fs-4"></i></button>
                    </div>
                    <small class="text-white-50">Diam sed sed dolor stet amet eirmod</small>
                </div>
            </div>
        </div>
    </div> -->
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
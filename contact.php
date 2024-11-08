<?php
include_once('admin/config/connection.php');


if (isset($_POST['testSubmit'])) {

    $recaptchaSecret = '6LeE6SoqAAAAADyXgTU7rNHIsAb9xNXTQHhaU_CD';
    $recaptchaResponse = $_POST['g-recaptcha-response'];

    // Verify the reCAPTCHA response
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptchaSecret&response=$recaptchaResponse");
    $responseKeys = json_decode($response, true);

    if (intval($responseKeys["success"]) !== 1) {
        echo 'Please complete the reCAPTCHA.';
    } else {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $message = mysqli_real_escape_string($conn, $_POST['message']);


        $query = "INSERT INTO contact_form ( name, email , phone , message ) VALUES ('$name', '$email', '$phone', '$message')";
        $run = mysqli_query($conn, $query);


        if ($run) {
            header('Location:contact.php?inserted=success');
            exit();
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
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
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark p-0">

                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="about.php" class="nav-item nav-link">About</a>
                        <a href="service.php" class="nav-item nav-link">Services</a>
                        <a href="project.php" class="nav-item nav-link">Projects</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light mt-2">
                                <a href="feature.php" class="dropdown-item">Features</a>
                                <a href="team.php" class="dropdown-item">Our Team</a>
                                <a href="faq.php" class="dropdown-item">FAQs</a>
                                <a href="testimonial.php" class="dropdown-item">Testimonial</a>
                                <a href="404.php" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="contact.php" class="nav-item nav-link">Contact</a>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <div class="container-fluid pt-5 bg-primary hero-header">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5" style="padding-top: 13rem !important;">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contact Us</li>
                        </ol>
                    </nav>
                </div>
                <!-- <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/hero-img.png" alt="" style="max-height: 300px;">
                </div> -->
            </div>
        </div>
    </div>
    <style>
        .container-fluid {

            background-color: #01204E;
        }

        .hero-header {
            background-image: url('img/contactt.jpg');
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
                height: 60vh;
                padding: 2rem 1rem;
                background-position: center;
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


    <!-- Contact Start -->
    <div class="container-fluid contact bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-inline-flex rounded bg-white w-100 p-4">
                                <i class="fas fa-map-marker-alt fa-2x text-secondary me-4"></i>
                                <div>
                                    <h4>Address</h4>
                                    <p class="mb-0">JETOFFSPACE SOLUTIONS PRIVATE LIMITED <br> BUILDING NO.60/44,3RD FLOOR, JC CHAMBERS, ERNAKULAM,PANAMPILLY NAGAR ERNAKULAM,<br> KERALA-682036</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="d-inline-flex rounded bg-white w-100 p-4">
                                <i class="fas fa-envelope fa-2x text-secondary me-4"></i>
                                <div>
                                    <h4>Mail Us</h4>
                                    <p class="mb-0">info@callspace.com</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-6">
                            <div class="d-inline-flex rounded bg-white w-100 p-4">
                                <i class="fa fa-phone-alt fa-2x text-secondary me-4"></i>
                                <div>
                                    <h4>Telephone</h4>
                                    <p class="mb-0"><a href="tel:6238720483">6238720483</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="h-100 overflow-hidden">
                                <iframe class="w-100 rounded" style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15718.81561371891!2d76.27629469878032!3d9.958574885715246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b0872c7abe6c9e7%3A0x7138a08633b8c9dd!2sPanampilly%20Nagar%2C%20Kochi%2C%20Ernakulam%2C%20Kerala!5e0!3m2!1sen!2sin!4v1723095856159!5m2!1sen!2sin" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 h-100 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                        <h4 class="text-uppercase text-primary">Let’s Connect</h4>
                        <h1 class="display-3 text-capitalize mb-3">Send Your Message</h1>
                        <!-- <p class="mb-0">The contact form for the electric charge station is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code, and you're done. <a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p> -->
                    </div>
                    <form>
                        <div class="row g-4">
                            <div class="col-lg-12  ">
                            <!-- col-xl-6 -->
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="form-floating">
                                    <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-lg-12 ">
                                <div class="form-floating">
                                    <input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
                                    <label for="phone">Your Phone</label>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 col-xl-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0" id="Address" placeholder="Address">
                                    <label for="Address">Address</label>
                                </div>
                            </div> -->
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 175px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="g-recaptcha" data-sitekey="6LeE6SoqAAAAAHNAdjbdslv1jTmjAalOP4KHOHkF"></div>

                      
                            <div class="col-12"  >
                            <br>
                            <center><input type="submit" value="Submit" name="testSubmit"></center>
                        </div>
                        </div>
                    </form>
                    <style>
                        /* Basic styling */

                        .Application {
                            max-width: 600px;
                            margin: 20px auto;
                            padding: 20px;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            background-color: #f9f9f9;
                        }

                        label {
                            font-weight: bold;
                        }

                        input[type="text"],
                        input[type="email"],
                        select,
                        textarea {
                            width: 100%;
                            padding: 10px;
                            margin: 5px 0;
                            border: 1px solid #ccc;
                            border-radius: 5px;
                            box-sizing: border-box;
                        }

                        input[type="submit"] {
                            background-color: #4CAF50;
                            color: white;
                            padding: 10px 20px;
                            border: none;
                            width: 350px;
                            border-radius: 5px;
                            cursor: pointer;
                        }

                        input[type="submit"]:hover {
                            background-color: #45a049;
                        }
                    </style>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Contact End -->


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
                        <input class="form-control border-0 rounded-pill w-100 ps-4 pe-5" type="text"
                            placeholder="Enter Your Email" style="height: 48px;">
                        <button type="button" class="btn shadow-none position-absolute top-0 end-0 mt-1 me-2"><i
                                class="fa fa-paper-plane text-primary fs-4"></i></button>
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
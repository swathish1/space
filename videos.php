<?php
include_once('admin/config/connection.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>jETOFF SPACE</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Ubuntu:wght@500;700&display=swap"
        rel="stylesheet">

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
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
    <div class="container-fluid pt-5 bg-primary hero-header" style="background-image: url(img/footer.jpg);">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Video Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                            <li class="breadcrumb-item text-white active" aria-current="page">Video Gallery</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">
                    <img class="img-fluid" src="img/gallery1.png" alt="" style="max-height: 300px;">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style type="text/css">
    img#gap_img {
        margin-bottom: 30px;
    }

    .tz-gallery {
        padding: 40px 0;
    }

    .tz-gallery .lightbox img {
        width: 100%;
        border-radius: 0;
        position: relative;
        border: 1px solid #c91f3c;
        outline: 1px solid #323639;
        outline-offset: 4px;
        box-shadow: rgba(0, 0, 0, 0.8) 0px 4px 12px;
    }

    .tz-gallery .lightbox:after {
        position: absolute;
        top: 0;
        left: 15px;
        width: 90%;
        height: 100%;
        opacity: 0;
        background-color: rgb(201 31 60 / 65%);
        content: '';
        transition: 0.4s;
    }

    .tz-gallery .lightbox:hover:after {
        opacity: 1;
    }

    .baguetteBox-button {
        background-color: transparent !important;
    }

    @media(max-width: 768px) {
        body {
            padding: 0;
        }
    }
    .fancybox__container{
        z-index: 10000000000 !important;
    }
</style>



<div class="container" id="addmin">
    <div class="row">
        <?php
        $query_test = "SELECT * FROM video_gallery";
        $result_test = mysqli_query($conn, $query_test);

        function getYoutubeVideoId($url)
        {
            $query_string = parse_url($url, PHP_URL_QUERY);
            parse_str($query_string, $params);
            return isset($params['v']) ? $params['v'] : false;
        }

        if (mysqli_num_rows($result_test) > 0) {
            while ($data_test = mysqli_fetch_assoc($result_test)) {
        ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="course-item bg-light p-3 h-100">
                        <h5 style="font-weight: bold; font-size:20px">
                            <a href="#" class="text-decoration-none text-dark"><?php echo $data_test['title']; ?></a>
                        </h5>
                        <?php
                        $data_test['link'];
                        if (!empty($data_test['link'])) {
                            $link = htmlspecialchars($data_test['link'], ENT_QUOTES, 'UTF-8');
                            $videoId = getYoutubeVideoId($link);
                            echo '<div class="embed-responsive embed-responsive-16by9 mb-3">';
                            echo '<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0" allowfullscreen></iframe>';
                            echo '</div>';
                        } else {
                            echo 'No video link available.';
                        }
                        ?>
                        <p style="text-align: justify;">
                            <?php echo $data_test['description']; ?>
                        </p>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </div>
</div>




    <!-- footer starts -->
    <?php
    include_once('footer.php');
    ?>


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
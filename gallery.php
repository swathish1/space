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
                    <h1 class="display-4 text-white mb-4 animated slideInRight">Image Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-start mb-0">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                            <li class="breadcrumb-item text-white active" aria-current="page">Images</li>
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




<link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

<div class="container gallery-container">

    <div class="container gallery-container">
        <br><br> 


        <div id="myBtnContainer">
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>

            <?php
            $query_test1 = "SELECT DISTINCT category FROM gallery";
            $result_test1 = mysqli_query($conn, $query_test1);
            if (mysqli_num_rows($result_test1) > 0) {
                while ($data_test1 = mysqli_fetch_assoc($result_test1)) {
                    // Replace 'category' with the actual column name that contains the category information in your database
                    $category1 = $data_test1['category'];
            ?>
                    <button class="btn1 active" onclick="filterSelection('<?php echo $category1 ?>')"> <?php echo $category1 ?></button>

            <?php }
            } ?>

        </div> <br> 

        <!-- Portfolio Gallery Grid -->
        <div class="row">
            <?php
            $query_test = "SELECT * FROM gallery";
            $result_test = mysqli_query($conn, $query_test);
            if (mysqli_num_rows($result_test) > 0) {
                while ($data_test = mysqli_fetch_assoc($result_test)) {
                    // Replace 'category' with the actual column name that contains the category information in your database
                    $category = $data_test['category'];
            ?>

                    <div class="column <?php echo $data_test['category'] ?>">
                        <div class="content">
                            
                            <a data-fancybox="gallery" data-caption="<?php echo $data_test['category'] ?>" rel="ligthbox" href="admin/uploads/gallery/<?php echo $data_test['image'] ?>">
                                <img class="img-responsive" alt="" src="admin/uploads/gallery/<?php echo $data_test['image'] ?>" style="width:100%;object-fit:contain;height:250px" />
                                   
                            </a>
                        </div>
                    </div>
            <?php }
            } ?>


            <!-- END GRID -->
        </div>
    </div>
    <a href="image-a.jpeg" data-fancybox data-caption="Single image">
        <img src="" />
    </a>

    <style>
        /* Center website */
       



        .row1 {
            margin: 8px -16px;
        }

        /* Add padding BETWEEN each column (if you want) */


        /* Create three equal columns that floats next to each other */
        .column {
            float: left;
            width: 33.33%;
            display: none;
            /* Hide columns by default */
        }

        /* Clear floats after rows */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Content */
        .content1 {
            background-color: white;
            padding: 10px;
        }

        /* The "show" class is added to the filtered elements */
        .show {
            display: block;
        }

        /* Style the buttons */
        .btn1 {
            border: none;
            outline: none;
            padding: 12px 16px;
            background-color: white;
            cursor: pointer;
        }

        
        .btn1:hover {
            background-color: #ddd;
        }

     
        .btn1.active {
            background-color: #83B4FF;
            color: white;
        }
    </style>



   
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');


    filterSelection("all") // Execute the function and show all columns
    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        // Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    // Show filtered elements
    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    // Hide elements that are not selected
    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }

    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<?php include('footer.php') ?>


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
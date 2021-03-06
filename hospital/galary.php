<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="icon" href="assets/images/red_cross.jpg">
    <!-- start linking -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/aos/aos.min.css">
    <link rel="stylesheet" href="assets/css/gallery.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<?php
?>
<body>

<div class="wrapper">
    <!-- start loading -->
    <?php include('header.php');?>
    
    <!-- start hero -->
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-gallery.jpg)">
            <div class="container">
                <h3 class="title">Our Works<br><strong>Gallery</strong></h3>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="main-section">

        <!-- FAQs -->
        <div class="img-gallery">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12" data-aos="fade-right">
                        <h2><span>View</span> our best Gallery</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery"> <a class="popup2" href="assets/images/gallery/Portfolio-pic1.jpg"> <img src="assets/images/gallery/Portfolio-pic1.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a> </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery"> <a class="popup2" href="assets/images/gallery/Portfolio-pic2.jpg"><img src="assets/images/gallery/Portfolio-pic2.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a> </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery"> <a class="popup2" href="assets/images/gallery/Portfolio-pic3.jpg"><img src="assets/images/gallery/Portfolio-pic3.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a> </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery"> <a class="popup2" href="assets/images/gallery/Portfolio-pic4.jpg"><img src="assets/images/gallery/Portfolio-pic4.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a> </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery"> <a class="popup2" href="assets/images/gallery/Portfolio-pic5.jpg"><img src="assets/images/gallery/Portfolio-pic5.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a> </div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="popup-gallery"> <a class="popup2" href="assets/images/gallery/Portfolio-pic6.jpg"><img src="assets/images/gallery/Portfolio-pic6.jpg" alt="pic"><span class="eye-wrapper"><i class="zmdi zmdi-eye"></i></span></a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQs -->

    </section>

    <!-- start footer -->
    <?php include('footer.php');?>
</div>
<!-- start screpting -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/app.js"></script><!-- my js -->
<script src="assets/js/lightbox.js"></script>
</body>
</html>

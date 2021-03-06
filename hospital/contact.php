<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us</title>
    <link rel="icon" href="assets/images/red_cross.jpg">
    <!-- start linking -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/aos/aos.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<?php
   $conn=mysqli_connect("localhost","root","","hospital");
    // print_r($conn);
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['phone'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        // $image=$_FILES['image']['name'];
        // $tmp=$_FILES['image']['tmp_name'];
        //  $path='uploads/'. $image;

         $sql="insert into inquiry(name,email,phone,subject,message) values('$name','$email','$phone','$subject','$message')";
        $result=mysqli_query($conn,$sql);
        if ($result) 
        {
           echo "register successfully";
        }
        else
            echo "ERROR";
    }
?>
<body>
<div class="wrapper">
    <!-- start loading -->
    <?php include('header.php');?>
    <!-- start hero -->
    <section id="hero">
        <div class="inner-banner" style="background-image:url(assets/images/banner-contactus.jpg)">
            <div class="container">
                <h3 class="title">Sanjivani Hospital<br><big><strong>Contact Us</strong></big></h3>
            </div>
        </div>
    </section>

    <!-- Content Area -->
    <section class="main-section">

        <!-- Contact Section -->
        <div class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12" data-aos="fade-right">
                        <h2><span>Get Touch </span>With Us</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8 col-sm-6">
                        <div class="contact-form">
                            <div class="row">
                                <div class="col-sm-12 appoitntment-title">Make an Appointment</div>
                                <form method="post" action="contact.php">
                                <div class="col-md-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" placeholder="Enter Email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" placeholder="Enter Phone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-6 col-md-12 textarea">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" placeholder="Your Message.."></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <button type="submit" name="submit" value="submit" class="btn btn-primary btn-round">Submit</button>
                                </div>
                            </form>    
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="contact-sidebar">
                            <h4>Quick Contact</h4>
                            <p>If you have any questions simply use the following contact details.</p>
                            <ul class="list-unstyled add-grp">
                                <li>
                                    <i class="zmdi zmdi-pin"></i>
                                    <p>Premier Automobile Road, Kurla(West), Mum-70</p>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-phone"></i>
                                    <p>022-65542666129</p>
                                </li>
                                <li>
                                    <i class="zmdi zmdi-email"></i>
                                    <p>queries@sanjivani.com</p>
                                </li>
                            </ul>
                            <ul class="list-unstyled social-icon clearfix">
                                <li>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-facebook-box"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-google-plus-box"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-linkedin-box"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-twitter-box"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-pinterest-box"></i></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Section -->

        <!-- Contact Map -->
        <div class="map-main">
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3770.719382557978!2d72.88410021472976!3d19.076071687087794!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c88f4dc6333b%3A0x9b988603d0ef51fe!2sKohinoor%20Hospital!5e0!3m2!1sen!2sin!4v1571860249661!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></center>
        </div>
        <!-- Contact Map -->

        <!-- Our Partner -->
        <div class="our-partner">
            <div class="container">
                <div class="row">
                    <div class="section-title col-12" data-aos="fade-right">
                        <h2><span>Our </span>Partners</h2>
                    </div>
                </div>
                <div class="row out-partner-logo">
                    <div class="col-lg-2 col-md-6 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-1.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-6 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-2.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-6 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-3.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-6 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-4.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-6 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-1.png" alt=""></a></div>
                    <div class="col-lg-2 col-md-6 col-sm-6"><a href="javascript:void(0);"><img src="assets/images/partner-logo-5.png" alt=""></a></div>
                </div>
            </div>
        </div>
        <!-- Contact Map -->

    </section>

    <!-- start footer -->
    <?php include('footer.php');?>

</div>
<!-- start screpting -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/js/app.js"></script><!-- my js -->
</body>
</html>

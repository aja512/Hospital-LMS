<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sanjivani Hospital Homepage</title>
    <link rel="icon" href="assets/images/red_cross.jpg">
    <!-- start linking -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/aos/aos.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<?php
            $conn=mysqli_connect("localhost","root","","hospital");
            if(isset($_POST['submit']))
            {
                $name=$_POST['name'];
                $email=$_POST['email'];
                $doctors =$_POST['doctors'];
                $appointmentdate =$_POST['appointmentdate'];
                $dob = $_POST['dob'];
                $departments=$_POST['departments'];
                $sql="insert into appointments(name,email,doctors,appointmentdate,dob,departments) values('$name','$email','$doctors','$appointmentdate','$dob','$departments')";
                $result=mysqli_query($conn,$sql);
                if ($result) 
                {
                    echo "register successfully";
                }
                else
                    echo "error_log()";
            }
?>
<body>


<div class="wrapper">    
    <?php include('header.php') ?>

    <!-- start hero -->
    <section id="hero">
        <div class="slider" style="background-image:url(assets/images/slider1.jpg)">
            <div class="container-fluid">
                <div class="slider_text">
                    <h3 class="title"><span>Welcome to</span> <br>
                         <strong>Sanjivani Hospital</strong></h3>
                    <p class="sub-title">Personal care, professional approach.</p><br>
                </div>
                <div class="slider_form row">
                    <p class="col-12">Make an Appointment</p>
                    <form method="post" action="index.php"> 
                    <div class="col-lg-4 col-md-6">
                        <div class="form-group">
                            <input type="text" name="name" value="" placeholder="Enter Name" class="form-control m-b-15" required="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group">
                            <input type="email" name="email" value="" placeholder="Enter email id" class="form-control m-b-15" required="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group">
                            <input type="date" name="appointmentdate" value="" placeholder="Enter Appointment Date" class="form-control m-b-15" required="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group">
                            <input type="date" name="dob" value="" placeholder="Enter Date of Birth" class="form-control m-b-15" required="">
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 col-6">
                        <div class="form-group">
                            Gender:
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="other">Other
                        </div>
                    </div> -->
                    <div class="col-lg-4 col-md-6 col-6">
                        <select class="form-control m-b-15" name="doctors">
                            <option selected="selected">Select Doctor</option>
                            <option>Marc Parcival</option>
                            <option>Alen Bailey</option>
                            <option>Basil Andrew</option>
                            <option>Giles Franklin</option>
                            <option>Edgar Denzil</option>
                            <option>Garfield Feris</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-6 col-6">
                        <select class="form-control" name="departments">
                            <option selected="selected">Select Department</option>
                            <option>Cardiology</option>
                            <option>Pulmonology</option>
                            <option>Gynecology</option>
                            <option>Neurology</option>
                            <option>Urology</option>
                            <option>Gastrology</option>
                            <option>Pediatrician</option>
                            <option>Laboratory</option>
                        </select>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <button type="submit" class="btn btn-primary btn-round btn-block m-t-0 m-b-0" name="submit" value="submit">Submit</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Area -->
    <section class="main-section">

        <!-- Home About Us Section -->
        <div class="about-us-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="section-title col-12" data-aos="fade-up">
                        <h2><span>About </span>Us</h2>
                        <p>Sanjivani Hospital was founded by Mr. Suraj Bajaj and Mr. Jismeet Agarwal in 1950.</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-sm-4">
                        <div class="box-img box-shadow" data-aos="fade-up">
                            <img src="assets/images/about-img.jpg" alt="">
                            <span class="section-line" data-aos="fade-up"></span>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-8">
                        <div class="common-cnt" data-aos="fade-up">
                            <div class="section-top">
                                <p><strong>Sanjivani Hospital</strong>is a Hospital that caters to the needs of its patients; by placing them before the requirements of a business sector. </p>
                            </div>
                            <p>
                            	<strong>Vision:</strong><br>
                            	To create a patient-centric tertiary healthcare organisation focused on non-intrusive quality care utilizing leading edge technology with a human touch.
                        	</p>
                            <p>
                            	<strong>Mission:</strong><br>
                            	Achieve professional excellence in delivering quality care<br>
								Push frontiers of care through research and education<br>
								Adhere to national and global standards in healthcare<br>
								Ensure care with integrity and ethics<br>
								Provide quality healthcare to all sections of society<br>
                            </p>
                            <p>
                            	<strong>Quality Policy</strong><br>
                            	Sanjivani Hospital will provide quality services to all its patients. It shall provide safe and effective medical services to all its patients, enriching education to its students, effective training programmes to its staff and its motto shall be to continuously strive for excellence in its clinical, technical and all other services.
                            </p>
                            <p>
                            <a class="btn btn-primary btn-simple btn-round margin-0" href="about.php" data-aos="flip-up">View More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home About Us Section -->

        <!-- Home About Us Section -->
        <div class="our-best-service xl-slategray section-65-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="section-title col-12" data-aos="fade-up">
                        <h2><span>Our </span>Best Services</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="assets/images/icon-cardio-monitoring.png" alt="Cardiology"></div>
                            <div class="service-cnt">
                                <div class="service-name">Cardiology</div>
                                <div class="service-dep">
                                    <p>Cardiology (from Greek καρδίᾱ kardiā, "heart" and -λογία -logia, "study") is a branch of medicine that deals with the disorders of the heart as well as some parts of the circulatory system. The field includes medical diagnosis and treatment of congenital heart defects, coronary artery disease, heart failure, valvular heart disease and electrophysiology. Physicians who specialize in this field of medicine are called cardiologists, a specialty of internal medicine. Pediatric cardiologists are pediatricians who specialize in cardiology. Physicians who specialize in cardiac surgery are called cardiothoracic surgeons or cardiac surgeons, a specialty of general surgery.<br>Although the cardiovascular system is inextricably linked to blood, cardiology is relatively unconcerned with hematology and its diseases. Some obvious exceptions that affect the function of the heart would be blood tests (electrolyte disturbances, troponins), decreased oxygen carrying capacity (anaemia, hypovolemic shock), and coagulopathies.

								</p>
                                    <a class="btn btn-primary btn-simple btn-round margin-0" href="https://en.wikipedia.org/wiki/Cardiology">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="assets/images/icon-orthodontics.png" alt="Orthodontics">
                            </div>
                            <div class="service-cnt">
                                <div class="service-name">Orthodontics</div>
                                <div class="service-dep">
                                    <p>Orthodontics is a specialty of dentistry that deals with the diagnosis, prevention and correction of malpositioned teeth and jaws. It can also focus on modifying facial growth, known as dentofacial orthopedics.<br>Abnormal alignment of the teeth and jaws is common, nearly 30% of the population has malocclusions severe enough to benefit from orthodontic treatment.[2] Treatment can take several months to a few years, it involves the use of dental braces and other appliances to slowly move the teeth and jaws around. If the malocclusion is very severe, jaw surgery may be used. Treatment is usually started before a person reaches adulthood since bones can more easily be moved around in children.</p>
                                    <a class="btn btn-primary btn-simple btn-round margin-0"  href="https://en.wikipedia.org/wiki/Orthodontics">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up"  data-aos-duration="3000">
                            <div class="service-icon"><img src="assets/images/icon-traumatology.png" alt="Traumatology">
                            </div>
                            <div class="service-cnt">
                                <div class="service-name">Traumatology</div>
                                <div class="service-dep">
                                    <p>In medicine, traumatology (from Greek trauma, meaning injury or wound) is the study of wounds and injuries caused by accidents or violence to a person, and the surgical therapy and repair of the damage. Traumatology is a branch of medicine. It is often considered a subset of surgery and in countries without the specialty of trauma surgery it is most often a sub-specialty to orthopedic surgery. Traumatology may also be known as accident surgery.</p>
                                    <a class="btn btn-primary btn-simple btn-round margin-0"  href="https://en.wikipedia.org/wiki/Traumatology">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="assets/images/icon-cardiology.png" alt="Cardiology">
                            </div>
                            <div class="service-cnt">
                                <div class="service-name">Anesthesiology</div>
                                <div class="service-dep">
                                    <p>Anesthesiology, anaesthesiology, anaesthesia or anaesthetics (see Terminology) is the medical speciality concerned with the total perioperative care of patients before, during and after surgery.It encompasses anesthesia, intensive care medicine, critical emergency medicine, and pain medicine.A physician specialised in this field of medicine is called an anesthesiologist, anaesthesiologist or anaesthetist, depending on the country (see Terminology).<br>
									The core element of the specialty is the study and use of anesthesia and anesthetics to safely support a patient's vital functions through the perioperative period. Since the 19th century, anesthesiology has developed from an experimental area with non-specialist practitioners using novel, untested drugs and techniques into what is now a highly refined, safe and effective field of medicine. In some countries anesthesiologists comprise the largest single cohort of doctors in hospitals,and their role can extend far beyond the traditional role of anesthesia care in the operating room, including fields such as providing pre-hospital emergency medicine, running intensive care units, transporting critically ill patients between facilities, and prehabilitation programs to optimize patients for surgery.</p>
                                    <a class="btn btn-primary btn-simple btn-round margin-0"  href="https://en.wikipedia.org/wiki/Anesthesiology">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="service-box" data-aos="fade-up" data-aos-duration="3000">
                            <div class="service-icon"><img src="assets/images/lungs.png" height="65px" alt="Pulmonology"></div>
                            <div class="service-cnt">
                                <div class="service-name">Pulmonology</div>
                                <div class="service-dep">
                                    <p>
                                    	Pulmonology is a medical speciality that deals with diseases involving the respiratory tract. The term is derived from the Latin word pulmō, pulmōnis ("lung") and the Greek suffix -λογία, -logia ("study of"). Pulmonology is synonymous with pneumology (from Greek πνεύμων ("lung") and -λογία), respirology and respiratory medicine.<br>
										Pulmonology is known as chest medicine and respiratory medicine in some countries and areas. Pulmonology is considered a branch of internal medicine, and is related to intensive care medicine. Pulmonology often involves managing patients who need life support and mechanical ventilation. Pulmonologists are specially trained in diseases and conditions of the chest, particularly pneumonia, asthma, tuberculosis, emphysema, and complicated chest infections.
                                    </p>
                                    <a class="btn btn-primary btn-simple btn-round margin-0"  href="https://en.wikipedia.org/wiki/Pulmonology">View More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home About Us Section -->

        <!-- Home Fun Fact -->
        <div class="fun-fact">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-account"></i>
                            <span class="counter timer" data-from="0" data-to="65200" data-speed="2500"
                                  data-fresh-interval="700">65200</span>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-favorite"></i>
                            <span class="counter timer" data-from="0" data-to="7520" data-speed="2500"
                                  data-fresh-interval="700">7520</span>
                            <p>Heart Transplant</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-thumb-up"></i>
                            <span class="counter timer" data-from="0" data-to="52" data-speed="2500"
                                  data-fresh-interval="700">52</span>
                            <p>Years Of Experience</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="fun-fact-box text-center">
                            <i class="zmdi zmdi-mood"></i>
                            <span class="counter timer" data-from="0" data-to="76520" data-speed="2500"
                                  data-fresh-interval="700">76520</span>
                            <p>Well Smiley Faces</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Our Team -->
        <div class="our-team">
            <div class="container-fluid">
                <div class="row justify-content-between">
                    <div class="section-title left col-lg-4" data-aos="fade-up">
                        <h2><span>Meet </span>Our Team</h2>
                        <p>Our hospital consists of a well-trained professionals that have solved nationwide critical cases.</p>
                    </div>
                    <div class="section-title right col-lg-8" data-aos="fade-up">
                        <p><span class="color-212121">Sanjivani Hospital</span> The wise man therefore always holds in these
                            matters to this principle of selection: he rejects pleasures to secure.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-box text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="5000">
                            <div class="doctor-pic"><img src="assets/images/team-member-01.png" alt="Dr. John"></div>
                            <div class="doctor-info">
                                <h4>Dr. John <span>Dentist</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-box text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="4000">
                            <div class="doctor-pic"><img src="assets/images/team-member-02.png" alt="Dr. Amelia"></div>
                            <div class="doctor-info">
                                <h4>Dr. Amelia <span>Gynecologist</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-box text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="5000">
                            <div class="doctor-pic"><img src="assets/images/team-member-03.png" alt="Dr. Jack"></div>
                            <div class="doctor-info">
                                <h4>Dr. Jack <span>Audiology</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                                <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                        <div class="team-box text-center" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">
                            <div class="doctor-pic"><img src="assets/images/team-member-04.png" alt="Dr. Charlie"></div>
                            <div class="doctor-info">
                                <h4>Dr. Charlie<span>Dentist</span></h4>
                                <ul class="clearfix">
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                                </ul>
                                <a class="btn btn-simple btn-primary btn-round" href="javascript:void(0);">View More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Our Team -->

        <!-- Home Why choose us -->
        <div class="why-choose-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="section-title col-12" data-aos="fade-up">
                        <h2><span>Why </span>Choose Us</h2>
                        <p>Description text here...</p>
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-lg-6 col-md-12">
                        <div class="common-cnt">
                            <div class="section-top" data-aos="fade-down">
                                <p>Our goal is to make sure<br> with advances in <br>technology, the patient recovers at a faster rate.</p>
                            </div>
                            <p data-aos="fade-down" data-aos-duration="3000">
                            	<ul style="list-style-type: none;color: white;" data-aos="fade-down" data-aos-duration="3000">
                            		<li>The staff of Sanjivani Hospital values Respect, Responsibility and Accountability, together with the development of talents and a sense of accomplishment.</li>
                            		<li>Our underlying principles are teamwork and cooperation, honesty, leadership and the development of a customer delight culture.</li>
                            		<li>We believe that it is important to provide a high quality service, to promote a learning environment, to be supportive of each other, and to behave in a professional manner at all times.</li>
                            		<li>We recognise our strengths and talents as being good communicators, being reliable, conscientious and innovative.</li>
                            		<li>We strive to be a team that is recognised by being high performing, proactive and committed to our work.</li>
                            </p>
                            <p>
                                <a class="btn btn-primary btn-round" data-aos="flip-up">More about practice</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="box-img" data-aos="fade-up" data-aos-duration="3000">
                            <img src="assets/images/why-choose-img.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="support-home text-center xl-slategray">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h4>We provide 24/7 customer support.</h4>
                        <p>Please feel free to contact us at (01) 234 5678 for emergency case.</p>
                        <a class="btn btn-primary btn-simple btn-round" href="javascript:void(0);">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php include('footer.php') ?>
<script src="assets/bundles/libscripts.bundle.js"></script>

<script src="assets/js/app.js"></script><!-- my js -->
<script src="assets/js/countto.js"></script>
</body>
</html>

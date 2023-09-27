<?php
include ("./includes/connection.php");

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Marosca - fishing boat</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
            /* popup message */
            #popupWrapper {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
                z-index: 9999;
                overflow: auto;
            }

            #popupContent {
                background-color: #fff;
                max-width: 80%;
                margin: 50px auto;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            }
            #popupcontent .close{
                display: flex;
                justify-content: space-around;
            }
            /* end popup message */
        </style>
    </head>
    <body id="page-top">
 <!-- header-->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html"><h1>MAROSCA</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#portfolio">trips</a></li>
                <li class="nav-item"><a class="nav-link" href="#about">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- end header -->
<!-- carousel-->

<header class="masthead">
    <div class="container">


        <div class="masthead-subheading">Welcome To marosca website</div>
        <div class="masthead-heading text-uppercase">Enjoy this summer with your family</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
    </div>
</header>
<!-- end carousel -->
<!-- Services-->
<section class="page-section" id="services">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Services</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">special request</h4>
                <p class="text-muted">you can order hard drinks (extra charge).</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">ease reservation</h4>
                <p class="text-muted">The easiest way to reservation from our website.</p>
            </div>
            <div class="col-md-4">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">Safety</h4>
                <p class="text-muted">The boat has all the safety equipment.</p>
            </div>
        </div>
    </div>
</section>
<!-- end service -->
 <!-- trips-->
 <section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Trips</h2>
            <h3 class="section-subheading text-muted">all of trips in here</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- trip item 1-->
                <div class="portfolio-item">
                    <img class="img-fluid" src="assets/img/trips/paradise island.jpg" alt="..." />
                    <!--  -->
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">paradise island</div>
                        <a class="btn btn-warning mt-2" href="reservation%20paradise.php">Reservation</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- trip item 2-->
                <div class="portfolio-item">
                        <img class="img-fluid" src="assets/img/trips/orange island.jpg" alt="..." />
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">orange island</div>
                        <a class="btn btn-warning mt-2" href="reservation%20orange.php">Reservation</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- trip item 3-->
                <div class="portfolio-item">
                        <div class="portfolio-hover">
                        <img class="img-fluid" src="assets/img/trips/fishing.jpg" alt="..." />
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">fishing</div>
                        <a class="btn btn-warning mt-2" href="reservation%20fishing.php">Reservation</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end trip -->
 <!-- About-->
 <section class="page-section" id="about">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase mb-5">About us</h2>
        </div>
        <!--  -->
        <div class="site-section">
            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <img src="assets/img/about/marosca.jpg" alt="Image" class="img-fluid">
                </div>
                <div class="welcome col-md-6">
                  <h3 class="heading-about">Welcome To Our Website</h3>
                  <p>At our website, we believe that the seas and oceans are a source of beauty, excitement and adventure.
                      Our site aims to provide exceptional marine experiences for travelers looking to explore our blue waters.
                      Whether you are looking for an exciting fishing trip, diving in the picturesque coral reefs,
                      or relaxing on board a luxury boat or Going on the famous islands,
                       we offer you a wide range of options to satisfy your desires.</p>
                  <p>Join us today and enjoy an unforgettable cruise under the leadership of an experienced and professional team.</p>
                </div>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="site-section bg-image overlay mt-5 numbers-trips ">
            <div class="container-fluid">
              <div class="row">
                <div class="col">
                  <div class="counter-39392">
                    <h3>2600</h3>
                    <span>Customers Satisfied</span>
                  </div>
                </div>
                <div class="col">
                  <div class="counter-39392">
                    <h3>150</h3>
                    <span>Sea Destinations</span>
                  </div>
                </div>
                <div class="col">
                  <div class="counter-39392">
                    <h3>2</h3>
                    <span>Professional Sailors</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--  -->
</section>
<!-- end about -->
<!-- Contact us-->

 <br>
<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">if you have problem contact us.</h3>
        </div>


        <?php

        if (isset($_POST['name'],$_POST['email'],$_POST['phone'],$_POST['message'])){
            $name=$_POST['name'];
            $mail=$_POST['email'];
            $phone=$_POST['phone'];
            $msg=$_POST['message'];

            $res=mysqli_query($con,"insert into `contact` (`name`,`email`,`phone`,`message`) values ('$name','$mail','$phone','$msg')");

            if (mysqli_affected_rows($con)) {
                //        echo "<script>  alert('Your Message Have been sent. The owner will contact you later') </script>";
                echo '  <style>
     .alert-card {
           position: absolute;
         
         align-items: center;
         width: 90%;
         padding: 20px;
         background-color: var(--bs-success);
         color: var(--bs-light);
         border: 1px solid #f5c6cb;
         border-radius: 4px;
     }

     .close-btn {
         position: absolute;
         top: 5px;
         right: 5px;
         cursor: pointer;
         font-size: 30px;
     }

     .message {
         font-size: 18px;
     }
     @keyframes slideIn {
         from {
             transform: translateY(-100%);
         }
         to {
             transform: translateY(0);
         }
     }

     .alert-card {
         animation: slideIn 0.5s;
     }
     @keyframes slideOut {
         from {
             transform: translateY(0);
             opacity: 1;
         }
         to {
             transform: translateY(-100%);
             opacity: 0;
         }
     }
 </style>


 <div class="alert-card">
     <span class="close-btn" style="font-size: 40px">&times;</span>
     <div class="message text-centre">Your Message Have Been Sent ... The Owner Will Contact You Later. </div>
 </div>



 <script>
 
     const closeBtn = document.querySelector(".close-btn");
     const alertCard = document.querySelector(".alert-card");

     closeBtn.addEventListener("click", () => {
         alertCard.style.animation = "slideOut 0.5s";
         setTimeout(() => {
             alertCard.style.display = "none";
         }, 500);
     });
 </script>';
            }
            else {
                echo ' <style>
     .alert-card {
               position: absolute;
             bottom: 20%;
             text-align: center;
             align-items: center;
             width: 100%;
             padding: 20px;
             background-color: var(--bs-danger);
             color: var(--bs-light);
             border: 1px solid #f5c6cb;
             border-radius: 4px;
     }

     .close-btn {
         position: absolute;
         top: 5px;
         right: 5px;
         cursor: pointer;
         font-size: 30px;
     }

     .message {
         font-size: 18px;
     }
     @keyframes slideIn {
         from {
             transform: translateY(-100%);
         }
         to {
             transform: translateY(0);
         }
     }

     .alert-card {
         animation: slideIn 0.5s;
     }
     @keyframes slideOut {
         from {
             transform: translateY(0);
             opacity: 1;
         }
         to {
             transform: translateY(-100%);
             opacity: 0;
         }
     }
 </style>


 <div class="alert-card">
     <span class="close-btn" style="font-size: 40px; margin-bottom: 50px" >&times;</span>
     <div class="message text-centre">There Was An Error ... Please Try Again. </div>
 </div>



 <script>
 
     const closeBtn = document.querySelector(".close-btn");
     const alertCard = document.querySelector(".alert-card");

     closeBtn.addEventListener("click", () => {
         alertCard.style.animation = "slideOut 0.5s";
         setTimeout(() => {
             alertCard.style.display = "none";
         }, 500);
     });
 </script>';

            }

        }
        ?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <form id="contactForm" class="contact-us" data-sb-form-api-token="API_TOKEN" method="post">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control" name="name" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" required/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" name="email" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" required/>
                        <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" name="phone" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" required/>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" name="message" id="message" placeholder="Your Message *" data-sb-validations="required"required></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
        </form>
    </div>
</section>
<!-- end contact us -->
<!-- Footer-->
<footer class="footer py-4 mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="powered col-lg-4 text-lg-start">website powered by: <a href="https://www.facebook.com/profile.php?id=61550122121352&mibextid=b06tZ0">iWeb</a></div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/Maroscafishing?mibextid=b06tZ0" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-success text-decoration-none me-3" href="https://wa.me/+201100848173">whatsapp: +2 01100848173</a>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
        <!-- Bootstrap core JS-->
        <script src="js/bootstrap.min.js"></script> 
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    </body>
</html>
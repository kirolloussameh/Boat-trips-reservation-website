<?php
include ("./includes/connection.php");


$price=mysqli_query($con,"select * from prices `orange`");

$data=[];
while ($row=mysqli_fetch_assoc($price)){
    $data[]=$row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
</head>
<body>
     <!-- header-->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="index.html"><h1>MAROSCA</h1></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="index.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">trips</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">Contact us</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- end header -->
 <!-- carousel-->
 <header class="masthead-paradise">
    <div class="container">


        <div class="masthead-subheading">Welcome To marosca website</div>
        <div class="masthead-heading text-uppercase">Enjoy this summer with your family</div>
    </div>
</header>
<!-- end carousel -->
<!-- gallery -->
<section class="gallery">
    <h1>gallery</h1>
    <h3 class="photo mt-3">some photos of our trips in paradise island</h3>
    <div class="card-group">
        <div class="card">
          <img src="assets/img/reservation photos/paradise1.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
          <img src="assets/img/reservation photos/paradise2.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
            <img src="assets/img/reservation photos/paradise3.jpg" class="card-img-top" alt="...">
          </div>
      </div>
      <!--  -->
      <div class="card-group mt-4">
        <div class="card">
          <img src="assets/img/reservation photos/paradise4.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
          <img src="assets/img/reservation photos/paradise5.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
          <img src="assets/img/reservation photos/paradise6.jpg" class="card-img-top" alt="...">
        </div>
      </div>
      <!--  -->
      <div class="card-group mt-4">
        <div class="card">
          <img src="assets/img/reservation photos/paradise7.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
          <img src="assets/img/reservation photos/paradise8.jpg" class="card-img-top" alt="...">
        </div>
        <div class="card">
          <img src="assets/img/reservation photos/paradise9.jpg" class="card-img-top" alt="...">
        </div>
      </div>
</section>
<!-- end gallery -->
<!-- package -->
<section class="package">
  <div class="head-title text-center">
      <h1>package</h1>
      <h3>one package only</h3>
  </div>
  <div class="container paradise-pack">
      <div class="card mb-3">
          <img src="assets/img/paradise island package/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">paradise island</h5>
            <h5 class="text-success"> <?php  foreach($data as $child){
                $pr=$child['paradise'];

                echo $pr."$";
                }
                ?></h5>
            <p class="card-text">paradise Island
                From 09:00am to 04:00pm.
                spend 2 Hours on paradise Island
                 Then 2 Snorkeling Stops.
                Trip includes  Lunch, Drinks, Fruits and you can order alcoholic beverages (extra charge), Snorkeling equipment.</p>
          </div>
          <div class="card">
              <ul class="list-group list-group-flush">
                <li class="list-group-item">7 Hours trip</li>
                <li class="list-group-item">starts at 9:00 AM</li>
              </ul>
            </div>
        </div>
  </div>
</section>
<!-- package -->
<!-- booking -->
<div id="booking" class="section">
    <div class="section-center">
        <div class="container">
            <div class="row">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Reservation your trip now</h1>
                    </div>
                    <form method="post">
                        <div class="form-group">
                            <input class="form-control" name="name" type="text" placeholder="Full Name" required>
                            <span class="form-label">fullname</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" name="date" type="date" required>
                                    <span class="form-label">Date</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="sel_adult" required>
                                        <option value="" selected hidden>no of adults</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Adults</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="sel_child" required>
                                        <option value="" selected hidden>no of children</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Children</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" placeholder="Enter your Email" required>
                                    <span class="form-label">Email</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="tel" name="tel" placeholder="Enter you Phone number" required>
                                    <span class="form-label">Phone number</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-btn">
                            <Input class="submit-btn" type="submit" value="Book Now">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end reservation -->
<!-- marosca information  -->
<section class="container marosca-boat-information">
    <div id="charter-description" class="translatable charter-data marosca-boat">
        <h5>marosca boat</h5>
        <p>Marosca Boat is located in Hurghada and offers to show you a memorable time in these waters.</p>
        <p>Come on aboard with the crew whose main priority is to get you on some fish. Expect to use techniques like bottom fishing, trolling, jigging, and popping,&nbsp; based on the species you&#8217;re targeting. Speaking of which, you have the option of an 8-hour trip, where you&#8217;ll be fishing for the likes of Barracuda, Amberjack, and Mahi Mahi, depending on the specific season and the day&#8217;s weather.</p>
        <p>You&#8217;ll be fishing from a 47&#8217; boat with enough room for up to 8 anglers at any single time. It also includes a toilet, and an ice box.</p>
        <p>The price of your trip includes all the rods, reels, and terminal tackle you&#8217;ll need for a productive day on the water.</p>
        <p>Your trip will include all the necessary fishing licenses for the day.</p>
        <p>You can keep anything you catch, as long as it&#8217;s legal to do so.</p>
        <p>The boat will be supplied with snacks, drinks, lunch for your pleasure, be sure to let the captain know if you have any questions or want to bring your own.</p>
        <p>Children are welcome aboard so you&rsquo;re good to get the young ones started early.</p>
        <p>Book your trip now and hit the water with Marosca Boat.</p> 
    </div>
<!-- end marosca information -->
    <!-- most popular -->
    <div class="visible-xs mt-3">
        <h5>most popular</h5>
        <ul class="most-popular-features-mobile text-success">
        <li class="most-popular-features-mobile-item">
        <i class="fas fa-file-invoice"></i>
        <div class="most-popular-features-mobile-desc">Fishing License</div>
        </li>
        <li class="most-popular-features-mobile-item">
        <i class="fas fa-glass-citrus"></i>
        <div class="most-popular-features-mobile-desc">Drinks</div>
        </li>
        <li class="most-popular-features-mobile-item">
        <i class="fas fa-check"></i>
        <div class="most-popular-features-mobile-desc">Toilet</div>
        </li>
        <li class="most-popular-features-mobile-item">
        <i class="fas fa-child"></i>
        <div class="most-popular-features-mobile-desc">Child Friendly</div>
        </li>
        <li class="most-popular-features-mobile-item">
        <i class="fas fa-swimmer"></i>
        <div class="most-popular-features-mobile-desc">Snorkeling Equipment</div>
        </li>
        <li class="most-popular-features-mobile-item">
        <i class="fas fa-snowflake"></i>
        <div class="most-popular-features-mobile-desc">Ice Box</div>
        </li>
        <li class="most-popular-features-mobile-item">
        <i class="fas fa-check"></i>
        <div class="most-popular-features-mobile-desc">Rods, reels & tackle</div>
        </li>
        <li class="most-popular-features-mobile-item">
        <i class="fas fa-burger-soda"></i>
        <div class="most-popular-features-mobile-desc">Food (Lunch & Snacks)</div>
        </li>
        </ul>
        </div>
        </div>
</section>
<!-- end popular  -->
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
<?php
if (isset($_POST['name'],$_POST['tel'],$_POST['email'],$_POST['sel_child'],$_POST['sel_adult'],$_POST['date'])) {
//$name=$_POST['name'];
    $email = $_POST['email'];
//$tel=$_POST['tel'];
//$child=$_POST['sel_child'];
//$adult=$_POST['sel_adult'];
    $date = $_POST['date'];

     $host="";
     $username="";
     $pass="";
     $db="";

    $con1= mysqli_connect($host,$username,$pass,$db);
    $res3 = mysqli_query($con1, "select * from `paradise` where `date`='$date'  && `email`='$email'  ");
    if ($row3 = mysqli_num_rows($res3)) {

        die ( '<style>
         .alert-card {
             position: absolute;
             bottom:96%;
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
     </head>
     <body>
     <div class="alert-card">
         <span class="close-btn">&times;</span>
         <div class="message text-centre">This Date is already Reserved & This Email Is Already used...Please Enter Another Date & Email</div>
     </div>
     <!-- ////// -->
     <script>
         const closeBtn = document.querySelector(".close-btn");
         const alertCard = document.querySelector(".alert-card");

         closeBtn.addEventListener("click", () => {
             alertCard.style.animation = "slideOut 0.5s";
             setTimeout(() => {
                 alertCard.style.display = "none";
             }, 500);
         });
     </script>');



    }


    $res2 = mysqli_query($con1, "select * from `paradise` where `email`='$email'");
    if ($row2 = mysqli_num_rows($res2)) {

        echo'<style>
         .alert-card {
             position: absolute;
             bottom: 96%;
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
     </head>
     <body>
     <div class="alert-card">
         <span class="close-btn">&times;</span>
         <div class="message text-centre">This Email is Already Used.. please Enter Another Email</div>
     </div>
     <!-- ////// -->
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
        die("");
    }

    $res1 = mysqli_query($con1, "select * from `paradise` where `date`='$date'");
    if ($row1 = mysqli_num_rows($res1)) {

        echo'<style>
         .alert-card {
             position: absolute;
             bottom: 96%;
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
     </head>
     <body>
     <div class="alert-card">
         <span class="close-btn">&times;</span>
         <div class="message text-centre">This Date is Already Reserved .. please Enter Another Date</div>
     </div>
     <!-- ////// -->
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
        die("");
    }

    $res4 = mysqli_query($con1, "select * from `orange` where `date`='$date'");
    if ($row4 = mysqli_num_rows($res4)) {

        echo'<style>
         .alert-card {
             position: absolute;
             bottom: 96%;
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
     </head>
     <body>
     <div class="alert-card">
         <span class="close-btn">&times;</span>
         <div class="message text-centre">This Date is Already Reserved .. please Enter Another Date</div>
     </div>
     <!-- ////// -->
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
        die("");
    }

    $res5 = mysqli_query($con1, "select * from `fishing` where `date`='$date'");
    if ($row5 = mysqli_num_rows($res5)) {

        echo'<style>
         .alert-card {
             position: absolute;
             bottom: 96%;
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
     </head>
     <body>
     <div class="alert-card">
         <span class="close-btn">&times;</span>
         <div class="message text-centre">This Date is Already Reserved .. please Enter Another Date</div>
     </div>
     <!-- ////// -->
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
        die("");
    }
}

?>

<?php


if (isset($_POST['name'], $_POST['tel'], $_POST['email'], $_POST['sel_child'], $_POST['sel_adult'], $_POST['date'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $child = $_POST['sel_child'];
    $adult = $_POST['sel_adult'];
    $date = $_POST['date'];

    $res = mysqli_query($con, "insert into `paradise` (`username`,`email`,`user_tel`,`num_child`,`num_adult`,`date`) values ('$name','$email','$tel','$child','$adult','$date');");

    if (mysqli_affected_rows($con)) {
        //        echo "<script>  alert('Your Message Have been sent. The owner will contact you later') </script>";
        echo '  <style>
     .alert-card {
           position: absolute;
         text-align: center;
         bottom:96%;
         align-items: center;
         width: 100%;
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
     <div class="message text-cente">Your Reservation Have Been Sent ... The Owner Will Contact You To Confirm It. </div>
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
             bottom: 96%;
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
</body>
</html>
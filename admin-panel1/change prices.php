<?php
include ("./includes1/connection.php");

if (!isset($_SESSION['admin'])){
?>


<script>  window.location="login.php";</script>
 <?php
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <title>Marosca-admin panel</title>
</head>
<body>
<!-- header -->
<header>
  <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand">Marosca admin panel</a>
          <img src="assets/img/account%20photo.jpg" alt="">
      </div>
    </nav>
</header>
<!-- end header -->
<!-- package -->
<section class="mt-5">
    <?php
    if (isset($_POST['silver'],$_POST['gold'],$_POST['vip'],$_POST['orange'],$_POST['paradise'])) {
        $silver = $_POST['silver'];
        $gold = $_POST['gold'];
        $vip = $_POST['vip'];
        $orange = $_POST['orange'];
        $paradise = $_POST['paradise'];
        $res1=mysqli_query($con,"delete from `prices`");
        $res = mysqli_query($con, " insert into prices (silver,gold,vip,orange,paradise) values ('$silver','$gold','$vip','$orange','$paradise');");


        if (mysqli_affected_rows($con)){
            echo '<style>
.alert-card {
  position: absolute;
  display: flex;
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
  top: 2px;
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
        <div class="message text-centre"> Changing Prices Is Completed</div>
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
        else{
            echo '    <style>
.alert-card {
  position: relative;
  display: flex;
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
        <div class="message text-centre"></div>
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
        }
    }

    ?>
<br>

  <div class="head-title mt-5 text-center">
      <h1>DashBoard</h1>
  </div>
  <div class="container cards-packages mt-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card text-center text-bg-primary">
              <div class="card-body">
                <h5 class="card-title">fishing packages</h5>
              </div>
              <div class="card ">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-primary"><a href="trip%20silver.php">trip silver</a></li>
                    <li class="list-group-item bg-primary"><a href="trip%20gold.php">trip gold</a></li>
                    <li class="list-group-item bg-primary"><a href="trip%20vip.php">trip vip</a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center text-bg-warning">
              <div class="card-body">
                <h5 class="card-title" style="color: white;">orange package</h5>
              </div>
              <div class="card">
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item bg-warning"><a href="orange%20trip.php">orange</a></li>
                  </ul>
                </div>
            </div>
          </div>
          <div class="col">
            <div class="card text-center text-bg-info">
              <div class="card-body">
                <h5 class="card-title" style="color: white;">paradise package</h5>
              </div>
              <div class="card">
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item bg-info"><a href="paradise%20trip.php">paradise</a></li>
                  </ul>
                </div>
            </div>
          </div>
          <!-- edit card -->
          <div class="col">
            <div class="card text-center text-bg-success">
              <div class="card-body">
                <h5 class="card-title">Edit & contact us</h5>
              </div>
              <div class="card ">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item bg-success"><a href="change%20prices.php">change prices</a></li>
                    <li class="list-group-item bg-success"><a href="contact%20us.php">contact us</a></li>
                    <li class="list-group-item bg-success"><a href="includes1/logout.php">log out</a></li>
                  </ul>
                </div>
            </div>
          </div>
      </div>
</section>
<!-- end package -->
<!-- form -->
<section>
  <div class="container">

    <form action="" method="post">

      <h1 class="text-center">change prices</h1>
      <div class="form-group">
        <label for="name">trip silver</label>
        <input type="number" class="form-control" name="silver" placeholder="trip silver*" required>
      </div>
      <div class="form-group">
        <label for="email">trip gold*</label>
        <input type="number" class="form-control" name="gold" placeholder="trip gold*" required>
      </div>
      <div class="form-group">
          <label for="">trip vip*</label>
          <input type="number" class="form-control" name="vip" placeholder="trip vip*" required>
        </div>
        <div class="form-group">
          <label for="">orange*</label>
          <input type="number" class="form-control" name="orange" placeholder="orange*" required>
        </div>
        <div class="form-group">
          <label for="pwd">paradise*</label>
          <input type="number" class="form-control" name="paradise" placeholder="paradise*" required>
        </div>
<div class="button text-center mt-5">
      <input type="submit" value="Change" class="btn btn-primary text-center mt-3" style="font-size: 25px; width:50%; ">
</div>
    </form>
  </div>
</section>
<!-- end form -->
<!-- Footer-->
<footer class="footer bg-dark text-center text-white mt-5">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4 media">
      <p class="d-flex justify-content-center align-items-center">
        <button type="button" class="btn btn-outline-light btn-rounded">
          <a href="https://www.facebook.com/Maroscafishing?mibextid=b06tZ0">facebook</a>
        </button>
      </p>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3 powered" style="background-color: rgba(0, 0, 0, 0.2);">Website powered by: <a href="https://www.facebook.com/profile.php?id=61550122121352&mibextid=b06tZ0">iWeb</a></div>
  <!-- Copyright -->
</footer>
<!-- end footer -->
    <script src="js/scripts.js"></script>
</body>
</html>
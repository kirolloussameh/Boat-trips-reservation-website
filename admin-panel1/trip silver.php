<?php
include ("includes1/connection.php");


if (!isset($_SESSION['admin'])){
?>


<script>  window.location="login.php";</script>
 <?php
}



$res=mysqli_query($con,"select * from `fishing` where categorie='trip silver'");
$data=[];
while($row=mysqli_fetch_assoc($res)){
    $data[]=$row;
}

if (isset($_POST['delete'])) {
    $res = mysqli_query($con, "delete from `fishing` where categorie='trip silver';");

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
          <img src="assets/img/account photo.jpg" alt="">
           
      </div>
    </nav>
</header>
<!-- end header -->
<!-- package -->
<section class="mt-5">
  <div class="head-title mt-5 text-center">
      <h1>DashBoard</h1>
  </div>
  <div class="container cards-packages mt-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
          <div class="col">
            <div class="card text-center text-bg-primary">
              <div class="card-body">
                <h5 class="card-title" style="color: white;">fishing packages</h5>
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
<!-- tables of reservation clients -->
<section class="mt-5">
  <div class="header-table">
        <h1 class="text-center">clients reservation in trip silver package</h1>
  </div>
  <div class="container table-cont mt-5">
     <table class="table table-striped table-bordered"> 
      <thead class="thead-dark bg-black">
        <tr>
          <th class="text-light bg-dark" scope="col">fullname</th>
          <th class="text-light bg-dark" scope="col">email</th>
          <th class="text-light bg-dark" scope="col">phone number</th>
          <th class="text-light bg-dark" scope="col">no.adults</th>
          <th class="text-light bg-dark" scope="col">no.children</th>
          <th class="text-light bg-dark" scope="col">package</th>
          <th class="text-light bg-dark" scope="col">date</th>

        </tr>
      </thead>
      <tbody>
      <?php
      foreach ($data as $child ){
          $name=$child['username'];
          $email=$child['email'];
          $tel= $child['user_tel'];
          $num1= $child['num_adult'];
          $num2=$child['num_child'];
          $date=$child['date'];
          $package=$child['categorie'];
          echo "     <tr>
          <td>  $name</td>
          <td>$email</td>
          <td>  $tel</td>
          <td> $num1</td>
          <td>$num2</td>
          <td> $package  </td>
          <td>$date</td>
      
        </tr>";
      }
      ?>

      </tbody>
    </table>


  </div>
</section>

<div class="d1" style="text-align: center; ">
    <form method="post"  style="margin-bottom:200px ;">
    <input type="hidden" value="1" name="delete">
    <input type="submit" class="btn btn-danger" value="Delete All" style="font-size: 30px;">
    </form>
</div>
<!-- end table -->
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

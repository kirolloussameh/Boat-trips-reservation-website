<?php
include ("./includes1/connection.php");


if (!isset($_SESSION['admin'])){
?>


<script>  window.location="login.php";</script>
 <?php
}

$res=mysqli_query($con,"select * from `contact`");
$data=[];

while ($row=mysqli_fetch_assoc($res)){
    $data[]=$row;

}

if (isset ($_POST['delete'])) {
  $res = mysqli_query($con, "delete  from `contact` ;");
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
<section>
    <h1 class="text-center mt-5">contact us messages</h1>
    <div class="container mt-5">

        <br>
        <br>
        <div class="row row-cols-1 row-cols-md-3 g-4">

<?php
foreach ($data as $child){
    $name=$child['name'];
    $email=$child['email'];
    $tel= $child['phone'];
$message=$child['message'];

    echo'        <div class="col">
                <div class="card">
                    <div class="card-body">
                      <h5 class="card-title">'.$name.'</h5>
                      <p class="card-text">'.$email.'</p>
                      <p class="card-text">'.$tel.'</p>
                      <h5>--> Message Is:</h5>
                    <p class="card-text">'.$message.'</p>
                    </div>
                  </div>
            </div>
         ';}
?>
        </div>


        </div>

        <!-- in container -->
    </div>
</section>

<div class="d1" style="text-align: center; ">
    <form  method="post"  style="margin-bottom:200px ;">
    <input type="hidden" value="1" name="delete">
        <input type="submit" class="btn btn-danger" value="Delete All" style="font-size: 30px;">
    </form>
</div>
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

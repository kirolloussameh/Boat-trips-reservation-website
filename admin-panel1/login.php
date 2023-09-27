<?php
include ("./includes1/connection.php");
if (isset($_SESSION['admin'])){

?>

<script>window.location="index.php";  </script>

<?php
} else{


if (isset($_POST['name'],$_POST['pass'])){

    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $res=mysqli_query($con,"select * from `admin` where username='$name' && password='$pass'");
    if (mysqli_num_rows($res)){
        $data=(mysqli_fetch_assoc($res));
        $_SESSION['admin']=$data;
        echo "<script> alert('You have Logged in') </script>";

        ?>

      <script>window.location="index.php";</script>

<?php
    }else{


            echo '<style>
         .alert-card {
             position: absolute;
             bottom:88%;
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
         <div class="message text-centre">This Username Or This Password Is Incorrect.. Please Try Again </div>
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
<br>
<br>
<section class="login">
    <div class="container">
        <div class="row justify-content-center mt-5">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header bg-primary text-center">
               Marosca Login
              </div>
              <div class="card-body">
                <form method="post">
                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="name" placeholder="Enter username" required>
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password" required>
                  </div>
                  <Input type="submit" class="btn btn-primary mt-4" value="Login" name="submit">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
</section>

  <!-- Include Bootstrap JS -->
  <script src="js/scripts.js"></script>
</body>

</html>

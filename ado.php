<?php
$cn = mysqli_connect("localhost", "root", "", "ambia_madrasa_database");


?>



<!doctype html>
<html lang="en">

<head>
    <!--============================== Required meta tags ===========================-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--============================= Fonts =======================================-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,300i,400,700" rel="stylesheet">

    <!--============================= CSS =======================================-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="addmisson.css">

    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>

    <title>Student Management</title>
   
    <style type="text/css">
     .block {
  display: block;
  width: 100%;
  border: none;
  background-color: #04AA6D;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  font-weight: bold;
  text-decoration: none;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
 .wel{
    
    font-size: 30px;
    font-weight: bold;
   color: white;
  background-color:#1d878f ;
  padding: 15px;
   
}
.q {
  font-size: 15px;
  margin-left: 1234px;
 padding-bottom: 25px;
}
a{
   color: white;
   font-weight: bold;
    text-decoration: none;
}
.btnn {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
  margin-left: 1400px;
  margin-bottom: 50px;
}

/* Darker background on mouse-over */
.btnn:hover {
  background-color: RoyalBlue;
}   
.header-area {
border-bottom: 6px solid #1d878f;
}
.fa-sign-out{
    transform: rotateZ(180deg);
}
    </style>
</head>

<body>
    <div class="wel"> Admin(Admission) <a href="1_admin.php"><i  style="margin-left: 1200px;color: white;" class="fa fa-sign-out" aria-hidden="true"></i></a></div>
<!--<button class="btnn"><a href="1_admin.php"><i class="fa fa-close"></a></i></button>-->
    <!--================= Header-area ======================-->
    <div style="background-color: white";class="header-area header-absoulate">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="logo">
                        <a href="">
                           
                            <span></span>
                        </a>
                    </div>
                </div>

    <!--================== Main menu-area ====================-->
                <div class="col-md-7">
                    <div class="main-menu">
                        <?php include('component/menu.php'); ?>
                    </div>
                </div>
                <div class="col-md-1 text-right">
                    <span class="social-icon">
                        
                    </span>
                </div>
            </div>
        </div>
    </div>
    <!--======================= Slide-area =======================-->
    
    <h1 style="color: white;">.</h1>
    <!--=========================== Content-area ============================-->
    <div class="content-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">

                    <?php include ('component/controller.php'); ?>

                </div>
            </div>
        </div>
    </div>
    <!--========================== Footer-area ===============================-->
    


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>

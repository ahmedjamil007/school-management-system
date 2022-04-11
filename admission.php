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
     <link rel="stylesheet" type="text/css" href="slider.css">
      <link rel="stylesheet" href="card.css">
      <link rel="stylesheet" type="text/css" href="depatmentcard.css">
    <link rel="stylesheet" href="addmisson.css">
 <link rel="stylesheet" href="style.css">
    <script src="assets/js/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

    <title>Admission</title>
    <link rel="shourtcut icon" type="image/png" href="assets/img/favicon.">
    <style >.title-word {
  animation: color-animation 4s linear infinite;
}

.title-word-1 {
  --color-1: #41729F;
  --color-2: #3D8DAE;
  --color-3: #050A30
}

.title-word-2 {
  --color-1: #5885AF;
  --color-2: #ACCFCB;
  --color-3: #2E8BC0
}

.title-word-3 {
  --color-1: #274472;
  --color-2: #E4A9A8;
  --color-3: #0C2D48
}

.title-word-4 {
  --color-1: #189AB4;
  --color-2: #DF8453;
  --color-3:#145DA0;
}

@keyframes color-animation {
  0%    {color: var(--color-1)}
  32%   {color: var(--color-1)}
  33%   {color: var(--color-2)}
  65%   {color: var(--color-2)}
  66%   {color: var(--color-3)}
  99%   {color: var(--color-3)}
  100%  {color: var(--color-1)}
}

/* Here are just some visual styles. 🖌 */



.title {
  font-family: "Montserrat", sans-serif;
  font-weight:bold;
  font-size: 20px;
  text-transform: uppercase;
  text-align: center;
}</style>
</head>

<body>
    <a href="#" id="scroll" style="display: none;"><span></span></a>
    <nav>
             <div class="logo"style="height: 125PX;width: 145px;" ><img src="25193811312150139423257623658883576468362228n280x250.png"></div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="open admission.php">Admission</a></li>
               
                <li><a href="ibtedia1-5 - Copy.php">Teachers</a></li>
                  <li><a href="gallary.php">Gallary</a>

                </li>
                <li><a href="committes.php">Committee</a></li>
                <li><a href="display_pdf.php">Notice and news</a></li>
                
                
                <div class="closeMenu"><i class="fa fa-times"></i></div>
                <span class="icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-github"></i>
                </span>
            </ul>
        </nav>
    <!--
    
        <a href="#" id="scroll" style="display: none;"><span></span></a>
    <!--================= Header-area ======================-->
     <!-- <nav  class="navbar navbar-expand-lg navbar-dark bg-dark dark">
  <a class="navbar-brand" href="#"><img style="height: 100px;" src="islahul-ummah-model-madrasah-logo-92486A331E-seeklogo.com.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" " id="navbarNavAltMarkup">
    <div class="navbar-nav"style=" margin-right: 40px;color: white;font-size: 20px; >
      <a class="nav-item nav-link  " href="index.php"> <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="index.php">Home</a>
      <a class="nav-item nav-link" href="admission.php">ADDMISSION</a>
      <a class="nav-item nav-link" href="#">DEOARTMENT</a>
      <a class="nav-item nav-link" href="#">COMMITTIES</a>
      <a class="nav-item nav-link" href="ado.php">NOTICE AND NEWS</a>
      
    </div>
  </div>
-->
    <!--======================= Slide-area =======================-->
    <div class="welcome-area">
        <div class="owl-carousel slider-content">
            <div class="single-slider-item slider-bg-1">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                    <h2>Knowledge from which no benefit is derived is like a treasure out of which nothing is spent in the cause of God
                                  

                                        <br><i>----Prophet Muhammad (pbuh)</i>
                                    </h2>

                                    <a href="https://blog.hubspot.com/sales/famous-quotes" class="boxed-btn">learn more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider-item slider-bg-2">
                <div class="slider-inner">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slide-text">
                                   
                                    <h2>  The greatest glory in living lies not in never falling, but in rising every time we fall. -Nelson Mandela

                                        <br><i>---Nelson Mandela</i>
                                    </h2>

                                    <a href="https://preronajibon.com/apj-abdul-kalam-quotes/?fbclid=IwAR2YuYWGjJHbxcGGogQr2cIJ2BIyIddufSep7cAMW7777dXwCvkYpbHfTqs" class="boxed-btn">learn more <i class="fa fa-long-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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





    <div class="container"style="background-color: #f2e9e9; border-top-style: solid;border-top-color: #05445E;">
  <h2 class="title">
    <span class="title-word title-word-1">If you want to admitted</span>
    <span class="title-word title-word-2">Pre-Primary then write</span>
    <span class="title-word title-word-3"style="font-size: 40px;"> "0"</span>
    <span class="title-word title-word-4"> in class box</span>
  </h2>
</div>
    <!--========================== Footer-area ===============================-->

    <footer style="background-color:  #050A30;">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget">
                        <div class="logo"style="height: 145px;width: 175px;">
                            <a href=""><img src="25193811312150139423257623658883576468362228n280x250.png">
                                
                            </a>
                          

                               
                            </p>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-3">
                    <h3 style="color: white;padding-left: 5px;">ADDRESS</h3>
                    <span class="social-icon">
                        <p style="padding: px;color: white;font-size: 15px;">Kaliajury,Mazar road</p>
                        <p style="padding: px;color: white;font-size: 15px;">Cumilla</p>
                    </span>
                </div>
                  <div class="col-md-3">
                    <h3 style="color: white;">Contact Us</h3>
                    <p style="color: white;">Email : info@primrose.edu.bd</p>
                    <p style="color: white;">Phone : 081-73920</p>
                    <p style="color: white;">Mobile: 01951894007</p>
                </div>
               <div class="col-md-3">
                    <h3 style="color:  #050A30;">Contact Us</h3>
                    <p style="color:  #050A30;font-size: 15px;">©Team Multiverse</p>
                     <p style="color: white;font-size: 15px;">©PrimRose</p>
                </div>
            </div>
        </div>
        <?php include('component/menu.php'); ?>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="app.js"></script>
    <script src="assets/js/popper-1.12.9.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
     <script > 

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});


    </script>
     <script > 

$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 100) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});


    </script>

</body>

</html>

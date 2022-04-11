
<!DOCTYPE html>
<html>
<head>
  <title>News and notice</title>
  <link rel="stylesheet" type="text/css" href="about.css">
  <link rel="stylesheet" type="text/css" href="resp.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style >
    .text-line {
  stroke-dasharray: 500;
  stroke-dashoffset: 500;
  animation: dash 5s linear forwards, filling 5s ease-in forwards;
  font-size: 80px;
}

    .text-line text {
  font-family: Helvetica,Arial,sans-serif;
  font-weight: normal;
  font-style: normal;
}

@keyframes dash {
  to {
    stroke-dashoffset: 0;
  }
}

@keyframes filling {
  0%, 90% { fill: #050A30; fill-opacity: 0; }
  100% { fill: #050A30; fill-opacity: 1; }
}
      embed{
        border: 5px solid black;
        margin-top: 30px;

      }
      .div1{
        margin-left: 170px;
        margin-left: 10px;
      }
      section{
  width:560px;
  display:flex;
  justify-content:space-between;
}
button{
  font-size:20px;
  border:none;
  padding:16px 40px 16px 40px;
  border-radius:5px;
    box-shadow:0px 10px 0px 0px #1d7f8a, 
      0px 0px 10px 0px rgba(120, 120, 120, 0.4);
  color:white;
  background:#239dab;
  cursor:pointer;
  transition:all 0.16s;
  position:relative;
  top:0;
  font-weight: bold;
}
button:focus{
  outline:none;
}
button:active{
  box-shadow: 0px 5px 0px 0px #1d7f8a;
  top:5px;
}

.loading-button.red{
  background:#d03651;
  box-shadow:0px 10px 0px 0px #a72b41,
    0px 0px 10px 0px rgba(120, 120, 120, 0.4);;
}

.loading-button.red:active{
  box-shadow: 0px 5px 0px 0px #d03651;
}

.loading-button.green{
  background:#050A30;
  box-shadow:0px 10px 0px 0px #050A30,
    0px 0px 10px 0px rgba(120, 120, 120, 0.4);;
}

.loading-button.green:active{
  box-shadow: 0px 5px 0px 0px #050A30;
}
   
hr.new5 {
  border: 10px solid #050A30;
  border-radius: 5px;
  margin-top: 10px;
  margin-bottom: 10px;
}
 @media only screen and (max-width: 800px) {



h1{
  font-size: 18px;
}
embed {
    width: 350px;
    height: 200px;
}

}
    </style>
</head>
<body style="background-color: #E8EEF1;font-family: arial,sans-serif,helvetica;">
<a href="#" id="scroll" style="display: none;"><span></span></a>
<div class="loader">
      <div></div>
      <div> </div>
      <div> </div>
      <div> </div>
      <div> </div>
    </div>


        <nav>
    <div class="logo"style="height: 125PX;width: 145px;" ><img src="25193811312150139423257623658883576468362228n280x250.png"></div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="open admission.php">Admission</a></li>
                <li><a href="ibtedia1-5 - Copy.php">Teachers</a></li>
                <li><a href="gallary.php">Gallary</a>

                </li>
                <li><a href="committes.php">Committees</a></li>
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
<div class="container">


  


 
  <main style="background-color:white;">


 <h1 align="center"><a href="#" class="effect-underline">Notice and news<span style="color:#145DA0;">(Pre-Primary)</span></a></h1>
   <!-- <svg height="100" stroke="#7EC8E3" stroke-width="2" class="text-line" width="100%"><text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">Notice and news</text></svg>-->



    <!--<section style="margin-top: 20px;margin-bottom: 10px;">
  <button class="red loading-button"><a href="display_pdf.php"style="color: white;"> Pre-primary</a></button>
  <button class="loading-button"><a href="primarypdfshow.php"style="color: white;">Primary</a></button>
  <button class="green loading-button"><a href="secondarypdfshow.php"style="color: white;">Secondary</a></button>
</section>-->


    <div class="about"><div class="div1">
      <?php
      include 'db.php';

      $sql="SELECT pdf,Date from pdf_file ORDER BY id  DESC";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
                
        <p style="border-radius: 25px;background: #050A30;color: whitesmoke;font-weight: bold;width: 300px"> Upload time-<?php echo $info['Date']; ?></p>
      <embed type="application/pdf" src="pdf/<?php echo $info['pdf'] ; ?>" width="700" height="300">
          <hr class="new5">
    <?php
      }



      ?>

    </div>
</div>
  </main>



<!--<div id="sidebar">
<p style="font-size:20px">Notices of closure of students of all departments of PrimRose Kindergarten & School, notices of various cultural events, pdf of class routines are given here. All students are requested to collect notices of their respective departments from here.</p>

  </div>-->
   <div id="sidebar">
<div style="background-color: #189AB4;font-weight:bold;">  <a style="color: white;font-size: 25px;" class="sub_nav_link" href="display_pdf.php">Pre-Primary</a> </div>
      <div style="background-color: #7EC8E3;font-weight:bold;">  <a style="font-size: 25px;" class="sub_nav_link" href="primarypdfshow.php">Primary</a> </div>
      <div  style="background-color: #189AB4;font-weight:bold;"> <a style="color: white;font-size: 25px;" class="sub_nav_link" href="secondarypdfshow.php">Secondary</a></div>
      
     


  </div>






 

  










  <footer style="background-color: #050A30;
  ">
<div class="nested">
    <div><img src="25193811312150139423257623658883576468362228n280x250.png" alt="" width="180" height="220"> </div>
      <div style="color: white;margin-top: 40px;"> <h3 style="text-align: CENTER;font-size: 20px;" >ADDRESS</h3>
    
     
     <div style="padding: 10px;text-align: center;">Kaliajury,Majar road</div>
          <div style="padding: 10px;text-align: center;">Cumilla</div>
    </div>
     <div style="color: white;margin-top: 40px;"> <h3 style="text-align: center;font-size: 20px">CONTACT US</h3>
    
     
      <div style="padding: 10px;text-align: center;" >Email : info@primrose.edu.bd</div>
      <div style="padding: 10px;text-align: center;">Phone : 081-73920</div>
      <div style="padding: 10px;text-align: center;">Mobile: 01951894007</div></div>



      <div> <div style="color: #050A30;padding-bottom: 15px;">©Team Multiverse</div>

<div style="color: #050A30;padding-bottom: 15px;">©Team Multiverse</div>
<div style="color: #050A30;padding-bottom: 15px;">©Team Multiverse</div>
<div style="color:white;padding-bottom: 15px;">©PrimeRose</div>

    </div>
    </div>


   </footer>




   
  <script src="app.js"></script>
 <script type="text/javascript">
    setTimeout(function(){
      $('.loader').fadeToggle();
    },3000);
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
</div>
</body>
</html>
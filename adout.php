<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="resp.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
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

@media only screen and (max-width: 800px) {

  
h1{
  font-size: 15px;
}

}

</style>

<body style="background-color: #E8EEF1;font-family: arial,sans-serif,helvetica;">
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
                <li><a href="ibtedia1-5 - Copy.php">Teachers</a>

  </div>

                </li>
                 <li><a href="gallary.php">Gallary</a></li>
                <li><a href="committes.php">committee</a></li>
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





 
  

<main>

<div >
  <h1 align="center"><a href="#" class="effect-underline">About PrimRose</a></h1>
  <!--<svg height="100" stroke="#7EC8E3" stroke-width="2" class="text-line" width="100%"><text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">ABOUT PRIMROSE</text></svg>-->

</div>

    
    <div class="about"><p>PrimRose Kindergarten & Schoolwas established on March 15, 2015.It is located kaliajury majar,road Cumilla.The School provides education to its students in Bengali (Morning & Day) and English (Morning & Day) language versions under the national curriculum. Students are admitted into the institution in Pre-primary, Primary and secondary branches. The School has around 400 students and employees more than 15 teaching staff and more than 25 other staff.</p></div>

    <div class="about"><p>The construction of the main academic building was completed in 2015 and the secondary section was formally inaugurated in the academic year 2017 by the founder X .Due to acute shortage of infrastructural facilities, another development project for the construction of a new building was taken up in 2018 which was completed in two phases and the campus took its present shape in 2020</p></div>
    <div class="about"><p>Admission to PrimRose Kindergarten & School is competitive.Applicants have to pass a written test and an oral test in order to qualify. Admission tests for the primary and secondary is generally held in December and academic sessions begin in January.</p></div>

  </main>








  <div id="sidebar">
<div>  <a class="sub_nav_link" href="open admission.php">Addmission</a> </div>
      <div>  <a class="sub_nav_link" href="ibtedia1-5 - Copy.php">Teachers</a> </div>
      <div>  <a class="sub_nav_link" href="gallary.php">Gallary</a> </div>
      <div> <a class="sub_nav_link" href="committes.php">Committees</a></div>
      <div><a class="sub_nav_link" href="display_pdf.php">Notice and news</a></div>
  


  </div>

  


  










  <footer style="background-color: #050A30">
<div class="nested">
    <div style="margin-bottom: 30px;"><img src="25193811312150139423257623658883576468362228n280x250.png" alt="" width="180" height="220"> </div>
      <div style="color: white;margin-top: 40px;"> <h3 style="text-align: CENTER;font-size: 20px;" >ADDRESS</h3>
    
     
     <div style="padding: 10px;text-align: center;">Kaliajury, Majar road,</div>
          <div style="padding: 10px;text-align: center;">Cumilla</div>
    </div>
     <div style="color: white;margin-top: 40px;"> <h3 style="text-align: center;font-size: 20px">CONTACT US</h3>
    
     
      <div style="padding: 10px;text-align: center;" >Email : info@primrose.edu.bd</div>
      <div style="padding: 10px;text-align: center;">Phone : 081-73920</div>
      <div style="padding: 10px;text-align: center;">Mobile: 01951894007</div></div>



      <div> <div style="color: #050A30;padding-bottom: 15px;">©PrimRose</div>

<div style="color: #050A30;padding-bottom: 15px;">©Team Multiverse</div>
<div style="color: #050A30;padding-bottom: 15px;">©Team Multiverse</div>
<div style="color:white;padding-bottom: 15px;">©PrimRose</div>

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
</div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="slider.css">
      <link rel="stylesheet" href="card.css">
      <link rel="stylesheet" type="text/css" href="tt.css">
      <link rel="stylesheet" type="text/css" href="depatmentcard.css">
      <link rel="stylesheet" type="text/css" href="fotter.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
</head>
<style> 
  body,
html {
    

  height: 100%;

    background-image: linear-gradient(
            135deg,
            rgba(159, 159, 159, 0.46) 0%,
            rgba(159, 159, 159, 0.46) 14.286%,
            rgba(165, 165, 165, 0.46) 14.286%,
            rgba(165, 165, 165, 0.46) 28.572%,
            rgba(171, 171, 171, 0.46) 28.572%,
            rgba(171, 171, 171, 0.46) 42.858%,
            rgba(178, 178, 178, 0.46) 42.858%,
            rgba(178, 178, 178, 0.46) 57.144%,
            rgba(184, 184, 184, 0.46) 57.144%,
            rgba(184, 184, 184, 0.46) 71.43%,
            rgba(190, 190, 190, 0.46) 71.43%,
            rgba(190, 190, 190, 0.46) 85.716%,
            rgba(196, 196, 196, 0.46) 85.716%,
            rgba(196, 196, 196, 0.46) 100.002%
        ),
        linear-gradient(
            45deg,
            rgb(252, 252, 252) 0%,
            rgb(252, 252, 252) 14.286%,
            rgb(246, 246, 246) 14.286%,
            rgb(246, 246, 246) 28.572%,
            rgb(241, 241, 241) 28.572%,
            rgb(241, 241, 241) 42.858%,
            rgb(235, 235, 235) 42.858%,
            rgb(235, 235, 235) 57.144%,
            rgb(229, 229, 229) 57.144%,
            rgb(229, 229, 229) 71.43%,
            rgb(224, 224, 224) 71.43%,
            rgb(224, 224, 224) 85.716%,
            rgb(218, 218, 218) 85.716%,
            rgb(218, 218, 218) 100.002%
        );
}


.op{
  font-family: Roboto, sans-serif;
  font-size: 23px;
  text-align: center;
  background-color:  #383838;
  padding-top: 10px;
  padding-bottom: 10px;
  text-shadow: 3px 3px #a83246;
 font-weight: bold;
  color: #D4F1F4;
}
 
  @media only screen and (max-width: 800px) {


    }

 
         </style>
<body style="font-family: Franklin Gothic Medium;">

<a href="#" id="scroll" style="display: none;"><span></span></a>

<div class='light x1'></div>
  <div class='light x2'></div>
  <div class='light x3'></div>
  <div class='light x4'></div>
  <div class='light x5'></div>
  <div class='light x6'></div>
  <div class='light x7'></div>
  <div class='light x8'></div>
  <div class='light x9'></div>

<!-- loader start style.css -->
  

<!-- loader end -->





<!-- nav start style .css -->


  <!--<div class="bis"style="background-color: #7EC8E3;height:40px;"><center><h4 class="animate-charcter">PrimRose Kindergarten & School<a style="color: white;padding: 10px;" href="admin log in.php">.</a> </h4><center></div>-->
    <div class="basic_info" id="go_up">
            
            <p><i class="far fa-envelope basic_icon"></i> <span class="email"style="color: #f5eeed;">  info@PrimRose.edu.bd</span></p>
            
            <p></i> <span style="font-size: 30px;text-align: center;"class="animate-charcter"> PRIMROSE KINDERGARTEN & SCHOOL<a style="color: white;padding: 10px;" href="admin log in.php">.</a></span></p>
            
            <div class="social_links">
                
                <a href="#"><i class="fab fa-facebook basic_icon_2"></i></a>
                <a href="#"><i class="fab fa-twitter basic_icon_2"></i></a>
                <a href="#"><i class="fab fa-linkedin-in basic_icon_2"></i></a>
                <a href="#"><i class="fab fa-instagram basic_icon_2"></i></a>
                
            </div>
            
        </div>

        <nav>
            <div class="logo"style="height: 120PX;width: 145px;" ><img src="25193811312150139423257623658883576468362228n280x250.png"></div>
            <div class="openMenu"><i class="fa fa-bars"></i></div>
            <ul class="mainMenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="open admission.php">Admission</a></li>
                <li><a href="ibtedia1-5 - Copy.php">Teachers</a>
                </li>
                <li><a href="gallary.php">Gallary</a>

                </li>
                <li><a href="committes.php">committee</a></li>
                <li><a href="display_pdf.php">Notice and news</a></li>
                
                
                <div class="closeMenu"><i class="fa fa-times"></i></div>
                <span class="icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin-in"></i>
                </span>
            </ul>
        </nav>


<!-- nav end -->







        <!-- slider start  slider .css-->

<div class="slideshow-container">
   <?php 
  include 'slider_admin/db_conn.php';
          $sql = "SELECT * FROM slider ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>

<div class="mySlides fade">


 <img src=" slider_admin/upload/<?=$images['image_url']?>" style="width:100%;">
  <div class="text"></div>
</div>

  <?php } }?>



<!--<div class="word"></div>-->
<div class="op">Together we <span style=" 
  background-color: #383838;border-radius:  15px;"><strong>will</strong></span></div>




<?php

 include 'marquee/conn.php'; 
 $q = "select * from marquee ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
  <div id="marcon">
    <div id="marsidebox">INFORMATION</div>
  <marquee behavior='scroll' direction='left' id='marquee' onmouseout='this.start();' onmouseover='this.stop();' scrollamount='10'>***<?php echo $res['Message'];  ?>***</marquee></div>
  
  
  </div>
<!--<marquee class="rib"style="height:35px"><b><span>***<?php echo $res['Message'];  ?>***<span></b></marquee>-->
  <?php 
 }
  ?>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>





<!-- slider end -->


<!-- about ambia start card.css -->
<div class="er">
<div class="row">
  

  <div class="column">
    <div class="card1">
      <h3>PrimRose</h3>
      <p style="margin-top:10px">PrimRose was established on March 15, 2015.It is located west deovog Munshigonj near Cumilla.The Schools provides education to its students in Bengali...</p> <br>
     <button class="btS"><a href="adout.php">More information</a></button>

    </div>
  </div>
  
  <div class="column">
    <div class="card1">
      <h3>Life At PrimRose</h3>
      <p style="margin-top:10px">Find out what you can expect from student life in PrimRose and discover why PrimRose is one of the best most exciting school to study.Our flexible  ....</p> <br>
      <button class="btS"><a href="lifeambia.html">More information</a></button>
      
    </div>
  </div>
  
  <div class="column">
    <div class="card1">
      <h3>Hostel fasilites</h3>
      <p style="margin-top:10px">Our PrimRose has facilities for residential students, our hostel can accommodate a total of 104 students in 26 rooms.Everyday there are 3 meals available for each....</p> <br>
        <button class="btS"><a href="hostel.html">More information</a></button>
    </div>
  </div>
</div>
</div>
<!-- about ambia end -->




<!-- massages start style.css -->


<div class="main">
   <div >
  <h1 align="center"style="color:#050A30"><a href="#" class="effect-underline">Messages</a></h1>
  

</div>
  <ul class="cards">
    <li class="cards_item">
      <div class="card" style="  border-radius: 25px;">
        <div class="card_image"><img src="re-m-01.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Hazi MD. Abdul Matin Bhuiyan</h2>

          <p class="card_text">Founder of PrimRose</p>
       
          <button class="btS"><a href="details.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card" style="  border-radius: 25px;">
        <div class="card_image"><img src="re-m-01.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">   MD.Abdul Zabbar </h2>
          <p class="card_text"> Co Founder of PrimRose</p>
        
          <button class="btS"><a href="details2.php">Read More</a></button>
        </div>
      </div>
    </li>
    <li class="cards_item">
      <div class="card" style="  border-radius: 25px;">
        <div class="card_image"><img src="re-m-01.jpg"></div>
        <div class="card_content">
          <h2 class="card_title">Basir Bin Rafiq</h2>
          <p class="card_text">Co Founder of PrimRose</p>
        
          <button class="btS"><a href="details3.php">Read More</a></button>
        </div>
      </div>
    </li>
    
  </ul>
</div>


<!-- massages end -->






<!-- department card start card.css -->


 <div >
  <h1 align="center"style="color:#050A30"><a href="#" class="effect-underline">Available Books</a></h1>
  

</div>
<div class="er">
<div class="row">
  

  <div class="column">
    <div class="card1">
   
      <p style="margin-top:10px ;"> <center style="font-size: 35px;;">Pre-primary</center></p> <br>
      <button class="btS"><a href="Hafiz.php">More information</a></button>
    </div>
  </div>
  
  <div class="column">
    <div class="card1">
   
      <p style="margin-top:10px ;"> <center style="font-size: 35px;;">Primary</center></p> <br>
      <button class="btS"><a href="ibbook.php">More information</a></button>
    </div>
  </div>
  
 <div class="column">
    <div class="card1">
   
      <p style="margin-top:10px ;"> <center style="font-size: 35px;;">Secondary</center></p> <br>
      <button class="btS"><a href="dakhil.php">More information</a></button>
    </div>
  </div>
</div>
</div>

<!-- department card end -->



<!-- contact  depatmentcard.css-->

 <div >
  <h1 align="center"style="color:#050A30"><a href="#" class="effect-underline">Contact us</a></h1>
  

</div>


<div style="margin-top:20px;" class="row">
  <div  class="col">
    
    <div class="card">
      
<?php

include 'cmsge/conn.php';

if(isset($_POST['done'])){

 $Email = $_POST['username'];
 $Message = $_POST['msg'];
 $q = " INSERT INTO `contactmsg`(`Email`, `Message`) VALUES ( '$Email', '$Message' )";

 $query = mysqli_query($con,$q);
}
?>
    <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"style="font-weight:bold;">  Message here</h1>
 </div><br>

 <label> Email: </label>
 <input type="text" name="username" class="form-control"> <br>

 
 <label> Text here: </label>
  
 <textarea type="text" name="msg" class="form-control"></textarea><br>

 <button style="background-color: #145DA0;font-size: 20px;font-weight:bold;text-shadow: 1px 1px white;" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
      
    </div>
  </div>

  <div class="col">
    <div class="card">
      <iframe class="d" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29279.086371841735!2d91.15250428955078!3d23.464583600000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1622211506357!5m2!1sen!2sbd" width="710" height="395" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      
    </div>
  </div>
 </div>
<!-- contact end -->















<h4>5</h4>
<!-- fotter start kam pore kormo -->
<div class="row">
  <div class="coumn">
    <div class="car">
    
                 <div class="logo"style="height: 139PX;width: 180px;margin-bottom: 11px;" ><img  src="25193811312150139423257623658883576468362228n280x250.png"></div>
    </div>
  </div>

  <div class="coumn">
    <div class="car"  style="color: white;font-size: 15px; ">
      <h2 style="padding: 6px;"> ADDRESS</h2>
    
     
       <p style="padding: 9.9px;padding-left: 10px;">Kaliajury Majar road,</p>
          <p style="padding: 6px;">Cumilla</p>
          <p style="color: #050A30;">qw</p>
          <p style="color: #050A30;padding: 6.5px;">qw</p>

    
    </div>
  </div>
  
  <div class="coumn">
    <div class="car" style="color: white; font-size: 15px; ">
      <h3 style="padding: 5.5px;">CONTACT US</h3>
    
     
      <p style="padding: 5.5px;">Email : info@PrimRose.edu.bd</p>
      <p style="padding: 8.4px";>Phone : 081-73920</p>
      <p style="padding: 5.5px;">Mobile: 01951894007</p>
        <p style="color: #050A30;padding: 6.5px;">qw</p>
          
    </div>
  </div>
  
  <div class="coumn">
    <div class="car" style=" font-size: 15px; ">
      <h3 style="padding: 30px;color:#050A30;">CONTACT</h3>
    
      
      <p style="padding: 12px;color: white; ">©PrimRose</p>
        <p style="color: #050A30;padding: 6px;">qw</p>
          
</div>
</div>

 <!-- fotter end kam pore kormo -->




    <script src="./app.js"></script>
    <script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}
</script>
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
    <script type="text/javascript">
    setTimeout(function(){
      $('.loader').fadeToggle();
    },3000);
    </script>
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
  <!--<script>    var words = ['Hi i like HTML', 'I also like css', 'Lorem ipsum dolor sit amet', ' consectetur adipiscing elit', 'sed do eiusmod tempor incididunt'],
    part,
    i = 0,
    offset = 0,
    len = words.length,
    forwards = true,
    skip_count = 0,
    skip_delay = 15,
    speed = 70;
var wordflick = function () {
  setInterval(function () {
    if (forwards) {
      if (offset >= words[i].length) {
        ++skip_count;
        if (skip_count == skip_delay) {
          forwards = false;
          skip_count = 0;
        }
      }
    }
    else {
      if (offset == 0) {
        forwards = true;
        i++;
        offset = 0;
        if (i >= len) {
          i = 0;
        }
      }
    }
    part = words[i].substr(0, offset);
    if (skip_count == 0) {
      if (forwards) {
        offset++;
      }
      else {
        offset--;
      }
    }
    $('.word').text(part);
  },speed);
};

$(document).ready(function () {
  wordflick();
});</script>-->


<script >
var arr = ["can.", "thrive.","can do great thing.","can change the world.", ];
var i = 0;

function changeText(){
  if (i != arr.length){
    $("strong").text(arr[i]); 
  i++;}
  else {
    i=0;
    $("strong").text(arr[i])}};

var t = setInterval(changeText, 1500);
  </script>
</body>
</html>

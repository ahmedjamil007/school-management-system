<?php 
include_once("calenderadmin/db_conn.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admission</title>
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="resp.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

.button {
  border-radius: 4px;
  background-color: #7EC8E3;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
h1#resize-effect {
  font-size: 20px;
  font-weight: 100;
  animation: resize-anime 5s infinite forwards;
  animation-direction: alternate;
}

h1#resize-effect span > span:nth-child(odd) {
  color: #050A30;
}
  
@keyframes resize-anime {
  from {
    font-size: 20px;
    font-weight: 100;
    opacity:0
  } 
  to {
    font-size: 50px;
    font-weight: 900;
    text-shadow: 0px 0px 5px white;
    opacity:1
  }
}
.swing {
    animation: swing ease-in-out 1s infinite alternate;
    transform-origin: center -20px;
    float:left;
    box-shadow: 5px 5px 10px rgba(0,0,0,0.5);
}
.swing img {
    border: 5px solid #f8f8f8;
    display: block;
}
.swing:after{
    content: '';
    position: absolute;  
    width: 20px; height: 20px;  
    border: 1px solid #999;
    top: -10px; left: 50%;
    z-index: 0;
    border-bottom: none;
    border-right: none;
    transform: rotate(45deg);
}
/* nail */
.swing:before{
    content: '';
    position: absolute;
    width: 5px; height: 5px;
    top: -14px;left: 54%;
    z-index: 5;
    border-radius: 50% 50%;
    background: #000;
}
 
@keyframes swing {
    0% { transform: rotate(3deg); }
    100% { transform: rotate(-3deg); }
}
.u{
  border: 2px solid #ddd;
  border-radius: 30px;
}
@media only screen and (max-width: 800px) {
#sidebar{
  display: none;
}

}
</style>

</head>
<body style="background-color: #b7bdb9;font-family: Franklin Gothic Medium;">
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
                <li><a href="ibtedia1-5 - Copy.php">Teachers</a>

  </div>

                </li>
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
<div class="container">





 
  <main>
    <h1 id="resize-effect">
  <span aria-hidden="true">
    <span>Welcome</span>
    <span>to </span>
    <span>Admission</span>
  </span>
</h1>

<!--<h1 align="center"><a href="#" class="effect-underline"style="color: #050A30;">Welcome to Admissions</a></h1>-->

  	
    <div class="about"><p>PrimRose Kindergarten & School is one of the best School in Cumilla .Here high quality education is given by experienced teachers.At present there are three sections namely Pre-primary, Primary, Secondary</p></div>
<div class="about"> 
<h2><b style="color: #050A30;">Admission fees:</b></h2>
<div id="main-content">
   
    <?php
      include 'crud/conn.php';

      $sql = "SELECT * FROM  studant_fee";
      $result = mysqli_query($con, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
       
        <th style="width: 50%;background-color: #0C2D48;"><center>Division</center></th>
        <th style="width: 50%;background-color: #0C2D48;"><center>Fee</center></th>
        
        
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
               
                <td><center><?php echo $row['name']; ?></center></td>
                <td><center><?php echo $row['fee']; ?></center></td>
                
                
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($con);
  ?>
  <br>
<button class="button"><center><span><a href="admission.php">Apply for admission</a></span></center></button>
</div>
  






</div>

  </main>





  <div id="sidebar">
  <!--<?php 
          $sql = "SELECT *  FROM celen_images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>-->
  <figure class="swing">
  <img id ="home-button" alt = ""  src="class-room-activity.jpg" width="400" >
  <img src="calenderadmin/uploads/<?=$images['image_url']?>" width="400" >
</figure>
  <!--<img class="u"src="83472772_113692237053453_908429993221557484_n.jpg" alt="">
    <img class="u" src="104495668_113692240386786_8681076878592869723_n.jpg" alt="">
    <img class="u" src="cover.jpg" alt="">
<div>  <a class="sub_nav_link" href="open admission.php">Addmission</a> </div>
        <div>  <a class="sub_nav_link" href="ibtedia1-5 - Copy.php">Teachers</a> </div>
              <div>  <a class="sub_nav_link" href="gallary.php">Gallary</a> </div>
        <div> <a class="sub_nav_link" href="committes.php">Committees</a></div>
        <div><a class="sub_nav_link" href="display_pdf.php">Notice and news</a></div>-->

        <?php } }?>
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
    <script>$(function(){
  $("#home-button").on({
   mouseenter: function(){
    $(this).attr('src','104495668_113692240386786_8681076878592869723_n.jpg');
  },
  mouseleave: function(){
    $(this).attr('src','83472772_113692237053453_908429993221557484_n.jpg');
  }
  });
  
});</script>
</div>
</body>
</html>
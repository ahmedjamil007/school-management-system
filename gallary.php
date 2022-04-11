<?php 
include_once("image_upload_admin/db_conn.php");
?>
<?php 
include_once("calenderadmin/db_conn.php");
?>


<!DOCTYPE html>
<html>
<head>
  <title>Gallary</title>
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



* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}
/* Linkedin ------------------------------------------------------ */
p {
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.20);
  font-family: "Lucida Grande", Lucida, Verdana, sans-serif;
  font-weight: bold;
  color: blue;
  font-size: 80px;
  
  
}

img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
} @media only screen and (max-width: 800px) {

    /* color schemes */
    /* orange: #FF8100; */
    /* yellow: #FFA700; */
    /* light blue: #91BFFF; */
    /* blue: #5292FF; */
    /* deep blue: #4C6AFF; */

    /* basic info */

  .column{
      height: 300px;
      width: 300px;
    }
h1{
  font-size: 15px;
}
span{
  font-size: 14px;
}
\
}



</style>
<body style="background-color: #E8EEF1;font-family: arial,sans-serif,helvetica;">
<a href="#" id="scroll" style="display: none;"><span></span></a>
<div class="loader"style=" background-color: #050A30;">
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
                <li><a href="gallary.php">Gallary</a>
  </div>

                </li>
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

<main>
<div class="as">
   <div >
  <h1 align="center"><a href="#" class="effect-underline"style="color: #0C1446;">School  gallary</a></h1>
  <!--<p style="text-align:center"><b>"Memories that we share with all"</b></p>-->




  <Linkedin><p style="text-align: center;font-size: 22px;" ><span style="text-decoration: none; color: black;" href="#" target="_blank">"Memories that <span style="color:#050A30;"> we share with all"</span></span></p></Linkedin>





  <!--<svg height="100" stroke="#7EC8E3" stroke-width="2" class="text-line" width="100%"><text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">School Committee</text></svg>-->
  

</div>

    



</div>

<div class="main"style="padding: 30px;">
  
  <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
            while ($images = mysqli_fetch_assoc($res)) {  ?>
  


        

<div class="row">
  <div class="column">
    <img class="swing" src="image_upload_admin/uploads/<?=$images['image_url']?>" alt="Snow" style="width:400px;height:300px">
  </div>


<?php } }?>

  
  </div>

</div>




    

    
  </main>









  

  









  <footer style="background-color:#050A30">
<div class="nested">
    <div><img src="25193811312150139423257623658883576468362228n280x250.png" alt="" width="180" height="220"> </div>
      <div style="color: white;margin-top: 40px;"> <h3 style="text-align: CENTER;font-size: 20px;" >ADDRESS</h3>
    
     
     <div style="padding: 10px;text-align: center;">Kaliajury,Majar road,</div>
          <div style="padding: 10px;text-align: center;">Cumilla</div>
    </div>
     <div style="color: white;margin-top: 40px;"> <h3 style="text-align: center;font-size: 20px">CONTACT US</h3>
    
     
      <div style="padding: 10px;text-align: center;" >Email : info@PrimRose.edu.bd</div>
      <div style="padding: 10px;text-align: center;">Phone : 081-73920</div>
      <div style="padding: 10px;text-align: center;">Mobile: 01951894007</div></div>



      <div> <div style="color:#050A30;padding-bottom: 15px;">©Team Multiverse</div>

<div style="color:#050A30;padding-bottom: 15px;">©Team Multiverse</div>
<div style="color:#050A30;padding-bottom: 15px;">©Team Multiverse</div>
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
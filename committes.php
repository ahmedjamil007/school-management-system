<?php 
include_once("Dynamic/connection.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Committee</title>
	<link rel="stylesheet" type="text/css" href="about.css">
	<link rel="stylesheet" type="text/css" href="resp.css">
  <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style >  
button{
  font-size:20px;
  padding: 15px 25px;
  
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #7EC8E3;
  background-color: #7EC8E3;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}
button:hover {background-color: #050A30}

button:active {
  background-color: #050A30;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
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
  font-size: 13px;
}

p{
   
    font-size: 10px;
}

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

  </div>

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
                    <i class="fab fa-github"></i>
                </span>
            </ul>
        </nav>


<div class="as">
   <div >
  <h1 align="center"><a href="#" class="effect-underline"style="color: #0C1446;">School Committee</a></h1>
  <!--<svg height="100" stroke="#7EC8E3" stroke-width="2" class="text-line" width="100%"><text x="50%" dominant-baseline="middle" text-anchor="middle" y="50%">School Committee</text></svg>-->
  

</div>

    
<div class="about"><p style="margin-top: 20px;font-size: 40px;text-align: center;background-color: #7EC8E3;border-bottom-left-radius: 50px 20px; border-bottom: 6px solid #050A30;"><i class="fa fa-users portions_icon"></i> Members Panel<i class="fa fa-users portions_icon"></i> </p></div>


</div>
<div style="text-align:center;margin-top:20px;">
  <button> <a href="#1st" style="color:white"> Discipline Committee</a></button>
  <button> <a href="#1s" style="color:white"> Finance Committee </a></button>
</div>
<section id="1st">
<h1 align="center"><a href="#" class="effect-underline"style="color: #0C1446;font-size:25px;"><b>Discipline Committee</b> </a></h1>

<div class="main"style="padding: 30px;">
  
  <ul class="cards">
    <?php       $sql = "SELECT message_id, messenger_name, messenger_position, msg, messenger_picture FROM committe_table";       $resultset = mysqli_query($connection, $sql) or die("database error:". mysqli_error($connection));             while( $record = mysqli_fetch_assoc($resultset) ) {       ?>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="Media/Message_photos/<?php echo $record['messenger_picture']; ?>"></div>
        <div class="card_content">
          <h2 class="card_title" style="text-align: center"><?php echo $record['messenger_name']; ?></h2>
          <p class="card_text"style="text-align: center;font-size: 20px;"><?php echo $record['messenger_position']; ?></p>

          <button class="btn card_btn"style="text-transform: initial;">Email:<?php echo $record['msg']; ?></button>
        </div>
      </div>
    </li>
    <?php } ?>
</div>
<section>

<section id="1s">
<h1 align="center"><a href="#" class="effect-underline"style="color: #0C1446;font-size:25px;"><b>Finance Committee </b></a></h1>

<div class="main"style="padding: 30px;">
  
  <ul class="cards">
    <?php       $sql = "SELECT message_id, messenger_name, messenger_position, msg, messenger_picture FROM committe_tabl";    
       $resultset = mysqli_query($connection, $sql) or die("database error:". mysqli_error($connection));         
           while( $record = mysqli_fetch_assoc($resultset) ) {       ?>
    <li class="cards_item">
      <div class="card">
        <div class="card_image"><img src="Media/Message_photos/<?php echo $record['messenger_picture']; ?>"></div>
        <div class="card_content">
          <h2 class="card_title" style="text-align: center"><?php echo $record['messenger_name']; ?></h2>
          <p class="card_text"style="text-align: center;font-size: 20px;"><?php echo $record['messenger_position']; ?></p>

          <button class="btn card_btn"style="text-transform: initial;">Email:<?php echo $record['msg']; ?></button>
        </div>
      </div>
    </li>
    <?php } ?>
</div>

<section>



  	

    
  </main>









  

  




 </div>




  <footer style="background-color:#050A30">
<div class="nested">
    <div><img src="25193811312150139423257623658883576468362228n280x250.png" alt="" width="180" height="220"> </div>
      <div style="color: white;margin-top: 40px;"> <h3 style="text-align: CENTER;font-size: 20px;" >ADDRESS</h3>
    
     
     <div style="padding: 10px;text-align: center;">West Deovog, Munsigonj,</div>
          <div style="padding: 10px;text-align: center;">Dhaka</div>
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
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!--meta-->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<!--style-->
	<link rel="stylesheet" href="Admin_Design/admin_style.css">
	<link rel="stylesheet" href="Responsive/admin_style_res.css">

	<!--fonts-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> 

	<!--font awesome-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


	<title>Admin</title>
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

.wel{
	text-align: center;
	font-size: 30px;
	font-weight: bold;
	border-bottom: 6px solid #2a2a72;
  background-color: lightgrey;
   
}
.show{
	font-size: 20px;
}
h1#resize-effect {
  font-size: 20px;
  font-weight: 100;
  animation: resize-anime 5s infinite forwards;
  animation-direction: alternate;
  text-align: center;
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
.titl-word {
  animation: color-animation 4s linear infinite;
}

.titl-word-1 {
  --color-1: #05445E;
  --color-2: #3D8DAE;
  --color-3: #41729F;
}

.titl-word-2 {
  --color-1: #189AB4;
  --color-2: #000C66;
  --color-3: #17494D;
}

.titl-word-3 {
  --color-1: #ACCFCB;
  --color-2: #E4A9A8;
  --color-3: #ACCFCB;
}

.titl-word-4 {
  --color-1: #3D8DAE;
  --color-2: #DF8453;
  --color-3: #E4A9A8;
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



.titl {
  font-family: "Franklin Gothic Medium";
  font-weight: bold;
  font-size: 30px;
  text-transform: uppercase;
  text-align: center;
  word-spacing: 10px;
}
</style>

</head>

<body>



	<div class="admin">


		<div class="admin_header" style="background-color:#36096d">
			

			<p class="title"style="font-size: 30px;">Admin <a href="logout.php"><i style="margin-left: 1300px;color: whitesmoke;" class="fa fa-power-off" aria-hidden="true"></i></a></p>
      


		</div>
		<!--<h1 id="resize-effect">
  <span aria-hidden="true">
    <span>Welcome</span>
    
    <span> <?php echo $_SESSION['Username']; ?></span>
  </span>
</h1>-->


<div class="wel">
  <h2 class="titl">
    <span class="titl-word titl-word-1"> Welcome</span>
    <span class="titl-word titl-word-2"><?php echo $_SESSION['Username']; ?></span>
    
  </h2>
</div>

<!--<p class ="wel">Welcome to <?php echo $_SESSION['Username']; ?></p>-->
    
		<div class="admin_container">
			

			<a href="1.1_messages_admin.php" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-user-tag portions_icon"style="color:#2a2a72"></i><p class="show"style="font-size: 20px;">Teachers</p></a>

			<a href="ado.php" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-plus-circle portions_icon"style="color:#2a2a72"></i><p class="show">Admission</p></a>

			<a href="crud/Display.php" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-building portions_icon"style="color:#2a2a72"></i><p class="show">Admission Fees</p></a>

			<a href="committieadmin.html" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-users portions_icon"style="color:#2a2a72"></i><p class="show">Committee</p></a>

			<a href="notic_admin_button.html" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-newspaper portions_icon"style="color:#2a2a72"></i><p class="show">Notice</p></a>

			<a href="marquee/Display.php" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-address-card portions_icon "style="color:#2a2a72"></i><p class="show">Marquee</p></a>
			<a href="cmsge/Display.php" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-sticky-note portions_icon "style="color:#2a2a72"></i><p class="show">Contact</p></a>
			<a href="image_upload_admin/index.php" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-image  portions_icon"style="color:#2a2a72"></i><p class="show">Image gallary</p></a>
      

<a href="gallaryslider.php" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-sliders-h  portions_icon"style="color:#2a2a72"></i><p class="show">Sliders & Celender</p></a>
<span></span>
<span></span>
<a href="Admin seq/Display.php" class="portions"style="color:#2a2a72"><p class="filler">filler</p><i class="fas fa-fingerprint  portions_icon"style="color:#2a2a72"></i><p class="show">Admin Info</p></a>
		</div>

<div class="wel">Click here to <a href = "logout.php"style="text-decoration: none;color:#f53844">Logout</a></div>



	</div>

 

</body>
</html>
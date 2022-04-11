<!DOCTYPE html>
<html>
<head>

	<title>ADMIN</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.er{
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			
			
		}
		.epr{
			border: 10px solid#050A30;
			padding: 50px;
			 border-radius: 50px 20px;
			 margin-bottom: 20px;

		}
		.wel{
    
    font-size: 30px;
    font-weight: bold;
   color: white;
  background-color:#1d878f ;
  padding: 15px;
   
}
.button {
  padding: 15px 25px;
  font-size: 20px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #050A30;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: indianred;}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.oo{
	font-size: 30px;
	font-family: Franklin Gothic Medium;
	border-radius: 15px;
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
  .fa-sign-out{
    transform: rotateZ(180deg);
}
	</style>
</head>
<body> 
  <div class="wel"> Admin(sliders) <a href="../1_admin.php"><i  style="margin-left: 1200px;color: white;" class="fa fa-sign-out" aria-hidden="true"></i></a></div>


<h1 style="text-align: center;font-size: 40px;color: #050A30;margin-top: 100px;">Image uploads</h1>
	<div class="er">
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form class="epr" action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input class="oo" type="file" 
                  name="my_image">

           <input class="oo" type="submit" 
                  name="submit"
                  value="Upload"><br> <br>
     	<button class="button"><a style="text-decoration: none;color:white;font-weight:bold;" href="display.php">Delete</a></button>
     </form>
      </div>
</body>
</html>
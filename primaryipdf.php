
<!DOCTYPE html>
<html lang="en">
<head>

  <!--meta-->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <!--style-->
  <link rel="stylesheet" href="Admin_Design/admin_style.css">

    <link rel="stylesheet" href="Admin_Design/message_style.css">
  <link rel="stylesheet" href="Responsive/admin_style_res.css">

  <!--fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet"> 

  <!--font awesome-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


  <title>Admin notic and news</title>
  <style >
      .rt{
        border: 10px solid black;
        border-radius: 50px 20px;
        width: 700px;
        margin-left: 310px;
        margin-top: 120px;
        padding: 30px;
        border-right-color: #ab2078;
         border-left-color: #ab2078;
        background-color: #d5dce6;
      }
      form{
        margin-left: 50px;
      }
      label{
        font-size: 40px;
        font-weight: bold;
      }
      #pdf{
        font-size: 40px;
        font-weight: bold;
        margin-top: 10px;
      }
      #upload{
        font-size: 30px;
        font-weight: bold;
        margin-left: 100px;
      }
      #upload {
  padding: 15px 25px;
 
  
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #ab2078;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

#upload:hover {background-color: #3e8e41}

#upload:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.qw{
  font-size: 30px;
  margin-left: 15px;
}
.wel{
    text-align: center;
    font-size: 50px;
    font-weight: bold;
    border-bottom: 6px solid white;
  background-color:#d6cccb ;
   text-shadow: 2px 2px white;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: firebrick;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: red}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
a{
  color: white;
  text-decoration: none;
  font-size: 30px;
}
    </style>

</head>

<body>



  <div class="admin">


    <div class="admin_header" style="background-color:#1d878f">
      

      <p class="title">Admin(News & notice)</p>
       <a href="1_admin.php" class="go_back"><i class="fas fa-sign-out-alt"></i></a>


    </div>
    <div class="wel"> News & notice(Primary)</div>
    
<div class="rt">
      <form class="" action="primaryipdf.php" method="post" enctype="multipart/form-data">
        <label class="qw" for=""><center>Choose Your PDF File</center></label><br>
        <input id="pdf" type="file" name="pdf" value="" required><br><br>
        <input id="upload" type="submit" name="submit" value="Upload">
        <button class="button"> <a href="notic uodate/primary_display.php">Delete</a> </button>
        <?php
        include 'db.php';

        if (isset($_POST['submit'])) {
          $pdf=$_FILES['pdf']['name'];
          $pdf_type=$_FILES['pdf']['type'];
          $pdf_size=$_FILES['pdf']['size'];
          $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
          $pdf_store="primarypdf/".$pdf;

          move_uploaded_file($pdf_tem_loc,$pdf_store);

          $sql="INSERT INTO primary_pdf(pdf) values('$pdf')";
          $query=mysqli_query($conn,$sql);



        }



         ?>

      </form>

    </div>


  </div>

 

</body>
</html>
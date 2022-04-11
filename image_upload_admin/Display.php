<!DOCTYPE html>
<html>
<head>
 <title>Admin </title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
<style > 

  .block {
  display: block;
  width: 100%;
  border: none;
  background-color: #04AA6D;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  text-align: center;
  font-weight: bold;
  text-decoration: none;
}

.block:hover {
  background-color: #ddd;
  color: black;
}
 .wel{
    
    font-size: 30px;
    font-weight: bold;
   color: white;
  background-color:#1d878f ;
  padding: 15px;
   
}
.q {
  font-size: 15px;
  margin-left: 1234px;
 padding-bottom: 25px;
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
<div class="wel"> Admin <a href="index.php"><i  style="margin-left: 1300px;color: white;" class="fa fa-sign-out" aria-hidden="true"></i></a></div>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display  Gallary image </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> Image </th>
 

 <th> delete </th>

 </tr >

 <?php

 include 'db_conn.php'; 
 $q = "select * from images ORDER BY id  DESC ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td>
 <img style="height: 100px;width: 200px;"src="uploads/<?php echo  $res['image_url']; ?>"> </td>
 

 <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>
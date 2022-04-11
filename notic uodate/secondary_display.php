<!DOCTYPE html>
<html>
<head>
 <title> admin info</title>

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
.o{
   color: white;
   font-weight: bold;
    text-decoration: none;
}
.u{
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
}

.u:hover {
  background-color: #ddd;
  color: black;
}

.previous {
  background-color: #f1f1f1;
  color: black;
}

.next {
  background-color: #04AA6D;
  color: white;
}

.round {
  border-radius: 50%;
}
.i{
  padding-left: 1340px;

}

</style>
</head>
<body>
<div class="wel"> PDF info  </div>
<div class="i"> <button class="btnn" style="background-color:blue;color:white"><a style="color:white" href="../1_admin.php"><i class="fa fa-close"></a></i></button></div>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > PDF Info </h1>
 <br>
 <a class="u" href="../insert.php" class="previous">&laquo; Previous</a>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Id </th>
 <th> PDF </th>
 
 <th> Delete </th>
 

 </tr >

 <?php

 include 'db.php'; 
 $q = "select * from secondary_pdf ORDER BY id  DESC ";

 $query = mysqli_query($conn,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['id'];  ?> </td>
 <td> <?php echo $res['pdf'];  ?> </td>

 <td> <button class="btn-danger btn"> <a href="s_delete.php?id=<?php echo $res['id']; ?>" class="text-white"> Delete </a>  </button> </td>
 

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
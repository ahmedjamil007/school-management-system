<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'ambia_madrasa_database') or die ('Unable to connect');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin log</title>
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

        body{
            text-align: center;
        }

        .field{
            margin-bottom: 20px;
        }
        .box > h1{
    margin:20px 20px;
}

.box{
  
background: #41729F; 
    width: 400px;
    position: absolute;
    padding: 40px;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    text-align: center;
    border: 15px solid #68BBE3;;
    border-right-color: #274472;
         border-left-color: #274472;
    border-top-left-radius: 100px;
    border-bottom-right-radius:100px;
}
.box input[type="text"],.box input[type='password']{
    display: block;
    margin: 20px auto;
    padding: 10px 10px;
    width: 250px;
     background:#b7bdb9 ;
    border: 2px solid black;
    border-radius: 15px;
    transition: 0.8s;
overflow:hidden;

}   
.box input[type="text"]:focus,.box input[type='password']:focus{
    border-left: 40px solid black;

}

.box input[type="submit"]{
    background: none;
    border: 2px solid black;
    padding: 10px 10px;
    width: 100px;
    margin: 10px 10px;
    border-radius: 15px;
    transition: 0.6s;

}
.box input[type="submit"]:hover{
    background-color: black;
    color: #9090bc;

}

.wel{
    text-align: center;
    font-size: 50px;
    font-weight: bold;
    border-bottom: 6px solid #0C2D48;
  background-color:#145DA0 ;
   text-shadow: 2px 4px #7EC8E3;
   color: #050A30;
}

    </style>
</head>
<body style="background-color: ">
    
  <div class="wel"> PrimRose Kindergarten & School Admin</div>
    




     <div> 
                   
                   <form  class="box" action=""method="post" style="text-align:center;">
                    <h1>Admin Log in</h1>
                   <form action = "index.php" method = "post">
            <input type = "text" class = "field" name = "Username" placeholder = "Username" required = ""><br/>
            <input type = "password" class = "field" name = "Pass" placeholder = "Password" required = ""><br/>
            <input type = "submit" class = "field" name = "login" value = "Login">
            
        </form>
                </form>
                 
              </div>

<?php
    if (isset($_POST['login'])){
        $Username = $_POST['Username'];
        $Pass = $_POST['Pass'];

    $select = mysqli_query($conn," SELECT * FROM admin_table WHERE Username = '$Username' AND Pass = '$Pass' ");
    $row  = mysqli_fetch_array($select);

    if(is_array($row)) {
        $_SESSION["Username"] = $row['Username'];
        $_SESSION["Pass"] = $row['Pass'];
    }   else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password!");';
        echo 'window.location.href = "admin log in.php" ';
        echo '</script>';
    }
    }
    if(isset($_SESSION["Username"])){
        header("Location:1_admin.php");
    }
?>

</body>
</html>
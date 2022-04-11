<?php

include 'conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `contactmsg` WHERE id = $id ";

mysqli_query($con, $q);

header('location:Display.php');

?>

<?php

include 'db.php';

$id = $_GET['id'];

$q = " DELETE FROM `primary_pdf` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:primary_display.php');

?>
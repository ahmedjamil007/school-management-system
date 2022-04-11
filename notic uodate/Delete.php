<?php

include 'db.php';

$id = $_GET['id'];

$q = " DELETE FROM `pdf_file` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:display.php');

?>
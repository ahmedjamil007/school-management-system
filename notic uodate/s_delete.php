<?php

include 'db.php';

$id = $_GET['id'];

$q = " DELETE FROM `secondary_pdf` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:secondary_display.php');

?>
<?php

include 'db_conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `images` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:display.php');

?>
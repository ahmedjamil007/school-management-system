<?php

include 'db_conn.php';

$id = $_GET['id'];

$q = " DELETE FROM `celen_images` WHERE id = $id ";

mysqli_query($conn, $q);

header('location:index.php');

?>
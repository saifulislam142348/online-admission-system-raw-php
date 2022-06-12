<?php
require_once '../config.php';
$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM `collegeapply` WHERE `id` = '$id'");

header('location: collegedetails.php');


?>
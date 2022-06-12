<?php
require_once '../config.php';
$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM `schoolapply` WHERE `id` = '$id'");

header('location: schooldetails.php');


?>
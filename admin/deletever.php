<?php
require_once '../config.php';
$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM `versityapply` WHERE   `id` = '$id'");

header('location: versitydetails.php');


?>
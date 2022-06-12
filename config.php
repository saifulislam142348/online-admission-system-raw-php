<?php
Session_start();
$hostname='localhost';
$username='root';
$userpass='';
$dbname='admission';
$conn=mysqli_connect($hostname,$username,$userpass) or die('databaseerror');
mysqli_select_db($conn,$dbname);


?>
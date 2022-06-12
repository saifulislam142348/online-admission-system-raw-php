<?php
require_once 'config.php';

if(isset($_POST['login'])){
	

$email=$_POST['l_name'];
$password=$_POST['l_password'];

$email_check=mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email'");
if(mysqli_num_rows($email_check)>0){
	
	
	$row=mysqli_fetch_assoc($email_check);
	
	if($row['password']==$password)
	{
		$_SESSION['login_id'] = $row['id'];
		header('location: index2.php');
	}
}
	
	else{
		$wrong_email='Wrong Email & Password ,please Enter the Regiter Email & password';
		
	}

}

<?php
require_once 'config.php';

if(isset($_POST['login'])){
	

$email=$_POST['l_name'];
$password=$_POST['l_password'];

$email_check=mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email'");
if(mysqli_num_rows($email_check)>0){
	
	
	$row=mysqli_fetch_assoc($email_check);
	
	if($row['password']==$password)
	{
		$_SESSION['login_id'] = $row['id'];
		header('location: index2.php');
	}
}
	
	else{
		$wrong_email='Wrong Email & Password ,please Enter the Regiter Email & password';
		
	}

}

?>
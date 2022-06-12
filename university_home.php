<?php

 require_once 'config.php';
 
$user = $_SESSION['login_id'];


?>

<?php
require_once 'config.php';

if(isset($_POST['submit'])){
	
$c_name=$_POST['c_name'];
$c_email=$_POST['c_email'];
$comment=$_POST['comment'];

mysqli_query($conn,"INSERT INTO `contacts`(`c_name`, `c_email`, `comments`) VALUES ('$c_name','$c_email','$comment')");
}

?>
<?php

require_once 'config.php';

if(isset($_POST['vlogin'])){
	

$vemail=$_POST['vemail'];
$vpassword=$_POST['vpassword'];

$email_check=mysqli_query($conn,"SELECT * FROM `versityapply` WHERE `email` = '$vemail'");
if(mysqli_num_rows($email_check)>0){
	
	
	$row=mysqli_fetch_assoc($email_check);
	
	if($row['password']==$vpassword)
	{
		header('location: std_dashbroadver.php');
	}
}
	
	else{
		$wrong_email='Wrong Email & Password ,please Enter the Registration Email & password';
		
	}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>schoolapply</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style type="text/css">
  body
{
	background:green;
}
h1{color:white;
   text-align:center;
}
.txt{
	color:red;
	text-align:center;
	text-top:0px;
	bold:6px;
}
h3{
	text-align:center;
	color:white;
}
.jum{
	width:100%;
	height:auto;
	bold:10px;
}
  </style>
</head>
<body>

<nav class="navbar navbar-inverse  ">
  <div class="container-fluid  ">
  <div >
  

	<div class="nav-pills ">
    <ul class="nav navbar-nav   ">
      <li class="nav-item fixed-top"><a  class="nav-link"href="index2.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Student Info <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class=" text-red" href="#">Registration Info</a></li>
          <li><a href="#">Info wall</a>
		  </li>
          <li><a href="#">Career</a></li>
        </ul>
      </li>
      <li><a href="#">About</a></li>
	  
	  <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts</a>
	  
	  
	  
	  <ul class="dropdown-menu ">
          
 
  <div class="jumbotron ">
    <h1>Contacts us</h1>
    <div class="card-body">
						<form action=" " method="POST">
							<div class="input-group ">
								
								<label for="name">Your Name:</label>
								<input type="text" class="form-control py-4" name="c_name" placeholder="User Name"  required />
								
							</div>
							<br/>
							<div class="input-group ">
								
								<label for="Email">Your Email:</label>
								<input type="email" class="form-control py-4"  placeholder="Email or Phone " name="c_email" required />
								
							</div>
							
							<br/>
							
								<div class="input-group ">
								<label for="comment">Comment:</label>
								  <textarea  type="text" class="form-control" rows="5" name="comment"required ></textarea>

						</div>
							<br/>
							<div class="input-group ">
								
								
								<input type="submit" class="form-control py-4 pull-right btn btn-success"  name="submit" value="submit" />
								
							</div>
							
						</form>
						
					</div>
					</div>
	
	</br>
  </div>
        </ul>
	  
	  
	  
	  </li>
	  <li class="text-right"><a  href="#"><span class="glyphicon glyphicon-user">
	
	<?php
	$username = mysqli_query($conn,"SELECT * FROM `users` WHERE `id` = '$user'");
	
	$userdata = mysqli_fetch_assoc($username);
	echo $userdata['name'];
	
	
	?>
	
	
	</span></a>
	  </li>
    </ul>
	</div>
    </div>
  </div>
  
  
</nav>

</div>
<div class="jumbotron">
  <li class="txt"> <h1> University Online Admission </h1>
  
  <button class=" btn btn-lg btn-dark text-white active "><a  class="nav-link"href="registerformsc.php"<h1 class="ap">Apply Now new Student</h1></a></button>
  </li>
  
  </div>
<div class="container-fluid">
<h1>Students online apply system</h1>
  <div class="jumbotron">
  
  <h1>Students Registration  Email & password</h1>
  <div class="  alert-danger text-center"><span><?php if(isset($wrong_email)){echo'<p class="jum"  >'.$wrong_email.'</p>';}?> </span> </div>

	<div class="card-body ">
	
						<form method="POST" action="">
							<div class="input-group justify-content-right ">
								
								
								<label for="Email">Your Email or phone:</label>
								<br/>
									
								<input type="text"  name="vemail" class="form-control py-4" placeholder="Email or phone">
								
							</div>
							<br/>
							<div class="input-group ">
								
								<label for="password">Your password:</label>
								<br/>
								<input type="password"  name="vpassword" class="form-control py-4" placeholder="Password">
								
							</div>
							<br/>
							<div class="input-group ">
							<input  type="submit" class="btn btn-success btn-ms" value="Login" name="vlogin" />
							</div>
							<br/>
							<br/>
							
	 
							</br>
							
						</form>
						
						
					</div>
					
  </div>

</div>

</div>





</body>
</html>


<?php

require_once 'config.php';
if(isset($_POST['Register'])){
	
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
if(!$name==""){
	if(!$email=="")
	{
	if(!$password=="")
	{
	if(strlen($password)>6)	
	{$query=mysqli_query($conn,"SELECT * FROM `users` WHERE `email`='$email'");
if(mysqli_num_rows($query)==0){
		$result=mysqli_query($conn,"INSERT INTO `users`(`name`, `email`, `password`) VALUES('$name','$email','$password')");
		if($result){
			$success='successfully';
		}else{
			
			
		}
	}else{
		
	}
	}
else{
	
}	
	}
	else{
		
	}
}else{
	
}


	
}
}

?>

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




<?php
require_once 'config.php';

if(isset($_POST['submit'])){
	
$c_name=$_POST['c_name'];
$c_email=$_POST['c_email'];
$comment=$_POST['comment'];

mysqli_query($conn,"INSERT INTO `contacts`(`c_name`, `c_email`, `comments`) VALUES ('$c_name','$c_email','$comment')");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>online Admission project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body  style="">

<div class="navbar navbar-inverse ">
  <div class="container-fluid  ">
    

	<div class="nav-pills ">
    <ul class="nav navbar-nav   ">
      <li class="nav-item "><a  class="nav-link"href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover" href="#">Apply now <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href=""><span  style="color:red;"class="glyphicon glyphicon-log-in"> Please Registration First </span></a></li>
          
        </ul>
      </li>
      <li><a href="#">About</a></li>
	  <li><a href="#">Academic</a></li>
	  <li><a href="#">Admission</a></li>
	  
	  <li><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contacts</a>
	  
	  
	  
	  <ul class="dropdown-menu ">
	  
          <div class="jumbotron ">
		
 
    <h1>Contacts us</h1>
    
	
	
	<div class="row">
	<div class="col-md-12" col-md-offset-3>
						<form action=" " method="POST" >
							<div class="input-group  ">
								
								<label class="name ">Your Name:</label>
								<input type="text" class="form-control   form-control-lg" name="c_name" placeholder="User Name"  required />
								
							</div>
							<br/>
							<div class="input-group ">
								
								<label class="Email">Your Email or Phone:</label>
								
								<input type="email" class="form-control  form-control-lg"  placeholder="Email or Phone " name="c_email" required />
							
							</div>
							
							<br/>
							<div class="input-group ">
								
								<label class="comment">Comment:</label>
								
								  <textarea type="text" class="form-control  form-control-lg" rows="5" name="comment" ></textarea>
                                
							</div>
							<br/>
							<div class="input-group ">
								
								
								<input type="submit" class=" btn btn-success form-control  form-control-lg "  name="submit" value="submit" />
								
							</div>
							
						</form>
						</div>
					
  </div>
        </ul>
	  
	  
	  
	  </li>
	  
	  
    </ul>
	</div>
    <ul class="nav navbar-nav  navbar-right">
	
	<li><a  class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a>
	  
	  <ul class="dropdown-menu ">
          <div class="jumbotron ">
  
    <h1>Login in</h1>
    
	
	<div class="card-body">
						<form action="" method="POST">
							<div class="input-group ">
								
								
								<label for="Email">Your Email:</label>
								<br/>
									
								
								<input type="email"  name="l_name" class="form-control py-4"  required placeholder="Email">
								
							</div>
							<br/>
							<div class="input-group mb-3">
								
								<label class="password">Your password:</label>
								<br/>
								<input type="password" class="form-control py-4" name="l_password"  placeholder="Password" required />
								
							</div>
							<br/>
							<input type="submit"  name="login" class="btn btn-success" value="login"/>
							</br>
							
						</form>
						
					</div>
  
        </ul>
	  </li>
	  
	  
	  <li><a class="dropdown-toggle" data-toggle="dropdown"   href=""><span class="glyphicon glyphicon-user"></span> Sign Up</a>
	  
	  <div class="dropdown-menu ">
	   <div class="jumbotron ">
  
   <h1 style="color:green;">Register Form </h1>
    <div class=" alert-success text-center"><span><?php if(isset($success)){echo'<p class="jumbotron" >'.$success.'</p>';}?> </span> </div>
	
	<div class="card-body">
						<form action="" method="POST">
							<div class="input-group  ">
												
								<label for="name">Your Full Name</label>
								<input type="text" class="form-control py-4" placeholder="Name" name="name" required />
								
							</div>
					
							<br/>
							<div class="input-group ">
								
								<label class="Email">Your Email :</label>
								<input type="email" class="form-control py-4" placeholder=" Your Email  " name="email" required />
								
							</div>
							
							<br/>
							
							<div class="input-group  ">
								
								<label class="name">New Password:</label>
								<input type="password"  name="password" class="form-control " placeholder="Password"  required />
								
							</div>
							<br/>
							
						<div class="input-group  ">
								
								
								<input type="submit" class="btn-success" value="Register Now"   name="Register"/>
							
								
								
							</div>
					
							<br/>
							
							
							
							
						</form>
						
					</div>
 
  </li>
	
	
	
	
	
      
	  
	  
	  
	  
      
    </ul>
  </div>
</div>
</div>
  
<div class="container-fluid">
  <div class="jumbotron">
  <h1>Online Admission System</h1>
  <p> University admission or college admission or School is the process through which students enter tertiary education at universities and colleges. Systems vary widely from country to country, and sometimes from institution to institution.

In many countries, prospective university students apply for admission during their last year of high school or community college. In some countries, there are independent organizations or government agencies to centralize the administration of standardized admission exams and the processing of applications.</p>
</div>

</div>

<div class="container-fluid">
<div class="jumbotron">
  

  <img src="image11.jpg" class="mx-auto img-fluidt img-rightS">

</div>

</div>




<div class="container">

<div class="jumbotron">

<div class="row">

<div class="col-md-4">
<div class="card" style="width:300px">
  <img class="card-img-top img-circle" src="developerimg/saiful.jpg" alt="Card image" width="100" height="100">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


<br/>
<br/>

<div class="card" style="width:300px">
  <img class="card-img-top img-circle" src="developerimg/imran.jpg" alt="Card image" width="100" height="100">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


</div>

<div class="col-md-4">


<div class="card" style="width:300px">
  <img class="card-img-top img-circle" src="developerimg/akhi.jpg" alt="Card image" width="100" height="100">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


<br/>
<br/>

<div class="card" style="width:300px">
  <img class="card-img-top img-circle" src="developerimg/jami.jpg" alt="Card image" width="100" height="100">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


</div>
<div class="col-md-4">
<div class="card" style="width:300px">
  <img class="card-img-top img-circle" src="developerimg/ahad.jpg" alt="Card image" width="100" height="100">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

<br/>
<br/>

<div class="card" style="width:300px">
  <img class="card-img-top img-circle" src="developerimg/saiful1.jpg" alt="Card image" width="100" height="100">
  <div class="card-body">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>

</div>


</div>







</div>
</div>
</body>
</html>

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

<!DOCTYPE html>
<html lang="en">
<head>
  <title>online Admission project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
	body
{
	margin:auto;
	
	background:url('images/b222.jpg');
	background-size: 100%;
	background-repeat: no-repeat;
	min-height: 1000%;
	opacity: 0.9;
	
	
}
.jumbotron{
	
background-color:green;
color:black;
	
}



</style>
</head>
<body  style="">

<div class="navbar navbar-inverse ">
  <div class="container-fluid  ">
    

	<div class="nav-pills ">
    <ul class="nav navbar-nav   ">
      <li class="nav-item "><a  class="nav-link"href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Apply now <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="School_Home.php"><span class="glyphicon glyphicon-education">School</span></a></li>
          <li><a class="nav-link" href="College_Home.php"><span class="glyphicon glyphicon-education">College</span></a>
		  </li>
          <li><a class="nav-link " href="university_home.php"><span class="glyphicon glyphicon-education">University</span></a></li>
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
	
	<li><a  href="#"><span class="glyphicon glyphicon-user">
	
	<?php
	$username = mysqli_query($conn,"SELECT * FROM `users` WHERE `id` = '$user'");
	
	$userdata = mysqli_fetch_assoc($username);
	echo $userdata['name'];
	
	
	?>
	
	
	</span></a>
	  </li>
	  
	  
	  <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Logout</a>
	  
	  
	  
  
   
    
	
	
 
  </li>
	
	
	
	
	
      
	  
	  
	  
	  
      
   
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
  

  <img src="image11.jpg" class="mx-auto img-fluidt img-right">

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

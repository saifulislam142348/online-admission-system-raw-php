


<?php
require_once 'config.php';
$query = mysqli_query($conn,"SELECT * FROM `schoolapply` ");
$countsc = mysqli_num_rows($query); 




?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>std_dashbroadsc</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
	body
{
	margin:auto;
	
	background:url('images/b2.jpg');
	background-size: 100%;
	background-repeat: no-repeat;
	min-height: 1000%;
	opacity: 0.9;
	
	
}
.btns{
	float:right;
}
.schoolselect{
	
	background-image: url(images/bbb.jpg);
		padding:10px;
		width:40%;
		border: 3px solid white;
		color:green;
		height:auto;
}
.jumbotron{
	
background:url('../images/sss.jpg');
	
}
.breadcrumb{
	
	background-color:black;
	color:red;
}

</style>
</head>
<body class="">

<div class="header">
	
		<div style="text-align:center;" class="list-group-item active "><h2> School student Dashboard</h2> 
			
		
		
		
		</div>
		</div>
	<nav class="navbar navbar-primary">
		<div class="container-fluid ">
			<div class="navbar-header">
				<a class="navbar-brand" href="std_dashbroadsc.php">
					<i class="btn btn-primary "> home </i> </a>
			
				
			</div>
			
			</div>
			</br>
	
			
			
		
	</nav>
			
					
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="list-group">
					<a href="std_dashbroadsc.php" class="list-group-item active"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard 
					</a>
					<a href="schooldetails.php" class="list-group-item"><i class="glyphicon glyphicon-user"></i> Student Details
					</a>
					
					

					<a href="logoutsc.php" class="list-group-item"><i class="glyphicon glyphicon-off"></i> Logout
					</a>
				</div>
				
			</div>
		
		<div class="col-sm-9">
				<div class="content">
					<h1 class="text-primary"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard <small> Staticthis Area
					</small>
				</h1>
				<ol class="breadcrumb"> <li class="active"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard </li></ol>
					
					<div class="jumbotron">
					
					
					
					<ol class="breadcrumb ">
					Total School Students
					<h1>
					
					<i class="glyphicon glyphicon-user"></i>
					<?php
					echo $countsc;
					
					?>
					</h1>
					</ol>
					</div>
					
					
					
				</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	<footer>
		<p class="text-center"></p>
	</footer>

</body>
</html>

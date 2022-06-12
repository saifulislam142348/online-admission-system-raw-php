<?php
require_once '../config.php';
$query = mysqli_query($conn,"SELECT * FROM `schoolapply` ");
$countsc = mysqli_num_rows($query); 

$query = mysqli_query($conn,"SELECT * FROM `collegeapply`  ");
$countclg = mysqli_num_rows($query); 

$query = mysqli_query($conn,"SELECT * FROM `versityapply`  ");
$countvr = mysqli_num_rows($query); 



?>


<!DOCTYPE html>
<html>
<head>
	<title>admin_dashboard</title>
	
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
	body
{
	margin:auto;
	
	background:url('../images/b222.jpg');
	background-size: 100%;
	background-repeat: no-repeat;
	min-height: 1000%;
	opacity: 0.9;
	
	
}

</style>
</head>
<body>
	<div class="header">
	
		<div style="text-align:center;" class="list-group-item active "><h2> Admin Dashboard</h2> <?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p>  </p>
		<?php endif ?>
		
		
		</div>
		</div>
		<nav class="navbar navbar-primary">
		<div class="container-fluid">
			<div class="navbar-header">
				
				
			</div>
			
			
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="list-group">
					<a href="index.php" class="list-group-item active"> <i class="fa fa-dashboard"></i> Dashboard 
					</a>
					<div class="dropdown"><a class="dropdown-toggle list-group-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">Students </span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="schooldetails.php"><span class="glyphicon glyphicon-education">School</span></a></li>
          <li><a class="nav-link" href="collegedetails.php"><span class="glyphicon glyphicon-education">College</span></a>
		  </li>
          <li><a class="nav-link " href="versitydetails.php"><span class="glyphicon glyphicon-education">University</span></a></li>
        </ul>
      </div>
<a href="all users.php" class="list-group-item"><i class="glyphicon glyphicon-user"></i> All User
					</a>
					<a href="sms.php" class="list-group-item"><i class="glyphicon glyphicon-envelope"></i> Messege
					</a>
					
				 <a class="list-group-item" href="index.php?logout='1'" style="color: red;">logout</a>
					
					

					
				</div>
				
			</div>
			<div class="col-sm-9">
				<div class="content">
					<h1 class="text-primary"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard <small> Staticthis Area
					</small>
				</h1>
				<ol class="breadcrumb"> <li class="active"> <i class="glyphicon glyphicon-dashboard"></i> Dashboard </li></ol>
					<div class="row">
						<div class="col-sm-4">
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
					<div class="col-sm-4">
					<div class="jumbotron">
					<ol class="breadcrumb ">
					Total college Students
					<h1>
					<i class="glyphicon glyphicon-user"></i>
					<?php
					echo $countclg;
					
					?>
					</h1>
					</ol>
					</div>
					</div>
					<div class="col-sm-4">
					<div class="jumbotron">
					<ol class="breadcrumb ">
					Total Versity Students
					<h1>
					<i class="glyphicon glyphicon-user"></i>
					<?php
					echo $countvr;
					
					?>
					</h1>
					</ol>
					</div>
					</div>
				</div>
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	
	


	
</body>
</html>
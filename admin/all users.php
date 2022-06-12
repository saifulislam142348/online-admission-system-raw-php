<?php 
	

	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

<?php

require_once '../config.php';
 
if(isset($_SESSION['login_id'])){
	
	header('location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>admin_dashbroad</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style type="text/css">
	body
{
	margin:auto;
	
	background:url('../images/s.jpg');
	background-size: 100%;
	background-repeat: no-repeat;
	min-height: 1000%;
	opacity: 0.9;
	
	
}
</style>
</head>
<body >
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
			<ul class="nav navbar-nav navbar-right">
				
				
			</ul>
			
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="list-group">
					<a href="index.php" class="list-group-item "> <i class="glyphicon glyphicon-dashboard"></i> Dashboard **********
					</a>
					<div class="dropdown"><a class="dropdown-toggle list-group-item" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user">Students </span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="schooldetails.php"><span class="glyphicon glyphicon-education">School</span></a></li>
          <li><a class="nav-link" href="collegedetails.php"><span class="glyphicon glyphicon-education">College</span></a>
		  </li>
          <li><a class="nav-link " href="versitydetails.php"><span class="glyphicon glyphicon-education">University</span></a></li>
        </ul>
      </div>
        
     
			
			
					
					
					
					
					
					<a href="all users.php" class="list-group-item active "><i class="glyphicon glyphicon-user"></i> All User
					</a>
			
			
					<a href="sms.php" class="list-group-item"><i class="glyphicon glyphicon-envelope"></i> Messege
					</a>
					
					<a class="list-group-item" href="index.php?logout='1'" style="color: red;">logout</a>
				</div>
				
			</div>
					<div class="jumbotron" >
					<div class="container">
					
			
  <h2>Users Table</h2>
        
  <table  id="table_id"class="table  table-striped table-hover">
    <thead>
	
	
		
		<tr>
	     <th>ID</th>
        <th>Full Name</th>
        
        <
		<th>Email</th>
		<th>password</th>
		
		<th>Date_time</th>
      </tr>
    </thead>
    <tbody>
	<?php
	$result=mysqli_query($conn,"SELECT * FROM `users`  ");
	while($row=mysqli_fetch_assoc($result)){
		
		?>
      <tr>
        <td><?php echo $row['id']; ?></td>
		
        <td><?php echo $row['name']; ?></td>
        
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
		
		
        <td><?php echo $row['date_time']; ?></td>
		
      </tr>
		
		<?php
	}
	
	
	?>
      
    </tbody>
  </table>
  
					
					</div>
  </div>
  </div>
		
	</div>
	

</body>
</html>>
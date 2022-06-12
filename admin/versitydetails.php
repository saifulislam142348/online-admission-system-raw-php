<?php 
	

	

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
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
		<div class="container">
			<div class="jumbotron">
			<table  id="table_id"class="table  table-striped">
    <thead>
	
	<?php
	
	require_once '../config.php';
	
	if(isset($_POST['search'])){
		$versity=$_POST['versity'];
	$query=mysqli_query($conn,"SELECT * FROM `versityapply` WHERE `versity` ='$versity'");
	while($row=mysqli_fetch_assoc(	$query)){
	
		?>
		
		<tr>
	     <th>ID</th>
        <th>Full Name</th>
        <th>Father name</th>
        <th>Mother name</th>
		<th>Birthdate</th>
		<th>Nid</th>
		<th>Gender</th>
		<th>Email</th>
		<th>password</th>
		<th>Phone number</th>
		<th>coure name</th>
		<th>Date_time</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row['id']; ?></td>
		
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['fname']; ?></td>
      
      
        <td><?php echo $row['mname']; ?></td>
        <td><?php echo $row['bdate']; ?></td>
        <td><?php echo $row['nid']; ?></td>
      
      
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
		
		<td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['versity']; ?></td>
        <td><?php echo $row['date_time']; ?></td>
		
      </tr>
		
		<?php
	}
	}
	
	
	?>
	
      
    </tbody>
  </table>
				
					<form  action = "" method= "POST">
					<input type="text"  name ="versity" placeholder="Enter the Cource name" />
					<input type="submit" name ="search" value=" Class search "/>
					
					</form>
					
					
				
			</div>
			
			</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="list-group">
					<a href="index.php" class="list-group-item "> <i class="glyphicon glyphicon-dashboard"></i> Dashboard **********
					</a>
					<a class="list-group-item active"  href="#"><span class="glyphicon glyphicon-user">Students </span></a>
        
     
			<a href="" class="list-group-item active" ><i class="glyphicon glyphicon-education"></i> versity Details
					</a>
			
					
					
					
					
					
					<a href="all users.php" class="list-group-item"><i class="glyphicon glyphicon-user"></i> All User
					</a>
			
			
					<a href="sms.php" class="list-group-item"><i class="glyphicon glyphicon-envelope"></i> Messege
					</a>
					<a class="list-group-item" href="index.php?logout='1'" style="color: red;">logout</a>
					
				</div>
				
			</div>
					<div class="jumbotron" >
					<div class="container">
					
			
  <h2>Student Table</h2>
        
  <table  id="table_id"class="table  table-striped table-hover">
    <thead>
	
	
		
		<tr>
	     <th>ID</th>
        <th>Full Name</th>
        <th>Father name</th>
        <th>Mother name</th>
		<th>Birthdate</th>
		<th>Nid</th>
		<th>Gender</th>
		<th>Email</th>
		<th>password</th>
		<th>Phone number</th>
		<th>university name</th>
		<th>Date_time</th>
		<th>Action</th>
      </tr>
    </thead>
    <tbody>
	
	
	<?php
	$result=mysqli_query($conn,"SELECT * FROM `versityapply` ");
	while($row=mysqli_fetch_assoc($result)){
		
	?>
	<tr>
        <td><?php echo $row['id']; ?></td>
		
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['fname']; ?></td>
      
      
        <td><?php echo $row['mname']; ?></td>
        <td><?php echo $row['bdate']; ?></td>
        <td><?php echo $row['nid']; ?></td>
      
      
        <td><?php echo $row['gender']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
		
		<td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['versity']; ?></td>
        <td><?php echo $row['date_time']; ?></td>
		<td>
		<a href ="deletever.php?id=<?=base64_encode($row['id']);?>" class="btn btn-xs btn-danger"><i></i>Delete   </a>
		
		</td>
		
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
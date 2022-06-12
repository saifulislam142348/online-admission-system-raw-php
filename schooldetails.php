




<table  id="table_id"class="table  table-striped">
    <thead>
	
	<?php
	
	require_once 'config.php';
	
	if(isset($_POST['search'])){
		$email=$_POST['email'];
	$query=mysqli_query($conn,"SELECT * FROM `schoolapply` WHERE `email` ='$email'");
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
		<th>Class Name</th>
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
        <td><?php echo $row['school']; ?></td>
        <td><?php echo $row['date_time']; ?></td>
		
      </tr>
		
		<?php
	}
	}
	
	
	?>
	
      
    </tbody>
  </table>

	

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



</style>
</head>
<body class="">
	
		<div class="container">
			<div class="jumbotron">
				
					<form  action = "" method= "POST">
					<input type="text"  name ="email" placeholder="Enter your Email" />
					<input type="submit" name ="search" value=" your Email search "/>
					
					</form>
					
					
				
			</div>
			
			</div>
		

			</br>
	
			
			
		
	
			
	
	
	</span>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-3">
				<div class="list-group">
					<a href="std_dashbroadsc.php" class="list-group-item "> <i class="glyphicon glyphicon-dashboard"></i> Dashboard 
					</a>
					<a href="" class="list-group-item active "><i class="glyphicon glyphicon-user"></i> Student Details
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
					
			
  <h2>Student Table</h2>
        
  <table  id="table_id"class="table  table-striped">
    <thead>
	
	
		<tr>
	     
        
      <th>Name</th>
		<th>Gender</th>
		<th>Class </th>
		<th>Registration time</th>
      </tr>
    </thead>
	<?php
	$result=mysqli_query($conn,"SELECT * FROM `schoolapply` ");
	while($row=mysqli_fetch_assoc($result)){
		
		?>
		
    <tbody>
      <tr>
      
		
        <td><?php echo $row['name']; ?></td>
        
      
      
        <td><?php echo $row['gender']; ?></td>
        
		
	
        <td><?php echo $row['school']; ?></td>
        <td><?php echo date('d-M-Y',strtotime($row['date_time'])) ; ?></td>
		
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
		
	</div>
	<footer>
		<p class="text-center"></p>
	</footer>

</body>
</html>
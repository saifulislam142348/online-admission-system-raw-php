<?php

require_once 'config.php';
if(isset($_POST['csubmit'])){
	
$csname=$_POST['csname'];
$cfname=$_POST['cfname'];
$cmname=$_POST['cmname'];
$cbdate=$_POST['cbdate'];
$cnidnumber=$_POST['cnidnumber'];
$cgender=$_POST['cgender'];
$cemail=$_POST['cemail'];
$cpassword=$_POST['cpassword'];
$cc_password=$_POST['cc_password'];
$cphonenumber=$_POST['cphonenumber'];
$college=$_POST['college'];


if(!$csname==""){
	if(!$cemail==""){
		if(!$cpassword==""){
			if(!$cc_password==""){
				if(strlen($cpassword)>7){
					if($cpassword==$cc_password){
						$query=mysqli_query($conn,"SELECT * FROM `collegeapply` WHERE `email` = '$cemail'");
						if(mysqli_num_rows($query)==0){
							$result=mysqli_query($conn,"INSERT INTO `collegeapply`(`name`, `fname`, `mname`, `birthday`, `nid`, `gender`, `email`, `password`, `phone`, `college_name`) VALUES ('$csname','$cfname','$cmname','$cbdate','$cnidnumber','$cgender','$cemail','$cpassword','$cphonenumber','$college')");
							if($result){
							if($result){
								$success='Data Insert Successfully';
							
							}else{
								$nosuccess='Data Insert error';
								
							}
							
						}
						else{
							$email_exist='this email already exist';
							
						}
					}
					else{
						$psw_match='no match the password';
					}
				}
				else{
					$psw_char='password must be 8 character';
				}
				
			}else
			{
				$c_psw=' confirm password feild is required';
			}
			
		}
		else{
			$pass=' password feild is required';
		}
		
	}else{
		$email_fill=' email feild is required';
		
	}
	
}
else{
	$name_required= 'name feild is required';
}

if(!$cgender==""){
	if(!$cfname==""){
		if(!$cmname==""){
			
		if(!$cbdate==""){
			if(!$cphonenumber==""){
				if(!$college==""){
					
				}else{
					$schl='Phone_Number feild is required';
				}
				
			}else{
				$phone='Phone_Number feild is required';
			}
			
		}
		else{
			$bidate='birthday  feild is required';
		}
		}
		else{
			$moname='mother name feild is required';
		}
		
		
	}else{
		$faname='Father name feild is required';
	}
	
	
}else{$gen='Gender feild is required';
}
}
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>School registration form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style type="text/css">
    body{
      background-color:pink;
      background-size: 100%;
      background-repeat: no-repeat;
      min-height: 1000%;
      opacity: 0.9;
      background
    }
    #form{
      background-color:white;

    }
    .registration{
		color:green;
      font-size: 50px;
      font-family: : Agency FB;
      font-weight: 700;
      border-bottom-style: ridge;
    }
	.jumbotron{
		background-image: url(images/bbb.jpg);
		margin:auto;
		width:50%;
		border: 3px solid white;
		color:green;
		height:auto;
	}
	.text-center{
		color:red;
		bold:20px;
	}
	.title{
		background-color:black;
		margin:auto;
		width:50%;
		text-align:center;
		border:3px white solid;
		color:red;
		
		
	}
	.error{
		color:red;
		text-align:center;
		font-family: "Times New Roman", Times, serif;
		
	}
	.success{
		text-align:center;
		
	}
  </style>
</head>
<body>

    
<div class="row">
     
  
   
	<div class="container">
	<div class="btn btn-danger pl-3"><a href="College_Home.php">College_Home</a></div>
	<div class="title">
    <h1> Registration  Form</h1>
   
	</div>
	<div class=" alert-success text-center"><span><?php if(isset($success)){echo'<p class="jumbotron" >'.$success.'</p>';}?> </span> </div>
	
	<div class="jumbotron">
	
	<div class="card-body ">

	<div class="row">
	
	<form action="" method="POST">
	                     
	
						
							<div class="input-group>
								
								<label class="name">Your Full name</label>
								<input type="text" class="form-control py-4" name="csname" placeholder="Full name" value="<?=isset($csname) ? $csname:'' ?>"/>
								<span class="error"><?php if(isset($name_required)){echo$name_required;}?> </span>
							</div>
							<br/>
							<div class="input-group>
								
								<label class="name"> Your Father Name:</label>
								<input type="text" class="form-control py-4" name="cfname" placeholder=" Father Name" value="<?=isset($cfname) ? $cfname:'' ?>"/>
								<span class="error"><?php if(isset($faname)){echo $faname;}?> </span>
							</div>
							<br/>
							
							
							
							<div class="input-group>
								
								<label class="name">Your Mother Name:</label>
								<input type="text" class="form-control py-4" name="cmname" placeholder="Mother Name" value="<?=isset($cmname) ? $cmname:'' ?>"/>
								<span class="error"><?php if(isset($moname)){echo $moname;}?> </span>
								</div>
						
							<br/>
							
						<div class="input-group>
							
								
								<label class="name">Your Birth Date :</label>
								<input type="date" class="form-control py-4" name="cbdate"  id="birthday" placeholder=" mm/dd/yy" value="<?=isset($cbdate) ? $cbdate:'' ?>"/>
								<span class="error"><?php if(isset($bidate)){echo $bidate;}?> </span>
			             </div>
							<br/>
							
							<div class="input-group>
								
								<label class="name">Your Nid/Birth certificate:</label>
								<input type="text"  name="cnidnumber"class="form-control py-4" placeholder=" Nid/Birth certificate" value="<?=isset($cnidnumber) ? $cnidnumber:'' ?>"/ >
								<span class="error"><?php if(isset($name_required)){echo$name_required;}?> </span>
						</div>
							<br/>

							<p>Gender</p>
						<div class="input-group>	
						<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="cgender"  value="male"/>
  <label class="form-check-label" for="inlineRadio1">male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="cgender"  value="female"/>
  <label class="form-check-label" for="inlineRadio2">female</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="cgender"  value="others" >
  <label class="form-check-label" for="inlineRadio3">Others</label>
</div>
                            
                 <span class="error"><?php if(isset($gen)){echo $gen;}?> </span>           
							</div>
							<br/>
				
							
		<div class="input-group>
								<label for="Email">Your Email :</label>
								<input type="email" class="form-control py-4" name="cemail" placeholder="Your_Email" value="<?=isset($cemail) ? $cemail:'' ?>"/>
								<span class="error"><?php if(isset($email_fill)){echo $email_fill;}?> </span>
						<span class="error"><?php if(isset($email_exist)){echo $email_exist;}?> </span>
							</div>
							<br/>
							
							<div class="input-group>
							<label for="name">New Password:</label>
								<input type="password"  name="cpassword" class="form-control py-4" placeholder="Must be 8 character" value="<?=isset($cpassword) ? $cpassword:'' ?>"/>
					
								<span class="error"><?php if(isset($pass)){echo $pass;}?> </span>
								<span class="error"><?php if(isset($psw_char)){echo $psw_char;}?> </span>
								<span class="error"><?php if(isset($psw_match)){echo $psw_match;}?> </span>
							</div>
							<br/>
							
							<div class="input-group>
							<label class="name">Confirm Password:</label>
								<input type="password"  name="cc_password" class="form-control " placeholder="Must be 8 character" value="<?=isset($cc_password) ? $cc_password:'' ?>"/>
							
								<span class="error"><?php if(isset($c_psw)){echo $c_psw;}?> </span>
								<span class="error"><?php if(isset($psw_char)){echo $psw_char;}?> </span>
								<span class="error"><?php if(isset($psw_match)){echo $psw_match;}?> </span>
								
							
							</div>
							
							<br/>
							<div class="input-group>
							<label class="name" >Your Phone Number:</label>
								<input type="text"  name="cphonenumber" class="form-control py-8"  placeholder="Phone_Number" value="<?=isset($cphonenumber) ? $cphonenumber:'' ?>"/>
								<span class="error"><?php if(isset($phone)){echo $phone;}?> </span>
								</div>
							<br/>
							
							<label class="name" >College group</label>
							<div class="">	
<select id="inputState" class="form-control" name="college" value="<?=isset($college) ? $college:'' ?>"/>
                                        <option selected>Xi Group...</option>
                                        <option>science</option>
                                      <option >Business studies </option>
                                     <option>Humanities</option>
                               </select>

<span class="error"><?php if(isset($schl)){echo $schl;}?> </span>

</div>
								<br/>
								<div class="input-group>
								<label for="Address"> Address:</label>
								  <textarea class="form-control" name="stdaddress" rows="3" id="Address" ></textarea>
                                
							</div>
							<br/>
							
							
							
							
							<input type="submit"  class="btn btn-success  "  name="csubmit" value="register now"/>
							</div>
							</div>
						</form>
						</div>
						</div>
	
	</div>
	</div>
	</div>
	
						
					
					
					</body>
					</html>
       
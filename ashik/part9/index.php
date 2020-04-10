<?php
  
  $message = "";
  if(isset($_POST['submit'])){
	  
	  $first_name = $_POST['f_name'];
	  $last_name = $_POST['l_name'];
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  
	  if(empty($first_name)){
		  $message = "First Name Can't be empty";
	  }
	  elseif(empty($last_name)){
		  		  $message = "Last Name Can't be empty";
	  }
	  elseif(empty($email)){
		  		  $message = "Email Can't be empty";
	  }
	  elseif(empty($password)){
		  		  $message = "Password is Required";
	  }
	  
	  else{
		  $success= "Register Successfully";
	  }
	  
  }

?>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Form Validation</title>
	<style type="text/css">
	
	.form_area{
		max-width: 500px;
		margin:50px auto;
		border: 1px solid #DDD;
		box-shadow: 0 0 20px #535353;
		box-sizing: border-box;
		padding:20px;
	}
	label{
		display:block;
		font-size:15px;
		font-family:Tahoma;
		margin-bottom: 5px;
		
	}
	input{
		width:100%;
		padding:8px 10px;
		box-sizing:border-box;
		border-radius:5px;
		margin-bottom:20px;
	}
	input[type="submit"]{
		background:#2386e7;
		color:#FFF;
		font-size:17px;
		cursor:pointer;
		width:auto;
		padding:10px 50px;
		border:none;
	}
	</style>
</head>
<body>
	  <div class="form_area">
	  
	   <form action="#" method="POST">
	  
	     <label for="f_name"> First Name </label>
	     <input type="text" name="f_name" id="f_name"/>
		
		 
		 <label for="l_name"> Last Name </label>
	     <input type="text" name="l_name" id="f_name"/>
		 
		 <label for="email"> email  </label>
	     <input type="email" name="email" id="email"/>
		 
		 <label for="password"> password </label>
	     <input type="password" name="password" id="password"/>
		 
		 
	     <input type="submit" name="submit" value="Register"/>
		 
		 
		  <p style="color:red">
			 <?php
			    if(isset($message)){
				echo $message;
				}
			 ?>
		 </p>
		 
		  <p style="color:green">
			 <?php
			    if(isset($success)){
				echo $success;
				}
			 ?>
		 </p>
		 
		 
		 </form>
	  </div>
	
	
</body>
</html>
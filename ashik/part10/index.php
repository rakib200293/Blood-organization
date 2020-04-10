

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
	input,textarea{
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
	  
	   <form action="send.php" method="POST">
	  
	     <label for="f_name"> Name </label>
	     <input type="text" name="name" id="f_name" required />
		
		 
		 <label for="l_name"> Phone </label>
	     <input type="text" name="phone" id="f_name"/>
		 
		 <label for="email"> Subject  </label>
	     <input type="text" name="subject" id="email"/>
		 
		 <label for="password">Message </label>
	     <textarea name="message" id="message"></textarea>
		 
		 
	     <input type="submit" name="submit" value="Sent Message"/>
		 
		 <p style="color:green;">
		 <?php
		   if(isset($_REQUEST['success'])){
		   echo $_REQUEST['success'];
		 }
		 
		 ?>
		</p>
		 
		 
		 </form>
	  </div>
	
	
</body>
</html>
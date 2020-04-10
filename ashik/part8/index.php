<?php
 //Php Exttract Functiom
  $text = array(
    'name' => 'Rakib',
    'age' => '20'
  
  );
  extract($text);
  echo "MY name is $name"."<br>";
  echo "MY age is $age";
  
  
  
  
  echo "<br>";
  echo "<br>";
  //Php EOT Function
  
  $content = <<<EOT
     <ul>
     	
     		<li><a href="">Home</a></li>
     		<li><a href="">About</a></li>
     		<li><a href="">Contact</a></li>
     		<li><a href=""> Don't Access</a></li>
     	
     	
     </ul>
EOT;
   echo $content;  



 
  echo "<br>";
  echo "<br>"; 
  echo "<br>";
  echo "<br>";   
?>


           <?php
		   
		      if(isset($_GET['register'])){
		      $first = $_GET['your_name'];
			  $second = $_GET['your_email'];
			  $third = $_GET['your_password'];
			}
		   
		   ?>

			<!DOCTYPE HTML>
			<html lang="en-US">
			<head>
				<meta charset="UTF-8">
				<title></title>
			</head>
			<body>
				
				<form action="" method="GET">
							<input type="text" name="your_name" placeholder="Name" /><br><br>
							<input type="email" name="your_email" placeholder="Email" /><br><br>
							<input type="password" name="your_password" placeholder="Password" /><br><br>
							<input type="submit" name="register" value="Register"/><br><br>
				</form>
				
				
				<?php if(isset($_GET['register'])) : ?>
				
				<h1>My Name is :<?php echo "$first";?></h1>
				<h1>My Email is :<?php echo "$second";?></h1>
				<h1>My Password is :<?php echo "$third";?></h1>
				
				
				<?php else : ?>
				
				  <h1>No One Submit the from</h1>
				
				<?php endif;?>
				
			</body>
			</html>



<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title><?php echo title(); ?></title>
</head>
<body>
	
	<?php
	     
		 //Loop
		 
		 for($i=0;$i<=10;$i++){
			 echo "European It"."$i"."<br>";
		 }
		 
		 
		 echo "<br>";
	     echo "<br>";
	     echo "<br>";
		 
		 //Condition
		 $roll = 20;
		 $reg = 200;
		 $year = 2019;
		 
		 if($roll==20 && $reg == 200 && $year == 2019 ){
			 echo "He passed";
		 }
		 else{
			 echo "He Failed";
		 }
		 
		 
		 
		 
		 
		 function title(){
			 echo "This is our website";
		 }
		 
		 
		  
		 echo "<br>";
	     echo "<br>";
	     echo "<br>";
		 
		
		 function coder(){
			 
			 return 10+20;
		 }
	    echo coder();
		
		 
		 
		 
		 
	     function add($a,$b){
			 
			 echo $a+$b;
		 }
		 
	
	?>
	
	<h1><?php echo add(50,60); ?></h1>
	
	
</body>
</html>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<?php
	
	
	$students = array(
	   'roll1' => 'Designer',
	   'roll2' => 'Developper',
	   'roll3' => 'Programmer',
	   'roll4' => 'Support Maneger'
	
	);
	
	foreach($students as $roll => $student ){
		echo "$roll"." : "."$student"."<br>";
	}
	
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	
	
	$students = array("Alamin","Goutom","Kawser","Hira");
	
	foreach($students as $student ){
		echo "$student"."<br>";
	}
	
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	
	$content =0;
	while($content <=10 ){
		echo "Hellow"."$content"."<br>";
		$content++;
	}
	
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	
	$content =10;
	while($content >=0 ){
		echo "Hellow"."$content"."<br>";
		$content--;
	}
	
	
	
	
	?>
	
	
	
	
</body>
</html>
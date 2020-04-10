

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Title</title>
</head>
<body>
<?php

	//Php Same Varriable
	$name = 'European It Solution';
	$name .= '  Coder It';
	$name .= '  Novo It';
	
	echo $name;
	echo "<br>";
	echo "<br>";
	
	
	//Php Array
	
	$students = array("Alamin","Goutom","Kawser","Hira");
	$numbers  = array(10,20,30,40,50);
	
	echo $students[1];
	echo "<br>";
	echo "<br>";
	echo $numbers[2] . $numbers[4];
	echo "<br>";
	echo $numbers[2] + $numbers[4];
	echo "<br>";
	echo $numbers[2] - $numbers[4];
	
	echo "<br>";
	echo "<br>";
	
	$team = array(
	   't1' => 'Designer',
	   't2' => 'Developper',
	   't3' => 'Programmer',
	   't4' => 'Support Maneger'
	);
	
	echo $team['t2'];
	
?>
	
	
	
	
</body>


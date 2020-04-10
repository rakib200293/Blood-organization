<?php




$db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "blood_club";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
 if(isset($_REQUEST['update'])){
		 
		 
		  $id = $_GET['id'];
		 
		   $d_name = $_REQUEST['d_name'];
		   $d_phone = $_REQUEST['d_phone'];
		   $d_date = $_REQUEST['d_date'];
		   $b_group = $_REQUEST['b_group'];
		   
		   
		   $d_image = $_FILES['d_image']['name'];
		   if(isset($d_image)){ 
		    move_uploaded_file($_FILES['d_image']['tmp_name'], "images/$d_image");
			}
			
		   $d_address = $_REQUEST['d_address'];
		   $d_occupation = $_REQUEST['d_occupation'];
		   $donet_addreess = $_REQUEST['donet_addreess'];
		   $p_name = $_REQUEST['p_name'];
		   $p_phone = $_REQUEST['p_phone'];
		   $p_address = $_REQUEST['p_address'];
		   
		  
		    $sql = "UPDATE donnerlist SET donner_name='$d_name',donner_phone='$d_phone',donnet_date='$d_date',blood_group='$b_group',donner_image='$d_image',donner_address='$d_address',d_occupation='$d_occupation',donnet_address='$donet_addreess',patient_name='$p_name',patient_phone='$p_name',patient_address='$p_address', where id='$id'";
		  
		  if(mysqli_query($conn,$sql)){
			   echo "Data Update Successfully";
		   }
		 else{
			 echo "Something went wrong";
		 }
	 }
	 
	 
	 ?>
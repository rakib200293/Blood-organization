<?php
   session_start();
   
	if(isset($_SESSION['username'])){
	  header('location:dashboard.php');
   }else{
	   
   }
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "blood_club";
	
	//Create Connection
	$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

	
   
   
   if(isset($_POST['submit'])){
	   $uname = $_POST['username'];
	   $password = md5($_POST['password']);
	   
	   $sql = "select * from users where user_name='".$uname."'AND password='".$password."' limit 1";
	   
	   $result = mysqli_query($conn,$sql);
	   $userData= mysqli_fetch_object($result);
	   if(mysqli_num_rows($result)==1){
		$_SESSION['userid']=  $userData->id;
		    $_SESSION['username']=$uname;
		  header('location:dashboard.php');
		   
	   }
	   else{
		  header('location:index.php');
		  
	   }
   }

?>





<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
		
   <link rel="stylesheet" href="style.css" />
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="blood-pic">

  
 
  <!-- Content Wrapper. Contains page content -->
  <div class="">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
       <div class="row text-center">
	       
        <!-- left column -->
        <div class="col-md-12 image">
		       <div class="heading">
			      <h3 style="color:#d63031;">আপনার দেয়া রক্তই পারে একটি জীবন বাঁচাতে</h3>
			   </div>
		          
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">প্রথমে লগ-ইন করুন</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ডোনারের নাম/ডোনারের ফোন নাম্বার </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="নাম/ফোন নাম্বার" name="username">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">পাসওয়ার্ড</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="পাসওয়ার্ড" name="password">
                </div>
               
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit"  name="submit" class="btn btn-primary">Login</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
		</div>
		</div>
		

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 
 
  

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>
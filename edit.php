<?php
    
	
	require_once('header.php');
	
	
   



	 
   ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
       <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">ফ্রমটি পুরণ করুন</h3>
            </div>
            <!-- /.box-header -->
				<?php
			 //Validation
     if(isset($_REQUEST['eid'])){
		 
	   
  $sql = "select * from donnerlist where id=".$_REQUEST['eid'];
	   
	   $result = mysqli_query($conn,$sql);
	  $data = mysqli_fetch_object($result);
	   if(mysqli_num_rows($result)==0){ 
		   	   echo '<h1>Not found!</h1>';
		 exit;
	   }else if($data->add_by != $_SESSION['userid']){
		   echo '<h1>Not found!</h1>';
		   exit;
	   }
   }
   
   
    

?>
            <!-- form start -->
            <form role="form" action="update.php?id=<?php echo $id ?>" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">ডোনারের নাম</label>
                  <input type="text" class="form-control" id="" value="<?php echo $data->donner_name; ?>" placeholder="নাম" name="d_name">
                  
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">ডোনারের ফোন নাম্বার</label>
                  <input type="number" class="form-control" id="exampleInputPassword1" value="<?php echo $data->donner_phone; ?>" placeholder="ফোন নাম্বার" name="d_phone">
                </div>
				<div class="form-group">
                  <label for="exampleInputPassword1">রক্ত দেয়ার তারিখ</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" value="<?php echo $data->donnet_date; ?>" placeholder="তারিখ" name="d_date">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">রক্তের  গ্রুপ</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data->blood_group; ?>" placeholder="রক্তের  গ্রুপ" name="b_group">
                </div>
				
                <div class="form-group">
                  <label for="exampleInputFile">ডোনারের ছবি </label>
                  <input type="file" id="exampleInputFile" value="<?php echo $data->donner_image; ?>" name="d_image">

                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">ডোনারের ঠিকানা  </label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data->donner_address; ?>" placeholder="ঠিকানা" name="d_address">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">ডোনারের পেশা   </label>
                  <select class="form-control" id="exampleInputPassword1"  name="d_occupation">
					  <option <?php if($data->d_occupation =='ডাক্তার'){ echo 'selected';} ?> value="ডাক্তার">ডাক্তার </option>
					  <option <?php if($data->d_occupation =='ইঞ্জিনিয়ার'){ echo 'selected';} ?> value="ইঞ্জিনিয়ার">ইঞ্জিনিয়ার </option>
					  <option <?php if($data->d_occupation =='ছাত্র'){ echo 'selected';} ?> value=">ছাত্র">ছাত্র </option>
					  <option <?php if($data->d_occupation =='ব্যবসায়ী'){ echo 'selected';} ?> value="ব্যবসায়ীী">ব্যবসায়ী</option>
					  <option <?php if($data->d_occupation =='চাকুরীজীবী'){ echo 'selected';} ?> value="চাকুরীজীবী">চাকুরীজীবী </option>
					  <option <?php if($data->d_occupation =='অন্যান্য'){ echo 'selected';} ?> value="অন্যান্য ">অন্যান্য  </option>
					</select>
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">রক্ত দেয়ার স্থান   </label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data->donnet_address; ?>" placeholder="রক্ত দেয়ার স্থান " name="donet_addreess">
                </div>
				
				
				<div class="form-group">
                  <label for="exampleInputPassword1">রোগীর নাম   </label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data->patient_name; ?>" placeholder="রোগীর নাম " name="p_name">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">রোগীর ফোন নাম্বার </label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data->patient_phone; ?>" placeholder="রোগীর ফোন নাম্বার " name="p_phone">
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">রোগীর ঠিকানা    </label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data->patient_address; ?>" placeholder="রোগীর ঠিকানা " name="p_address">
                </div>
				
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
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

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
     <strong>Copyright &copy; 2019 <a href="#">Blood Club</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

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
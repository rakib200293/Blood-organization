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
              <h3 class="box-title">সকল তথ্য</h3>
            </div>
            <!-- /.box-header -->
			<?php
			 //Validation
     if(isset($_REQUEST['did'])){
		 
	   
  $sql = "select * from donnerlist where id=".$_REQUEST['did'];
	   
	   $result = mysqli_query($conn,$sql);
	  $data = mysqli_fetch_object($result);
   }

?>
           
		   
		   <table class="table table-border">
		      
			 <tr>
				<td>ডোনারের নাম</td>
				 <td><?php echo $data->donner_name; ?></td>
				 <td rowspan="5"><img src="images/<?php echo $data->donner_image; ?>" style="width: 200px;"/></td>
			 </tr>
			 <tr>
				 <td>ডোনারের ফোন নাম্বার</td>
                  <td><?php echo $data->donner_phone; ?></td>
			 </tr>
			 <tr>
				  <td>রক্ত দেয়ার তারিখ</td>
                  <td><?php echo $data->donnet_date; ?></td>
			</tr>
			
			<tr>
				 <td>রক্তের  গ্রুপ</td>
                  <td><?php echo $data->blood_group; ?></td>
		    </tr>
		    <tr>
				  <td>ডোনারের ঠিকানা </td>
                  <td><?php echo $data->donner_address; ?></td>
			</tr>
			
			<tr>
				 <td>ডোনারের পেশা</td>
                  <td><?php echo $data->d_occupation; ?></td>
		    </tr>
		    <tr>
				  <td>রক্ত দেয়ার স্থান   </td>
                  <td><?php echo $data->donnet_address; ?></td>
			</tr>
			
			<tr>
				 <td>রোগীর নাম  </td>
                  <td><?php echo $data->patient_name; ?></td>
		   </tr>
		   <tr>
				  <td>রোগীর ফোন নাম্বার </td>
                  <td><?php echo $data->patient_phone; ?></td>
			</tr>
			<tr>
				  <td>রোগীর ঠিকানা</td>
                  <td><?php echo $data->donner_address; ?></td>
			</tr>
		   </table>
		   
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
    <strong>Copyright &copy; 2019 <a href="#">Blood Club</a>.</strong> All rights reserved by <b>Md Rakib Islam</b>.
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
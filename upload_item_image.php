<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/crypto-dark-admin/src/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jan 2019 09:24:25 GMT -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://crypto-admin-templates.multipurposethemes.com/crypto-dark-admin/images/favicon.ico">

    <title>Food Stock- Upload Item Image </title>
  
	<!-- Bootstrap 4.0-->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	
	<!-- Bootstrap extend-->
	<link rel="stylesheet" href="../css/bootstrap-extend.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="../css/master_style.css">

	<!-- Crypto_Admin skins -->
	<link rel="stylesheet" href="../css/_all-skins.css">
	<link rel="stylesheet" href="../css/dropzone.css">
	<link rel="stylesheet" href="../css/style.css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

  <?php
			include ("../include/header.php");
  ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <?php
  include("../include/sidebar.php");
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
			Item Image
      </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="breadcrumb-item"><a href="#">Upload Item Image</a></li>
      
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     
      
     <!-- Basic Forms -->
      <div class="box box-solid bg-dark">
        <div class="box-header with-border">
          <h3 class="box-title">IMAGE ADDING FORM</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
	<!--<form id="upload-widget" method="post" action="/upload" class="dropzone">-->
	<form method="post" action="insert_item_image.php" enctype="multipart/form-data">
        <div class="box-body">
          <div class="row">
            <div class="col-12">
            	
				
				<div class="form-group row">
							<label for="example-text-input" class="col-sm-2 col-form-label">Item Name</label>
						  <div class="col-sm-10">
							<div class="form-group">
				
								<select class="custom-select form-control" id="location2" name="itype">
																		<option value="0">Select</option>
																		
									<?php
											include '../include/connect.php';
											
											$x=$link->rawQuery('select * from itemtb where is_Active=1');
											if($x)
											{
												foreach($x as $cat)
												{
													?>
													<option value="<?php echo $cat['itemId'];?>"><?php echo $cat['itemName'];?></option>													
													<?php
													
												}
											}
									?>
				
								</select>
							</div>
				
						  </div>
						</div>
						<!--<div style="background-color: honeydew;padding: 125px;color: black;border: dotted; border-color: #3ca981;   margin-left: 200px;">
				
				  <div id="dropzone"><form action="/upload" class="dropzone needsclick" >

				  <div class="dz-message needsclick" style="margin-left: 285px;margin-top: -91px;font-size: 16px;" id="demo-upload">
					Drop files here or click to upload.<br />
					
				  </div>

				</form></div>

				
				</div>-->
						 <div class="form-group">
                  <label for="exampleInputFile">Image</label>
				   <input name="files[]" type="file" id="exampleInputFile" style="margin-left: 150px;" multiple />
                 <!-- <input type="file" name="scimg" id="exampleInputFile" style="margin-left: 90px;">-->
                </div>
				

					<div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Add</button>
              </div>	
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
		</form>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
      
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
   <?php
			include '../include/footer.php';
   ?>
 <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>


	<!-- jQuery 3 -->
	<script src="../js/jquery.min.js"></script>
	
	<!-- popper -->
	<script src="../js/popper.min.js"></script>
	
	<!-- Bootstrap 4.0-->
	<script src="../js/bootstrap.min.js"></script>
	
	<!-- SlimScroll -->
	<script src="../js/jquery.slimscroll.min.js"></script>
	
	<!-- FastClick -->
	<script src="../js/fastclick.js"></script>
	
	<!-- Crypto_Admin App -->
	<script src="../js/template.js"></script>
	
	<!-- Crypto_Admin for demo purposes -->
	<script src="../js/demo.js"></script>
	
	<script src="../js/dropzone.js"></script>
	
	
</body>

<!-- Mirrored from crypto-admin-templates.multipurposethemes.com/crypto-dark-admin/src/pages/forms/general.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jan 2019 09:24:25 GMT -->
</html>

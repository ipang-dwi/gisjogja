<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?php echo $this->session->userdata('judul');?> | <?php echo $this->session->userdata('desc');?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assets/dist/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
    <link href="<?php echo base_url(); ?>assets/dist/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url(); ?>assets/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="<?php echo base_url(); ?>assets/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- growl -->
    <link href="<?php echo base_url(); ?>assets/plugins/growl/jquery.growl.css" rel="stylesheet" type="text/css" />
	<!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
	<!-- growl -->
    <script src="<?php echo base_url(); ?>assets/plugins/growl/jquery.growl.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <link href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
	<!-- The fav icon -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>favicon.ico">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="<?php echo $this->session->userdata('tema');?> layout-top-nav">
    <div class="wrapper">
		<script type="text/javascript">
		  <?php if(validation_errors()) { ?>
			$.growl.warning({ message: "Username and Password must be filled .." });
		  <?php } ?>
		  <?php if($this->session->flashdata('result_login')) { ?>
			$.growl.error({ message: "Username and Password isn't valid .." });
		  <?php } ?>
		</script>
      <header class="main-header">      
		<nav class="navbar navbar-static-top">
            <a href="<?php echo base_url(); ?>" class="logo"><?php if($this->session->userdata('nav')=='') echo $this->session->userdata('judul'); else echo "<img src='".base_url()."assets/uploads/logo/".$this->session->userdata('nav')."' />";?></a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
		<div class="container-fluid">
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="navbar-collapse">
            <?php echo form_open('front','class="navbar-form navbar-right"'); ?>
              <div class="form-group">
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>"/>
				<input type="password" class="form-control" name="password" placeholder="Password" />
				<button type="submit" method ="post" target="" class="btn btn-flat <?php
				if($this->session->userdata('tema')=='skin-yellow') echo "btn-warning";
				if($this->session->userdata('tema')=='skin-red') echo "btn-danger";
				if($this->session->userdata('tema')=='skin-blue') echo "btn-primary";
				if($this->session->userdata('tema')=='skin-green') echo "btn-success";
				if($this->session->userdata('tema')=='skin-purple') echo "btn-purple bg-purple";
				if($this->session->userdata('tema')=='skin-black') echo "bg-black";
			  ?>" id="submit">Login</button>
              </div>
            <?php echo form_close(); ?>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper" bgcolor="black">
        <div class="container-fluid">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
             
            </h1>
          </section>
          <!-- Main content -->
          <section class="content">
		  <div class="row">
		  <div class="col-lg-3">
		  </div>
		  <div class="col-lg-6">
			<div class="box <?php
				if($this->session->userdata('tema')=='skin-yellow') echo "box-warning";
				if($this->session->userdata('tema')=='skin-red') echo "box-danger";
				if($this->session->userdata('tema')=='skin-blue') echo "box-primary";
				if($this->session->userdata('tema')=='skin-green') echo "box-success";
				if($this->session->userdata('tema')=='skin-purple') echo "box-purple";
				if($this->session->userdata('tema')=='skin-black') echo "box-black";
			  ?>">
                <div class="box-header">
					 <i class="fa fa-desktop <?php
				if($this->session->userdata('tema')=='skin-yellow') echo "text-yellow";
				if($this->session->userdata('tema')=='skin-red') echo "text-red";
				if($this->session->userdata('tema')=='skin-blue') echo "text-blue";
				if($this->session->userdata('tema')=='skin-green') echo "text-green";
				if($this->session->userdata('tema')=='skin-purple') echo "text-purple";
				if($this->session->userdata('tema')=='skin-black') echo "text-black";
			  ?>"></i>
					 <h3 class="box-title">Sistem Informasi <?php echo $this->session->userdata('judul');?></h3>
                </div>
                <div class="box-body">
					<center><img src="<?php echo base_url(); ?>assets/uploads/logo/<?php echo $this->session->userdata('logo');?>" width="85%"/></center>
                </div>
                <div class="box-footer clearfix">
                  
                </div>
              </div>
		  </div>
		  <div class="row">
		  <div class="col-lg-3">
		  </div><!-- row -->
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="pull-right hidden-xs">
            Version 0.1.a
          </div>
          Copyright &copy; <?php echo date('Y')?>, <?php echo $this->session->userdata('creator');?>&trade;. All rights reserved.
        </div><!-- /.container -->
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery UI 1.11.2 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="<?php echo base_url(); ?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url(); ?>assets/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url(); ?>assets/plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url(); ?>assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='<?php echo base_url(); ?>assets/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <!--script src="<?php echo base_url(); ?>assets/dist/js/demo.js" type="text/javascript"></script-->
  </body>
</html>
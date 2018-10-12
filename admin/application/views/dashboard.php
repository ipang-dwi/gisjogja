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
    <!-- jvectormap -->
    <link href="<?php echo base_url(); ?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <!--link href="<?php echo base_url(); ?>assets/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" /-->
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
  <body class="<?php echo $this->session->userdata('tema');?>">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
         <a href="<?php echo base_url(); ?>" class="logo"><?php if($this->session->userdata('nav')=='') echo $this->session->userdata('judul'); else echo "<img src='".base_url()."assets/uploads/logo/".$this->session->userdata('nav')."' />";?></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo base_url(); ?>assets/uploads/pics/<?php echo $this->session->userdata('pic'); ?>" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo ucwords($this->session->userdata('username')); ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo base_url(); ?>assets/uploads/pics/<?php echo $this->session->userdata('pic'); ?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo ucwords($this->session->userdata('username')); ?> - <?php echo ucwords($this->session->userdata('jt')); ?>
                      <small>Member sejak, <?php 
					  $date = new DateTime($this->session->userdata('since'));
					  echo $date->format('d M Y');
					  ?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>dashboard/profile" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>front/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>assets/uploads/pics/<?php echo $this->session->userdata('pic'); ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo ucwords($this->session->userdata('username')); ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li <?php if($this->session->userdata('option')=='dashboard') echo 'class="active"';?> >
              <a href="<?php echo base_url();?>dashboard">
                <i class="fa fa-desktop"></i> <span>Dashboard</span>
              </a>
            </li>
			
                <li <?php if($this->session->userdata('option')=='wisata') echo 'class="active"';?>><a href="<?php echo site_url('dashboard/wisata')?>"><i class="fa fa-map-marker"></i> Wisata Kuliner</a></li>			
				</li>
                <li <?php if($this->session->userdata('option')=='user') echo 'class="active"';?>><a href="<?php echo site_url('dashboard/user')?>"><i class="fa fa-users"></i> User</a></li>
				<?php if($this->session->userdata('jt')=='admin'){ ?>
			    <li class="<?php if($this->session->userdata('option')=='setting'||$this->session->userdata('option')=='setting web') echo 'active';?> treeview">
				  <a href="<?php echo base_url();?>dashboard">
					<i class="fa fa-cogs"></i> <span>Setting</span>
				  </a>
				  <ul class="treeview-menu">
					<?php if($this->session->userdata('jt')=='admin'){ ?>
					<li <?php if($this->session->userdata('option')=='setting') echo 'class="active"';?>><a href="<?php echo site_url('dashboard/setting')?>"><i class="fa fa-cog"></i> Admin</a></li>
					<li <?php if($this->session->userdata('option')=='setting web') echo 'class="active"';?>><a href="<?php echo site_url('dashboard/settingweb')?>"><i class="fa fa-globe"></i> Website</a></li>
					<?php } ?>
				  </ul>
				</li>
			<?php }
			    ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small><?php echo $this->session->userdata('desc');?></small>
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-desktop"></i> <a href="<?php echo base_url();?>dashboard">Dashboard</a> </li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
           
          </div><!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- quick email widget -->
              <div class="box <?php
				if($this->session->userdata('tema')=='skin-yellow') echo "box-warning";
				if($this->session->userdata('tema')=='skin-red') echo "box-danger";
				if($this->session->userdata('tema')=='skin-blue') echo "box-primary";
				if($this->session->userdata('tema')=='skin-green') echo "box-success";
				if($this->session->userdata('tema')=='skin-purple') echo "box-purple";
				if($this->session->userdata('tema')=='skin-black') echo "box-black";
			  ?>">
                <div class="box-header">
                  <i class="fa 
				  <?php
					if($this->session->userdata('option')=='user') echo 'fa-users';
					if($this->session->userdata('option')=='dashboard') echo 'fa-desktop';
					if($this->session->userdata('option')=='setting') echo 'fa-cogs';
				  ?> 
				  <?php
				if($this->session->userdata('tema')=='skin-yellow') echo "text-yellow";
				if($this->session->userdata('tema')=='skin-red') echo "text-red";
				if($this->session->userdata('tema')=='skin-blue') echo "text-blue";
				if($this->session->userdata('tema')=='skin-green') echo "text-green";
				if($this->session->userdata('tema')=='skin-purple') echo "text-purple";
				if($this->session->userdata('tema')=='skin-black') echo "text-black";
			  ?>"></i>
                  <h3 class="box-title"><?php echo ucwords($this->session->userdata('option'));?></h3>
                  <!-- tools box -->
                  <div class="pull-right box-tools">
					<button class="btn <?php
				if($this->session->userdata('tema')=='skin-yellow') echo "btn-warning";
				if($this->session->userdata('tema')=='skin-red') echo "btn-danger";
				if($this->session->userdata('tema')=='skin-blue') echo "btn-primary";
				if($this->session->userdata('tema')=='skin-green') echo "btn-success";
				if($this->session->userdata('tema')=='skin-purple') echo "bg-purple";
				if($this->session->userdata('tema')=='skin-black') echo "bg-black";
			  ?> btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="" style="margin-right: 5px;" data-original-title="Collapse"><i class="fa fa-minus"></i></button>
                  </div><!-- /. tools -->
                </div>
                <div class="box-body">
					<div class="row">
						<div class="col-lg-3 col-xs-6">
						  <!-- small box -->
						  <div class="small-box bg-green">
							<div class="inner">
							  <h3><?php echo $this->session->userdata('jml_wisata');?></h3>

							  <p>Jumlah Wisata</p>
							</div>
							<div class="icon">
							  <i class="fa fa-map-marker"></i>
							</div>
							<a href="<?php echo site_url('dashboard/wisata')?>" class="small-box-footer">
							  Detail <i class="fa fa-arrow-circle-right"></i>
							</a>
						  </div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-xs-6">
						  <!-- small box -->
						  <div class="small-box bg-maroon">
							<div class="inner">
							  <h3><?php echo $this->session->userdata('jml_user');?></h3>

							  <p>Jumlah User</p>
							</div>
							<div class="icon">
							  <i class="fa fa-users"></i>
							</div>
							<a href="<?php echo site_url('dashboard/user')?>" class="small-box-footer">
							  Detail <i class="fa fa-arrow-circle-right"></i>
							</a>
						  </div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-xs-6">
						  <!-- small box -->
						  <div class="small-box bg-blue">
							<div class="inner">
							  <h3><?php echo "Web";//$this->session->userdata('jml_jenis');?></h3>

							  <p>Setting</p>
							</div>
							<div class="icon">
							  <i class="fa fa-cogs"></i>
							</div>
							<a href="<?php echo site_url('dashboard/setting')?>" class="small-box-footer">
							  Detail <i class="fa fa-arrow-circle-right"></i>
							</a>
						  </div>
						</div>
						<!-- ./col -->
						<div class="col-lg-3 col-xs-6">
						  <!-- small box -->
						  <div class="small-box bg-yellow">
							<div class="inner">
							  <h3><?php echo "Web";//$this->session->userdata('jml_event');?></h3>

							  <p>View</p>
							</div>
							<div class="icon">
							  <i class="fa fa-globe"></i>
							</div>
							<a href="<?php echo site_url('..')?>" target=_blank class="small-box-footer">
							  Detail <i class="fa fa-arrow-circle-right"></i>
							</a>
						  </div>
						</div>
						<!-- ./col -->
						
						
					  <!--/div>
					  <div class="row">
						<div class="col-lg-12">
							 <iframe src="http://localhost/bjorn/dist/map.html" height="600" width="100%" scrolling="no" style="border:none;"></iframe> 
						</div>
					  </div-->
                </div>
                <div class="box-footer clearfix">
                  
                </div>
              </div>

            </section><!-- /.Left col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <?php echo $this->session->userdata('version');?>
          </div>
           Copyright &copy; <?php echo date('Y')?>, <?php echo $this->session->userdata('creator');?>&trade;. All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <!--script src="<?php echo base_url(); ?>assets/plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script-->
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
    <!--script src="<?php echo base_url(); ?>assets/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script-->
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

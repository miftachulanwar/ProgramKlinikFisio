<?php
error_reporting(0);
session_start();
include 'includes/lib.inc.php';
include APP_ROOT."/includes/class.inc.php";
include APP_ROOT."/includes/auth.inc.php";
include INCLUDES_DIR."/class.paging.php";
$jp = new jcore();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Klinik Widya Husada Semarang</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  

   <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
   <link rel="stylesheet" href="plugins/iCheck/all.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
  
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Physio Clinic WH</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="dist/img/avatar5.png" class="user-image" alt="User Image">
          
              <span class="hidden-xs"><?=$_SESSION[nama]?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
            
          <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
                

                <p>
                  <?=$_SESSION[nama]?> <br>
                  <?=$_SESSION[username]?>
                </p>
              </li>
           
              
              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
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
           <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$_SESSION[nama]?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
     
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li><a href="index.php"><i class="fa fa-dashboard"></i> <span>Home</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Master</span>
            <span class="pull-right-container">
             	
              <span class="label label-primary pull-right">3</span>
            </span>
          </a>
          <ul class="treeview-menu">
         <li><a href="index.php?page=pasien"><i class="fa fa-circle-o"></i> Pasien</a></li>
          <li><a href="index.php?page=terapis"><i class="fa fa-circle-o"></i> Terapis</a></li>
          <li><a href="index.php?page=pengguna"><i class="fa fa-circle-o"></i> Pengguna</a></li>
          </ul>
        </li>
        
      
          <li><a href="index.php?page=periksa"><i class="fa fa-laptop"></i> Pemeriksaan</a></li>
      
         
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
             </span>
          </a>
          
          <ul class="treeview-menu">
            <li><a href="index.php?page=lappasien"><i class="fa fa-circle-o"></i>Laporan Pasien</a></li>
            <li><a href="index.php?page=lapterapis"><i class="fa fa-circle-o"></i>Laporan Terapis</a></li>
             <li><a href="index.php?page=cetakperiksa"><i class="fa fa-circle-o"></i>Laporan Pemeriksaan</a></li>
           
          </ul>
        </li>

       <li><a href="index.php?page=backup"><i class="fa fa-book"></i> Backup</a></li>
     
       <li><a href="index.php?page=ganti"><i class="fa fa-share"></i>Ganti Password</a></li>
      </ul>
      <div align="center"> <img src="images/logo.png"  width="150"></div>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
  
         	<?php
	switch($_REQUEST[page]){
		case "pembayaran":
			include "pembayaran.php";
		break;
		case "pasien":
			include "pasien.php";
		break;
		case "terapis":
			include "terapis.php";
		break;
		case "pengguna":
			include "pengguna.php";
		break;
		case "periksa":
			include "periksa.php";
		break;
		case "lappasien":
			include "lappasien.php";
		break;
		case "lapterapis":
			include "lapterapis.php";
		break;
		case "cetakperiksa":
			include "cetakperiksa.php";
		break;
		case "lapperiksa":
			include "lapperiksa.php";
		break;
		case "backup":
			include "backup.php";
		break;
		case "ganti":
			include "ganti.php";
		break;
		
		default:
		 include "home.php";
		 
		break;
	}
	?>
        
       

     
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019 <a href="https://klinikfisioterapiwidyahusadasemarang.com/">Klinik Fisioterapi Widya Husada</a>.</strong> All rights
    reserved.
  </footer>

  
  <div class="control-sidebar-bg"></div>
</div>
<?php if ($_REQUEST[page]=='') {?>
<?php } else { ?>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<?php } ?>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="plugins/input-mask/jquery.inputmask.js"></script>
<script src="plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="plugins/input-mask/jquery.inputmask.extensions.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->

<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- daterangepicker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
 <script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
    })
	$('#example3').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
    })
	$('#example4').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
    })
	$('#example5').DataTable({
      'paging'      : false,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : false,
      'info'        : false,
      'autoWidth'   : true
    })
  })
</script>
<script>
  $(function () {
    
     //Date picker
    $('#datepicker').datepicker({ format: 'yyyy-mm-dd',
      autoclose: true
	 
    })

     $('#datepicker1').datepicker({format: 'yyyy-mm-dd',
      autoclose: true
    })
	
	$('#datepicker2').datepicker({ format: 'yyyy-mm-dd',
      autoclose: true
	 
    })
	var dateToday = new Date(); 
	$('#datepicker3').datepicker({ format: 'yyyy-mm-dd',startDate: dateToday,
      autoclose: true
	 
    })
	
		
	$('.timepicker').timepicker({showMeridian: false ,
      showInputs: false , autoclose: true
    })
    
  })
</script>

</body>
</html>

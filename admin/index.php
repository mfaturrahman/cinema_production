<?php 
session_start(); 
require_once('database.php');
if (!isset($_SESSION["logged_in"])) 
{
    header('Location: login.php');
} 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Cinema Production</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link" onclick="return confirm('Apakah anda yakin?')">Logout</a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Cinema Production</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo ucwords($_SESSION['username']) ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?halaman=services" class="nav-link">
              <i class="nav-icon fas fa-boxes"></i>
              <p>
                Services
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?halaman=portfolio" class="nav-link">
              <i class="nav-icon fas fa-camera"></i>
              <p>
                Portfolio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?halaman=blog" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Blog
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?halaman=about" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Halaman About
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?php echo (isset($_GET['halaman']) == "") ? "Dashboard" : ucwords(str_replace('_', ' ', $_GET['halaman'])) ; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo (isset($_GET['halaman']) == "") ? "Dashboard" : ucwords(str_replace('_', ' ', $_GET['halaman'])) ; ?></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <?php 
    
    if (isset($_GET['halaman']))
    {
      if ($_GET['halaman'] == "about") 
      {
        include 'about.php';  
      }
      elseif ($_GET['halaman'] == "about_change") 
      {
        include 'about_change.php';  
      }
      elseif ($_GET['halaman'] == "services") 
      {
        include 'services.php';  
      }
      elseif ($_GET['halaman'] == "add_services") 
      {
        include 'services_add.php';  
      }
      elseif ($_GET['halaman'] == "services_change") 
      {
        include 'services_change.php';  
      }
      elseif ($_GET['halaman'] == "portfolio") 
      {
        include 'portfolio.php';  
      }
      elseif ($_GET['halaman'] == "add_portfolio") 
      {
        include 'portfolio_add.php';  
      }
      elseif ($_GET['halaman'] == "portfolio_change") 
      {
        include 'portfolio_change.php';  
      }
      elseif ($_GET['halaman'] == "blog") 
      {
        include 'blog.php';  
      }
      elseif ($_GET['halaman'] == "add_blog") 
      {
        include 'blog_add.php';  
      }
      elseif ($_GET['halaman'] == "blog_change") 
      {
        include 'blog_change.php';  
      }
    }
    else 
    {
      include 'home.php';  
    }

    ?>

  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0.0
    </div>
    <strong>Copyright &copy; <?php echo date('Y')?> <a href="javascript:void(0)">Cinema Production</a>.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="plugins/select2/js/select2.full.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });

    $('.textarea').summernote();

    $('#category-blog').select2({
      theme: 'bootstrap4',
      tags: true
    });

    $("#tag-blog").select2({
      theme: 'bootstrap4',
      tags: true,
      tokenSeparators: [',']
    });

  });
</script>
<script>
$(document).ready(function() {
    var max_fields = 50;
    var wrapper = $(".container1");
    var add_button = $(".add_form_field");

    var x = 1;
    $(add_button).click(function(e) {
        e.preventDefault();
        if (x < max_fields) {
            x++;
            $(wrapper).append('<div class="mb-3"><div class="form-group mb-0"><label for="service">Service:</label><input type="text" class="form-control" name="service[]" id="service" placeholder="Service"></div><a href="#" class="delete">Delete</a></div></div>'); //add input box
        } else {
            alert('Jasa anda terlalu banyak.')
        }
    });

    $(wrapper).on("click", ".delete", function(e) {
        e.preventDefault();
        $(this).parent('div').remove();
        x--;
    })
});
</script>
</body>
</html>

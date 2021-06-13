
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../../admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  
</head>
<body class="hold-transition sidebar-mini">



<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
	}
	?>






<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../home.php" class="brand-link">
      <img src="../../admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="../home.php" class="d-block">Dashboard</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item has-treeview menu-close">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data Token
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			<!--<li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="upload.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Upload Data</p>
                </a>
              </li> -->
				<li class="nav-item">
                <a href="token.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Edit Data</p>
                </a>
              </li>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    <li class="navbar">
      <a href="../keluar.php" class="fas fa-arrow-alt-circle-left">

        Keluar
      </a>
    </li>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Token</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="../home.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Data Token</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Data Token</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              
			  		  
			  <?php 
	include '../../class/Database.php';
	$id = $_GET['id'];
	$query_mysql = mysqli_query($koneksi,"SELECT * FROM token WHERE id='$id'")or die(mysql_error());
	
	while($data = mysqli_fetch_array($query_mysql)){
	?>
			  



			  <form  onsubmit="return validation()" autocomplete="off" action="update.php" method="post">	
			  <div class="card-body table-responsive p-0">
              <table  class="table table-hover text-wrap">
               <tr>
				<td>KODE TOKEN</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="kelas" readonly value="<?php echo $data['kelas'] ?>">
					<input pattern=".{6,}" required readonly title="Kode Token Wajib 6 Huruf" type="text" maxlength="6" id="kodetoken" name="kodetoken" placeholder="<?php echo $data['kodetoken'] ?>" onkeyup="this.value = this.value.toUpperCase()" required">
				</td>					
			</tr>	
		
			<tr>
				<td></td>
				<td><!-- <input class="btn-primary btn-align " type="submit" value="Simpan"> -->
				<button class="btn-warning" id="button" onclick="getElementById('kodetoken').value=randomStr(6, 'QWERTYUIOPASDFGHJKLZXCVBNM');">Acak Token</button></td>					
			</tr>
		  
              </table>
			  </div>
			  </form>
			  <!--<button class="btn-danger" id="button" onclick="getElementById('kodetoken').value=randomStr(6, 'QWERTYUIOPASDFGHJKLZXCVBNM');">Acak Token</button></td> -->
		 
			  			
<script> 
        var up = document.getElementById('GFG_UP'); 
        var down = document.getElementById('kodetoken'); 
        up.innerHTML =  
          'Click on the button to generate alpha-numeric string'; 
  
        function randomStr(len, arr) { 
            var ans = ''; 
            for (var i = len; i > 0; i--) { 
                ans +=  
                  arr[Math.floor(Math.random() * arr.length)]; 
            } 
            return ans; 
        } 
  
        function GFG_Fun() { 
            down.innerHTML = randomStr(6, 'ABCDE'); 
        } 
    </script>
	<?php } ?>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
<script type="text/javascript">
function validation(){
  var validasiHuruf = /^[a-zA-Z ]+$/;
  var kodetoken = document.getElementById("kodetoken");
  if (kodetoken.value.match(validasiHuruf)) {
      return true;
  } else {
      alert("Wajib Huruf!");
      kodetoken.value="";
      return false;
  }
}


</script>
<!-- Jangan menghapus atau mengubah bagian footer, tolong hargailah pengembang awal -->
  <footer class="main-footer">
    <strong> &copy; 2020 <a href="http://instagram.com/adithairun">Adit Hairun</a> All rights reserved. | Template By <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    
    <div class="float-right d-none d-sm-inline-block">
      <b>v</b>1.1
    </div>
  </footer>
  <!-- Jangan menghapus atau mengubah bagian footer, tolong hargailah pengembang awal -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });

</script>
</body>
</html>
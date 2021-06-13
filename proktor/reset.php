<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Kelulusan | Lupa Password</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">

<?php

  include '../class/Database.php';

  if(!isset($_GET["reset_pass"])){

    exit("404 Not Found");

  }
  
  $code = $_GET["reset_pass"];

  $query = mysqli_query($koneksi, "SELECT email FROM `reset_password` WHERE code = '$code' ");

  if(mysqli_num_rows($query)==0){

    exit("Link telah expire, ulangi permintaan reset password");	
  }
 
 

  $row = mysqli_fetch_array($query);

 

?>


<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>Kelulusan</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Masukkan Password Baru</p>

      <form action="new-pass.php" name="myForm" onsubmit="return validateForm()" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" placeholder="Password Baru">
		  <input type="hidden" value="<?php echo $row["email"]?>" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="new_pass" >Ubah password</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
		<footer class="footer">
  <center> <strong>Made With <i class="fas fa-heart"></i> by  <a  href="http://instagram.com/adithairun">Adit Hairun</a> 
  <br></strong>  <strong>&copy; 2020  <a  href="http://instagram.com/adithairun">Adit Hairun  </a> All rights reserved.<br> Template By <a href="http://adminlte.io">AdminLTE.io</a></a>
  <br></strong>
  
	<script>
function validateForm() {
    var password = document.forms["myForm"]["password"].value;
    
    if (password != "") {
      
return true;	  
    }
	else 
		
		alert("Masukkan Password Baru Anda");
		return false;
}
</script>
	
	
    </center>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>

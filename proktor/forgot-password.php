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
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Admin</b>Kelulusan</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
	<p class="login-box-msg">Lupa Password</p>
      <p class="login-box-msg">Masukkan Email akun anda.</p>

      <form action="reset_pass.php" name="myForm" onsubmit="return validateForm()" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block" name="reset_pass"">Submit</button>
			<a  href="index.php" class="btn btn-primary btn-block ><font color="white">Login</font></a>
          </div>
          <!-- /.col -->
        </div>
      </form>
	 

	  
      <footer class="footer">
  <center> <strong>Made With <i class="fas fa-heart"></i> by  <a  href="http://instagram.com/adithairun">Adit Hairun</a> 
  <br></strong>  <strong>&copy; 2020  <a  href="http://instagram.com/adithairun">Adit Hairun  </a> All rights reserved.<br> Template By <a href="http://adminlte.io">AdminLTE.io</a></a>
  <br></strong>
  
	
    </center>
    
  </footer>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>

<script>
function validateForm() {
    var email = document.forms["myForm"]["email"].value;
    
    if (email != "") {
      
return true;	  
    }
	else 
		
		alert("Masukkan Email Anda");
		return false;
}
</script>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>

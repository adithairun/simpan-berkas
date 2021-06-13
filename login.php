<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BERKAS SMAN 1 GORONTALO</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images-login/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor-login/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts-login/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts-login/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor-login/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor-login/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor-login/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor-login/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor-login/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css-login/util.css">
	<link rel="stylesheet" type="text/css" href="css-login/main.css">
<!--===============================================================================================-->
</head>
<body>
 

	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images-login/1.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					BERKAS FILE<br>SMAN 1 GORONTALO
				</span>
				<form  autocomplete="off" class="login100-form validate-form p-b-33 p-t-5" action="cek_login.php" name="myForm" onsubmit="return validateForm()" method="post" ">

					

					<div class="wrap-input100 validate-input" data-validate="Wajib Input Kode Token">
						<input pattern=".{6,}" required title="Kode Token Wajib 6 Huruf" type="text" maxlength="6" id="kodetoken" name="kodetoken"  class="input100" placeholder="Input Kode Token" onkeyup="this.value = this.value.toUpperCase()" required oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);""
    maxlength = "6">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>
 <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "<b><center>Kode Token Salah</center>";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout";
		}else if($_GET['pesan'] == "belum_login"){
			echo "<b><center>Wajib Input Kode Token</center></b>";
		}
	}
	?>
					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn">
							MASUK
						</button>
						 
					</div>

<center>Powered By <a href="https://tim-it.sma1gorontalo.sch.id" target="_blank"><b>TIM IT SMANSA </b></a></center>
				</form>
				
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor-login/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor-login/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor-login/bootstrap/js/popper.js"></script>
	<script src="vendor-login/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor-login/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor-login/daterangepicker/moment.min.js"></script>
	<script src="vendor-login/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor-login/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js-login/main.js"></script>

</body>
</html>
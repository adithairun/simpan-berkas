<?php
	session_start();
	$timeout = 1; // setting timeout dalam menit
	$logout = "../"; // redirect halaman logout

	$timeout = $timeout * 60; // menit ke detik
	if(isset($_SESSION['start_session'])){
		$elapsed_time = time()-$_SESSION['start_session'];
		if($elapsed_time >= $timeout){
			session_destroy();
			echo "<script type='text/javascript'>alert('Silahkan Input Kembali Captcha');window.location='https://sma1gorontalo.sch.id'</script>";
		}
	}

	$_SESSION['start_session']=time();

?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Session Limit | Kursus Web YELLOWWEB.ID</title>
</head>
<body>
	
	<h3>Halaman dengan sesi</h3>


</body>
</html>
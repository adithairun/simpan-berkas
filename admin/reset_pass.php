<?php 

include '../class/database.php';

use PHPMailer\PHPMailer\PHPMailer;

use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';

require 'PHPMailer/src/PHPMailer.php';

require 'PHPMailer/src/SMTP.php';

 

if(isset($_POST["reset_pass"])){

    $emailTo = $_POST["email"]; //email kamu atau email penerima link reset

    $code = uniqid(true); //Untuk kode atau parameter acak

    $query = mysqli_query($koneksi, "INSERT INTO reset_password VALUES ('','$emailTo','$code')");

    if(!$query){ exit("Error");}

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions

    try {

        //Server settings

        $mail->SMTPDebug = 2;                                 // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP

        $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers

        $mail->SMTPAuth = true;                               // Enable SMTP authentication

        $mail->Username = "spendmansa@gmail.com";     // SMTP username

        $mail->Password = 'adityabayu00';                         // SMTP password

        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted

        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients

        $mail->setFrom("spendmansa1@gmail.com"); //email pengirim

        $mail->addAddress($emailTo); // Email penerima

        $mail->addReplyTo("no-reply@gmail.com");

        //Content

        $url = "http://" . $_SERVER["HTTP_HOST"] .dirname($_SERVER["PHP_SELF"]). "/reset.php?reset_pass=$code"; //sesuaikan berdasarkan link server dan nama file

        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = "Link reset password";

       // $mail->Body    = "<h1>Permintaan reset password Aplikasi Pengumuman Kelulusan</h1><h2>Jangan bagikan link kesiapapun!</h2><p> Klik <a href='$url'>link ini</a> untuk mereset password</p>" ;

        $mail->Body    = "<h1>Permintaan reset password Aplikasi Pengumuman Kelulusan</h1><h2>Jangan bagikan link kesiapapun!</h2><p> Klik <a href='$url'>$url</a> untuk mereset password</p><p>Abaikan email ini jika Anda tidak mengajukan perubahan kata sandi ini.</p><p>Terima Kasih. Admin</p>" ;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();

        echo '<h1>Link reset password berhasil dikirimkan ke email. CEK BAGIAN SPAM</h1>';
		

    } catch (Exception $e) {

        echo 'Message could not be sent.';

        echo 'Mailer Error: ' . $mail->ErrorInfo;

    }

    exit();

}
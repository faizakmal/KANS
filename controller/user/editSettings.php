<?php

include '../../database/connect.php';
//session_start();
//$emailLama		   =  $_SESSION['email'];
//$emailBaru     	   =  $_POST['inputEmail'];
$email             =  $_POST['inputEmail'];
$password    	   =  $_POST['inputPassword'];
$Repassword    	   =  $_POST['inputReTypePassword'];

if ($password == $Repassword) {
    $pass = md5($password);
	$sql = "UPDATE `user` SET `password`='$pass' WHERE email = '$email' ";
	$result = mysqli_query($conn, $sql);
	echo "<script>alert('Password Berhasil diganti'); window.location.href='../../view/user/profilePage.php'</script>";
}
else{
	echo "password tidak cocok";
}

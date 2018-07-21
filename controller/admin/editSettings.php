<?php

include '../../database/connect.php';
//session_start();
//$emailLama		   =  $_SESSION['email'];
//$emailBaru     	   =  $_POST['inputEmail'];
$email             =  $_POST['inputEmail'];
$password    	   =  $_POST['inputPassword'];
$Repassword    	   =  $_POST['inputReTypePassword'];

if ($password == $Repassword) {
	$sql = "UPDATE `user` SET `password`='$password' WHERE email = '$email' ";
	$result = mysqli_query($conn, $sql);
	header("Location: ../../view/admin/detailPage.php?id=".$email."");
}
else{
	echo "password tidak cocok";
}

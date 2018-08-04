<?php

include '../../database/connect.php';

$email   		 =  $_POST['inputEmail'];
$nama 	 		 =  $_POST['inputNama'];
$alamat   		 =  $_POST['inputAlamat'];
$noHP 	   		 =  $_POST['inputNoHP'];
$angkatan  		 =  $_POST['inputAngkatan'];
$lulusan  		 =  $_POST['inputLulusan'];
$pekerjaan		 =  $_POST['inputPekerjaan'];

// Get image name
$image = $_FILES['imageupload']['name'];
$newname = $email.".png";
$maxsize = 1048576;
$valid_ext = array('jpg', 'jpeg', 'png', 'gif', 'bmp');

$changeImage = 0;
/*
	2 = success;
	
*/

if ($_FILES['imageupload' ] ['error'] != 4){
	// image file directory
	$target = "../../dist/userpicture/".basename($newname);
	// Extension Check
	$ext = 	pathinfo($_FILES['imageupload']['name'], PATHINFO_EXTENSION);
	if (in_array($ext, $valid_ext)) {
		$changeImage++;
	}else{
		echo "<script>alert('Format File Salah'); 	window.location.href='../../view/user/profilePage.php'</script>";
	//echo $msg;
	}
	//Max Upload File
	if ($_FILES['imageupload']['size'] <= $maxsize){
		$changeImage++;
	}else{
		echo "<script>alert('File Terlalu Besar'); 	window.location.href='../../view/user/profilePage.php'</script>";		
	}
	if ($changeImage == 2){
		move_uploaded_file($_FILES['imageupload']['tmp_name'], $target);
		chmod($target, 0755);	
		$sql = "UPDATE datadiri_alumni
				SET nama = '$nama', image = '$newname', alamat = '$alamat', noHP = '$noHP', angkatan = '$angkatan', lulusan = '$lulusan', pekerjaan = '$pekerjaan' 
				where 
				email = '$email' ";
		mysqli_query($conn, $sql);
		header("Location: ../../view/user/profilePage.php");
	}
}else{	
	$sql = "UPDATE datadiri_alumni
			SET nama = '$nama', image = '$newname', alamat = '$alamat', noHP = '$noHP', angkatan = '$angkatan', lulusan = '$lulusan', pekerjaan = '$pekerjaan' 
			where 
			email = '$email' ";
	mysqli_query($conn, $sql);
	header("Location: ../../view/user/profilePage.php");	
}


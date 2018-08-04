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

if ($_FILES['imageupload' ] ['error'] != 4){
	if ($_FILES['imageupload']['size'] <= $maxsize) {
	
	
		$ext = 	pathinfo($_FILES['imageupload']['name'], PATHINFO_EXTENSION); //cek ekstensi


		// image file directory
	$target = "../../dist/userpicture/".basename($newname);

	$sql = "UPDATE datadiri_alumni
			SET nama = '$nama', image = '$newname', alamat = '$alamat', noHP = '$noHP', angkatan = '$angkatan', lulusan = '$lulusan', pekerjaan = '$pekerjaan' 
			where 
			email = '$email' ";

// Upload file
	if (in_array($ext, $valid_ext)) { //cek ekstensi
		move_uploaded_file($_FILES['imageupload']['tmp_name'], $target);
		//$msg = "";
		//echo $msg;
		chmod($target, 0755);
		mysqli_query($conn, $sql);
		header("Location: ../../view/user/profilePage.php");
	}

	else{
		echo "<script>alert('Format File Salah'); 	window.location.href='../../view/user/profilePage.php'</script>";
	//echo $msg;
	}

	/*$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Data Data Diri Berhasil diupdate'); window.location.href='../../view/user/profilePage.php'</script>";
	}
	else {
		echo "<script>alert('Data Tidak Tersimpan'); 	window.location.href='../../view/user/profilePage.php'</script>";
	}*/
	
}
else {
	echo "<script>alert('File Terlalu Besar'); 	window.location.href='../../view/user/profilePage.php'</script>";
}
} 

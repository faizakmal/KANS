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

//echo "image name : ";
//echo $newname;

// image file directory
$target = "../../dist/userpicture/".basename($newname);

$sql = "UPDATE datadiri_alumni
			SET nama = '$nama', image = '$newname', alamat = '$alamat', noHP = '$noHP', angkatan = '$angkatan', lulusan = '$lulusan', pekerjaan = '$pekerjaan' 
			where 
			email = '$email' ";

// Upload file
if (move_uploaded_file($_FILES['imageupload']['tmp_name'], $target)) {
	$msg = "";
	//echo $msg;
	chmod($target, 0755);
}else{
	$msg = "Failed to upload image";
	//echo $msg;
}

$result = mysqli_query($conn, $sql);
if ($result) {
	echo "<script>alert('Data Data Diri Berhasil diupdate'); window.location.href='../../view/user/profilePage.php'</script>";
}
else {
	echo "<script>alert('Data Tidak Tersimpan'); window.location.href='../../view/user/profilePage.php'</script>";
}


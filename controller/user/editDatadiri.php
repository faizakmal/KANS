<?php

include '../../database/connect.php';

$email     =  $_POST['inputEmail'];
$nama 	   =  $_POST['inputNama'];
$alamat    =  $_POST['inputAlamat'];
$noHP 	   =  $_POST['inputNoHP'];
$angkatan  =  $_POST['inputAngkatan'];
$lulusan   =  $_POST['inputLulusan'];
$pekerjaan =  $_POST['inputPekerjaan'];

$sql = "UPDATE datadiri_alumni
			SET nama = '$nama', alamat = '$alamat', noHP = '$noHP', angkatan = '$angkatan', lulusan = '$lulusan', pekerjaan = '$pekerjaan' 
			where 
			email = '$email' ";

$result = mysqli_query($conn, $sql);
header("Location: ../../view/user/profilePage.php");

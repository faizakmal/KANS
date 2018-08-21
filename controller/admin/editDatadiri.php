<?php

include '../../database/connect.php';

$email           =  $_POST['inputEmail'];
$nama 	         =  $_POST['inputNama'];
$nickname			   =  $_POST['inputNamaPanggilan'];
$alamat          =  $_POST['inputAlamat'];
$noHP 	         =  $_POST['inputNoHP'];
$angkatan        =  $_POST['inputAngkatan'];
$lulusan         =  $_POST['inputLulusan'];
$pekerjaan       =  $_POST['inputPekerjaan'];
$tempatlahir	   =  $_POST['inputTempatLahir'];
$date			       =  $_POST['datepicker'];

$sql = "UPDATE datadiri_alumni
			SET nama = '$nama', alamat = '$alamat', noHP = '$noHP', angkatan = '$angkatan', lulusan = '$lulusan', pekerjaan = '$pekerjaan', tempat_lahir = '$tempatlahir', tanggal_lahir = '$date'
			where
			email = '$email' ";
$sql2 = "UPDATE user	SET name = '$nickname' where email = '$email' ";
mysqli_query($conn, $sql);
mysqli_query($conn, $sql2);
header("Location: ../../view/admin/detailPage.php?id=".$email."");

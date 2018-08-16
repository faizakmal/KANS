<?php

include '../../database/connect.php';

$email           =  $_POST['inputEmail'];
$nama 	         =  $_POST['inputNama'];
$alamat          =  $_POST['inputAlamat'];
$noHP 	         =  $_POST['inputNoHP'];
$angkatan        =  $_POST['inputAngkatan'];
$lulusan         =  $_POST['inputLulusan'];
$pekerjaan       =  $_POST['inputPekerjaan'];
$tempatlahir	 =  $_POST['inputTempatLahir'];
$date			 =  $_POST['datepicker'];
echo $date;
$sql = "UPDATE datadiri_alumni
			SET nama = '$nama', alamat = '$alamat', noHP = '$noHP', angkatan = '$angkatan', lulusan = '$lulusan', pekerjaan = '$pekerjaan', tempat_lahir = '$tempatlahir', tanggal_lahir = '$date'
			where 
			email = '$email' ";

$result = mysqli_query($conn, $sql);
header("Location: ../../view/admin/detailPage.php?id=".$email."");

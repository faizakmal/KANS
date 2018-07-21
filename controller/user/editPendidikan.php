<?php

include '../../database/connect.php';

$email     		   =  $_POST['inputEmail'];
$universitas 	   =  $_POST['inputUniversitas'];
$fakultas    	   =  $_POST['inputFakultas'];
$jurusan 	   	   =  $_POST['inputJurusan'];
$tahunMasuk  	   =  $_POST['inputTahunMasuk'];


$sql = "UPDATE pendidikan_alumni
			SET universitas = '$universitas', fakultas = '$fakultas', jurusan = '$jurusan', tahunMasuk = '$tahunMasuk'
			where 
			email = '$email' ";

$result = mysqli_query($conn, $sql);
header("Location: ../../view/user/profilePage.php");

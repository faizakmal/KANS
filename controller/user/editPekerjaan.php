<?php

include '../../database/connect.php';

$email     		   =  $_POST['inputEmail'];
$namaPerusahaan    =  $_POST['inputNamaPerusahaan'];
$jenisPerusahaan   =  $_POST['inputJenisPerusahaan'];


$sql = "UPDATE pekerjaan_alumni
			SET namaPerusahaan = '$namaPerusahaan', jenisPerusahaan = '$jenisPerusahaan'
			where 
			email = '$email' ";
			
$result = mysqli_query($conn, $sql);
header("Location: ../../view/user/profilePage.php");

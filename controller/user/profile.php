<?php

include '../../database/connect.php';
$email = $_SESSION['email'];

	$sql = "SELECT 
				datadiri_alumni.email, datadiri_alumni.nama, datadiri_alumni.alamat, datadiri_alumni.noHP, datadiri_alumni.angkatan, datadiri_alumni.lulusan, datadiri_alumni.pekerjaan, 
				pendidikan_alumni.universitas, pendidikan_alumni.fakultas, pendidikan_alumni.jurusan, pendidikan_alumni.tahunMasuk,
				pekerjaan_alumni.namaPerusahaan, pekerjaan_alumni.jenisPerusahaan
			FROM user, datadiri_alumni, pendidikan_alumni, pekerjaan_alumni 
			where 
			datadiri_alumni.email = user.email AND 
			pendidikan_alumni.email=user.email AND 
			pekerjaan_alumni.email=user.email AND 
			user.email = '$email' ";

	$result = mysqli_query($conn, $sql);
	if ($data = mysqli_fetch_array ($result)) {
		$email = $data[0]; 
		$name = $data[1];
		$alamat = $data[2];
		$noHP = $data[3];
		$angkatan = $data[4];
		$lulusan = $data[5];
		$pekerjaan = $data[6];
		$universitas = $data[7];
		$fakultas = $data[8]; 
		$jurusan = $data[9]; 
		$tahunMasuk = $data[10]; 
		$namaPerusahaan = $data[11]; 
		$jenisPerusahaan = $data[12];
	}

	else {
	
	echo "data tidak ditemukan";
	
	}



<?php

session_start();
include '../database/connect.php';
	
$nama     = mysqli_real_escape_string($conn, $_POST['form-nama']);
$angkatan = mysqli_real_escape_string($conn, $_POST['form-angkatan']);
$email    = mysqli_real_escape_string($conn, $_POST['form-email']);
$password = mysqli_real_escape_string($conn, $_POST['form-password']);
$rePassword = $_POST['form-repassword'];

//cek data klo kosong
if(empty($nama)||empty($angkatan)||empty($email)||empty($password)){
	header("Location: ../index.php?msg='Error!!, Fill The Data'");
	exit();
}else{
	//email checker validasi
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo "<script>alert('Error!!, Email Invalid'); window.location.href='../index.php'</script>";
		exit();
	}else{
		//check symbol on name
		if(!preg_match("/^[a-zA-Z]*$/", $nama)){
			echo "<script>alert('Do Not Use Any Symbol On Your Name'); window.location.href='../index.php'</script>";
			exit();
		}else{
			//email udah ke pake apa belom
			$sql = "SELECT * FROM user WHERE email='$email'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);
			if($resultCheck > 0){
				echo "<script>alert('Error!!, This Email is Used'); window.location.href='../index.php'</script>";
				exit();
			}else{
				//hashing password
				if($password==$rePassword){
					$pass = md5($password); // password encrypt
					//insert ke database
					$sql = "INSERT INTO user (email, password, name, angkatan) VALUES ('$email', '$pass', '$nama', '$angkatan');";
					$sql1 = "INSERT INTO datadiri_alumni (email, nama, alamat, noHP, angkatan, lulusan, pekerjaan) VALUES ('$email', '$nama', '', '', '$angkatan', '', '');";
					$sql2 = "INSERT INTO pekerjaan_alumni (email, namaPerusahaan, jenisPerusahaan) VALUES ('$email', '', '');";
					$sql3 = "INSERT INTO pendidikan_alumni (email, universitas, fakultas, jurusan, tahunMasuk) VALUES ('$email', '', '', '', '');";

					mysqli_query($conn, $sql);
					mysqli_query($conn, $sql1);
					mysqli_query($conn, $sql2);
					mysqli_query($conn, $sql3);
					//sucess add to database
					echo "<script>alert('Account Created'); window.location.href='../index.php'</script>";
					exit();
				}else{
					echo "<script>alert('Error!!, Repeat The Password'); window.location.href='../index.php'</script>";
					exit();
				}				
			}
		}		
	}
}


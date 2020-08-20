<?php 	
	global $conn;
	$conn = mysqli_connect('localhost','root', '');
	if(!$conn){
		echo "GagAL TOtal";
	}
	$db_use = mysqli_select_db($conn,'proyek_psw2') or die ("gagal");


	if(isset($_POST['Register'])){
		$Username = $_POST['Username'];
		$NIM = $_POST['NIM'];
		$PASSWORD = $_POST['PASSWORD'];
		$Role = $_POST['Role'];
		$query = "INSERT INTO akun VALUES ('$Username','$NIM','$PASSWORD','$Role')";
		mysqli_query($conn,$query);

		if($query){
			echo "Data Berhasil Ditambahkan";
		}
	}

	if(isset($_POST['Registrasi'])){
		$NIM = $_POST['NIM'];
		$Nama = $_POST['Nama'];
		$Prodi = $_POST['Prodi'];
		$query = "INSERT INTO mahasiswa VALUES ('$NIM','$Nama','$Prodi')";
		mysqli_query($conn,$query);

		if($query){
			echo "Data Berhasil Ditambahkan";
		}
	}

?>
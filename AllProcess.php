<?php
	require_once 'commons/database.php';
	// session_start();
	if($_GET['action'] == "login"){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$user = LoginAccount($username,$password);
		// $is_account_exist = mysqli_num_rows($user);
		// if($is_account_exist == 0){
		// 		echo "<script>alert('Username dan Password tidak valid.'); window.location = 'index.php'</script>";
		// 	}
		$row = mysqli_fetch_assoc($user);
		if($row['Username'] == $username && $row['PASSWORD'] == $password){
			$_SESSION['logged_in']= TRUE;
			$_SESSION['NIM'] = $row['NIM'];
			$_SESSION['username']=$row['Username'];
			$_SESSION['id_role']=$row['Role'];
			// echo $_SESSION['logged_in'];
			if ($row['Role']==1) {
				echo "<script>alert('Selamat datang $username');window.location = 'Acara.php'</script>";	
				// if(isset($_SESSION['logged_in'])){
				// 	echo $_SESSION['logged_in'];
				// }
			}
			else if ($row['Role']==2){
				echo "<script>alert('Selamat datang $username'); window.location = 'Dashboard_Mahasiswa.php'</script>";
			}
		}
		else
		{
			echo "<script>alert('Username dan Password tidak valid.'); window.location = 'index.php'</script>";
		}
	}
	else if($_GET['action'] == "logout"){
		if(isset($_SESSION['logged_in'])){
			unset($_SESSION['username']);
			unset($_SESSION['logged_in']);
			unset($_SESSION['id_role']);
			session_destroy();
		}
		header("location: index.php");
	}
	else if($_GET['action'] == "DaftarAkun"){
		$nim = $_POST['NIM'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$repass = $_POST['re-password'];

		if($pass != $repass){
			echo "<script>alert('Password tidak sama.'); window.location = 'DaftarAkun.php'</script>";
		}
		else{
			$is_account_exist = CekAkun($username,$nim);
			if($is_account_exist > 0){
				echo "<script>alert('Username Sudah Dipakai/Akun Sudah Pernah Dibuat.'); window.location = 'DaftarAkun.php'</script>";
			}
			else{
				$do = AddAccount($nim,$username,$pass);
				if($do > 0){
					echo "<script>alert('Akun Berhasil Dibuat.'); window.location = 'index.php'</script>";
				}
				else{
					echo "<script>alert('Akun Gagal Dibuat.'); window.location = 'index.php'</script>";
				}
			}
		}
	}
?>
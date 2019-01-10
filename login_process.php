<?php
session_start();
include 'koneksi.php' ;
if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($username) && !empty($password)) {
		$sql = mysqli_query($mysqli, "SELECT * FROM user_login WHERE name_user = '$username' AND password_user = '$password' ");
		$result = mysqli_num_rows($sql);
		if ($result) {
			$get = mysqli_fetch_array($sql);
			$level = $get['level_user'];
			if ($level == 'ADMIN_1') {
				$_SESSION['login'] = "admin";
				header("location:admin.php");
			}elseif ($level == 'USER_1') {
				$_SESSION['login'] = "USER";
				header("location:Dashboard.php");
			}else{
				echo "status tidak ditemukan";
			}
		}else{
			echo 
			"<script>
			alert('password atau username salah!');
			window.location='index.php';
			</script>";
		}
	}
}else{
	header("location:index.php");
}

 ?>
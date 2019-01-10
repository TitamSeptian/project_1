<?php
	include "koneksi.php";

	$id_pjn_ryt = isset($_GET["id"])?$_GET["id"]:"";
	$sql_select = "SELECT * FROM riwayat WHERE id_pjn_ryt ='".$id_pjn_ryt."';";
	$select = $mysqli->query($sql_select);

	if ($select->num_rows >0){
		$sql 	= "
					DELETE FROM
						riwayat
					WHERE
						id_pjn_ryt = '".$id_pjn_ryt."';
				";
		if($mysqli->query($sql)){
			echo"
				<script>
					alert('Riwayat berhasil di hapus !');
					window.location = 'Dashboard.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Laporan gagal di hapus !');
					window.location = 'riwayat.php';
				</script>
			";
		}
	}else{
		echo "
				<script>
					alert('ID tidak dikenali, coba lagi !');
					window.location = 'riwayat.php';
				</script>
			";
	}

	$mysqli->close();
	?>
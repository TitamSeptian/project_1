<?php
	include "koneksi.php";

	$id_anggota = isset($_GET["id"])?$_GET["id"]:"";
	$sql_select = "SELECT * FROM data_anggota_perpus WHERE id_anggota ='".$id_anggota."';";
	$select = $mysqli->query($sql_select);

	if ($select->num_rows >0){
		$sql 	= "
					DELETE FROM
						data_anggota_perpus
					WHERE
						id_anggota = '".$id_anggota."';
				";
		if($mysqli->query($sql)){
			echo"
				<script>
					alert('Laporan berhasil di hapus !');
					window.location = 'data-anggota.php';
				</script>
			";
		}else{
			echo "
				<script>
					alert('Laporan gagal di hapus !');
					window.location = 'data-anggota.php';
				</script>
			";
		}
	}else{
		echo "
				<script>
					alert('ID tidak dikenali, coba lagi !');
					window.location = 'data-anggota.php';
				</script>
			";
	}

	$mysqli->close();
	?>

		
	
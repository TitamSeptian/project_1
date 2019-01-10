<?php 
include 'koneksi.php';	
 		$delete = mysqli_query($mysqli, "DELETE FROM list_buku WHERE kode_buku='".$_GET['kodeBuku']."'");

 		if($delete){
 			echo"
				<script>
					alert('Data Buku berhasil di hapus !');
					window.location = 'list-buku2.php';
				</script>
			";
 		}else{
 			echo"
				<script>
					alert('Data Buku Gagal di hapus !');
					window.location = 'list-buku2.php';
				</script>
			";
 		}
 ?>
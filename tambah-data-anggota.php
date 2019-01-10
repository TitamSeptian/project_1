<?php
  include "koneksi.php";

  $action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if ($action){

      $sql  ="
            INSERT INTO data_anggota_perpus SET 
            id_anggota =NULL, 
            nama_anggota ='".$mysqli->real_escape_string($_POST['form_nama_anggota'])."',
            alamat_anggota ='".$mysqli->real_escape_string($_POST['form_alamat_anggota'])."',
            jk_anggota = '".$mysqli->real_escape_string($_POST['form_jk_anggota'])."',
            no_tlp_anggota ='".$mysqli->real_escape_string($_POST['form_no_tlp_anggota'])."',
            tanggal_entri_akun=NOW();";
            if($mysqli->query($sql)){
              echo "
                <script>
                  alert('Selamat Anda Menjadi Anggota!');
                  window.location='data-anggota.php';
                </script>
                ";
            }else{
              echo "
                <script>
                  alert('Gagal Membuat Akun!');
                  window.location='data-anggota.php';
                </script>
              ";
            }
            }
  
  ?>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/tambah-data-anggota.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />  
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Dashboard.php"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
  <div class="content" align="">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Tambah Anggota</b></h3>
        <form method="post">
        <div class="form-group">
          <label for="exampleInputPassword1">Nama Lengkap</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Lengkap" name="form_nama_anggota" required>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Alamat</label>
          <textarea class="form-control" id="exampleInputPassword1" placeholder="Alamat" name="form_alamat_anggota"></textarea>
          <small id="emailHelp" class="form-text text-muted">Isi alamat anggota dengan Lengkap!.</small>
        </div>

        <select class="form-control" name="form_jk_anggota" required id="jk">
          <option value="Laki-Laki">Laki-Laki</option>
          <option value="Wanita">Wanita</option>
        </select>
        <br>
        <div class="form-group">
          <label for="exampleInputPassword1">No.Telepon</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No.Telepon" name="form_no_tlp_anggota" required>
        </div>

        <div class="" align="center">
        <input type="submit" name="form_tambah" value="Tambah" class="btn btn-dark">
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol tambah!.</small>  
        </div>
      </form>
  </div>
</body>
<script type="text/javascript" src="resources/js/jquery-3.3.1.slim.min.js"></script>
<script type="text/javascript" src="resources/js/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#jk")
      placeholder:"Jenis Kelamin"
    
  });
</script>
</html>
<?php 
$mysqli->close();
 ?>
<?php 
include 'koneksi.php';
  $id_pjn = isset ($_GET["id"])?$_GET["id"]:"";
  $sql_select_pjn= " SELECT * FROM data_peminjaman WHERE id_pjn = '".$id_pjn."';";
  $select_pjn = $mysqli->query($sql_select_pjn);
  $row_select_pjn=$select_pjn->fetch_array();
  $id = $row_select_pjn['id_pjn'];

                      //database anggota
                      $id_anggota_x = isset ($_GET["id_x"]) && isset($_GET["id_x"]);
                      $sql_select_x= "SELECT * FROM data_anggota_perpus WHERE id_anggota='".$_GET['id_x']."'";
                      $select_x = $mysqli->query($sql_select_x);
                      $row_select_x=$select_x->fetch_array();
                      //database buku
                      $kodeBuku = isset ($_GET["kodeBuku"]) && isset($_GET["kodeBuku"]);
                      $sql_select_buku= " SELECT * FROM list_buku WHERE kode_buku = '".$_GET['kodeBuku']."';";
                      $select_buku = $mysqli->query($sql_select_buku);
                      $row_select_buku=$select_buku->fetch_array();
 ?>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/nextpengembalian.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous"> 
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Dashboard.php"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
<form method="post">
  <div class="content" align="">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Ubah Data Peminjaman</b></h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="pengembalian.php">Informasi Peminjam</a></li>
            <li class="breadcrumb-item active" aria-current="page">Pemasitian</li>
          </ol>
        </nav>
        <br>
        <div class="form-group">
          <small id="emailHelp" class="form-text text-muted">Tidak Perlu Diisi Jika Tidak Diperlukan!.</small>
          <label for="exampleInputPassword1">Jumlah Lebih Hari</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Lebih Hari" name="form_lebih_hari">
          <!-- <small id="emailHelp" class="form-text text-muted"><a href="nextpengembalian2.php">lihat denda</a></smal -->
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Denda</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Denda" readonly
          value="
          <?php 
            if (isset($_POST["form_lebih_hari"])) {
              $lebih_hari = $_POST['form_lebih_hari'];
              if($lebih_hari>0){
                $denda = 1000*$lebih_hari;
                echo $denda;
              }else{
                $denda = 'anda tidak di denda';
                echo $denda;
              }
            }

             ?>" 
          >
        </div>

        <div class="" align="center">
        <input type="submit" name="lihat_denda" value="lihat denda" class="btn btn-dark">
        <a class="btn btn-dark" href="hapus-peminjaman.php?id=<?php echo $id_pjn ?>" role="button"><b>Verivikasi<b/></a>
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol Verifikasi!.</small>  
        </div>
      </div>
    </div>
</form>  

</body>
</html>


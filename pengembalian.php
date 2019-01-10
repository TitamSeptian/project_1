<?php   
include 'koneksi.php';
//database peminjaman
 $id_pjn = isset ($_GET["id"]) && isset($_GET["id"]);
                      $sql_select_pjn= " SELECT * FROM data_peminjaman WHERE id_pjn = '".$_GET["id"]."';";
                      $select_pjn = $mysqli->query($sql_select_pjn);
                      $row_select_pjn=$select_pjn->fetch_array();
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

                      $id_pjn_ryt =$row_select_pjn['id_pjn'];
                      $id_anggota_ryt =$row_select_x['id_anggota'];
                      $kode_buku_ryt =$row_select_buku['kode_buku'];
                      $judul_buku_ryt =$row_select_buku['judul_buku'];
                      $tanggal_entri_pjn_ryt =$row_select_pjn['tanggal_entri_pjn'];
                      $jumlah_hari_pjn_ryt =$row_select_pjn['jumlah_hari_pjn'];

                    $action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
                    if($action){

                     
                      

                      
                        $sql="
                          INSERT INTO riwayat SET id_pjn_ryt='".$mysqli->real_escape_string($_POST['form_id_pjn_ryt'])."', 
                          id_anggota_ryt='".$mysqli->real_escape_string($_POST['form_id_anggota_ryt'])."', 
                          kode_buku_ryt='".$mysqli->real_escape_string($_POST['form_kode_buku_ryt'])."', 
                          tgl_pjn_ryt='".$mysqli->real_escape_string($_POST['form_tgl_entri_pjn'])."', 
                          jumlah_hari_pjn_ryt='".$mysqli->real_escape_string($_POST['form_jumlah_hari_pjn_ryt'])."',
                          tgl_pengembalian_ryt=NOW();";
                        if ($mysqli->query($sql)) {
                          header("location:nextpengembalian.php?id={$id_pjn_ryt}&id_x={$id_anggota_ryt}&kodeBuku={$kode_buku_ryt}");
                        }else{
                            echo "
                              <script>
                                alert('gagal Ditambahkan!');
                                window.location='kelola-peminjaman.php';
                              </script>
                            ";
            }
                      } 



 ?>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/pengembalian.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous"> 
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="Dashboard.php"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
  <div class="content" align="">
      <div class="login-box">
        <h3 class="txt" align="center"><b>Pengembalian</b></h3>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">Informasi Peminjam</li>
            <li class="breadcrumb-item"><a href="nextpengembalian.php">Verifikasi</a></li>
          </ol>
        </nav>
        <form method="post">
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">ID Peminjaman</label>
            <input type="text" class="form-control" placeholder="ID Peminjaman" name="form_id_pjn_ryt" value=" <?php echo $row_select_pjn["id_pjn"] ?>" readonly>
          </div>
          <div class="col">
            <label for="exampleInputPassword1">ID Anggota</label>
            <input type="text" class="form-control" placeholder="ID Anggota" name="form_id_anggota_ryt" value="<?php echo $row_select_x["id_anggota"] ?>" readonly>
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">kode Buku</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="kode buku" name="form_kode_buku_ryt" value="<?php echo $row_select_buku["kode_buku"] ?>" readonly>
        </div>
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">Tanggal Pinjam</label>
            <input type="text" class="form-control" placeholder="Tanggal Pinjam" name="form_tgl_entri_pjn" value="<?php echo $row_select_pjn["tanggal_entri_pjn"] ?>" readonly>
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Hari Pinjam</label>
            <input type="text" class="form-control" placeholder="Jumlah Hari" name="form_jumlah_hari_pjn_ryt" value="<?php echo $row_select_pjn["jumlah_hari_pjn"] ?>" readonly>
          </div>
        </div>
        <br><br>
        <div class="" align="center">
          <input type="submit" name="form_tambah" class="btn btn-dark" value="Selanjutnya">
        <!-- <button type="button" name="form_tambah" class="btn btn-dark"><b>Selanjutnya</b></button> -->
        <small id="emailHelp" class="form-text text-muted">Yakin akan melanjutkan? Jika yakin tekan tombol selanjutnya!.</small>  
        </div>
      </form>
  </div>

</body>
</html>

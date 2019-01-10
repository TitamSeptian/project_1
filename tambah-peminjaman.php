<?php
  include "koneksi.php";

  $action = isset($_POST["form_tambah"])?$_POST["form_tambah"]:"";
  if ($action){

      $sql  ="
            INSERT INTO data_peminjaman SET 
            id_pjn =NULL, 
            id_anggota_peminjaman ='".$mysqli->real_escape_string($_POST['form_id_anggota_pjn'])."',
            kode_buku_pjn ='".$mysqli->real_escape_string($_POST['form_kode_buku_pjn'])."',
            jumlah_hari_pjn ='".$mysqli->real_escape_string($_POST['form_jumlah_hari_pjn'])."',
            tanggal_entri_pjn=NOW();";
            if($mysqli->query($sql)){
              echo "
                <script>
                  alert('Laporan Berahsil Ditambahkan!');
                  window.location='kelola-peminjaman.php';
                </script>
                ";
            }else{
              echo "
                <script>
                  alert('Laporan gagal Ditambahkan!');
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
  <link rel="stylesheet" href="resources/css/tambah-peminjaman.css">
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
        <h3 class="txt" align="center"><b>Tambah Peminjaman</b></h3>
        <form method="post">
        <div class="form-group">
          <label for="exampleInputPassword1">ID Anggota</label>
          <select class="form-control" id="id-select" name="form_id_anggota_pjn" required>
            <option></option>
            <?php 
              $view_id = mysqli_query($mysqli, "SELECT * FROM data_anggota_perpus ;");
              $num_result_id = $view_id->num_rows;
              if ($num_result_id >0) {
                while ($row_id = $view_id->fetch_assoc()) {?>
                  <option value="<?php echo $row_id['id_anggota']; ?>"><?php echo $row_id['id_anggota']; ?></option>
                <?php }
              }
             ?>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Kode BUKU</label>
          <select class="form-control" id="id-select-2" name="form_kode_buku_pjn" required>
            <option></option>
            <?php 
              $view_id = mysqli_query($mysqli, "SELECT * FROM list_buku ;");
              $num_result_id = $view_id->num_rows;
              if ($num_result_id >0) {
                while ($row_id = $view_id->fetch_assoc()) {?>
                  <option value="<?php echo $row_id['kode_buku']; ?>"><?php echo $row_id['kode_buku']; ?></option>
                <?php }
              }
             ?>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Jumlah Hari Pinjam</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Jumlah Hari" name="form_jumlah_hari_pjn" required>
        </div>
        
 <!--        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">Jumlah Hari Pinjam</label>
            <input type="text" class="form-control" placeholder="Judul Buku" name="form_judul_buku_pjn" required>
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Jumlah Buku</label>
            <input type="text" class="form-control" placeholder="Jumlah Buku" name="form_jumlah_buku_pjn" required>
          </div>
        </div> -->
        <br>
        <!-- <div class="form-group">
          <label for="exampleInputPassword1">Tanggal Pinjam</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tanggal Pinjam">
        </div> -->


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
    $("#id-select").select2({
      placeholder:"ID Anggota"
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $("#id-select-2").select2({
      placeholder:"Kode Buku"
    });
  });
</script>

</html>
<?php 
$mysqli->close();
 ?>
<?php
  include "koneksi.php";
  $kode_buku = isset ($_GET["kodeBuku"])?$_GET["kodeBuku"]:"";
  $sql_select= " SELECT * FROM list_buku WHERE kode_buku = '".$kode_buku."';";
  $select = $mysqli->query($sql_select);
  $row_select=$select->fetch_array();

  
  

  $action = isset ($_POST["form_edit"])?$_POST["form_edit"]:"";
  if ($action) {
    
    $nama_file = $_FILES['form_gambar_buku']['name'];
    $source = $_FILES['form_gambar_buku']['tmp_name'];
    $folder = './resources/img/';
    
    if($nama_file != ''){
    //$kode_buku2 = $conn->real_escape_string($_POST['form_id_gambar']);
    move_uploaded_file($source, $folder.$nama_file);
    $sql = "UPDATE list_buku SET
    gambar_buku ='".$nama_file."',
    judul_buku ='".$mysqli->real_escape_string($_POST['form_judul_buku'])."',
    penerbit ='".$mysqli->real_escape_string($_POST['form_penerbit'])."',
    tahun_terbit ='".$mysqli->real_escape_string($_POST['form_tahun_terbit'])."',
    penulis ='".$mysqli->real_escape_string($_POST['form_penulis'])."',
    jumlah_halaman ='".$mysqli->real_escape_string($_POST['form_jumlah_Halaman'])."',
    sinopsis ='".$mysqli->real_escape_string($_POST['form_sinopsis'])."'
    WHERE
    kode_buku = '".$kode_buku."';
    ";

    if ($mysqli->query($sql)) {
      echo "
      <script>
      alert('A berhasil diperbaharui !');
      window.location = 'list-buku2.php?kodeBuku=".$kode_buku."';
      </script>
      ";
      }else{
        echo "
        <script>
        alert('B gagal diperbaharui !');
        window.location = 'list-buku2.php?kodeBuku=".$kode_buku."';
        </script>
        ";
      }
    }else{
      //$kode_buku2 = $conn->real_escape_string($_POST['form_id_gambar']);
    move_uploaded_file($source, $folder.$nama_file);
    $sql = "UPDATE list_buku SET
    judul_buku ='".$mysqli->real_escape_string($_POST['form_judul_buku'])."',
    penerbit ='".$mysqli->real_escape_string($_POST['form_penerbit'])."',
    tahun_terbit ='".$mysqli->real_escape_string($_POST['form_tahun_terbit'])."',
    jumlah_halaman ='".$mysqli->real_escape_string($_POST['form_jumlah_Halaman'])."',
    sinopsis ='".$mysqli->real_escape_string($_POST['form_sinopsis'])."',
    penulis ='".$mysqli->real_escape_string($_POST['form_penulis'])."'
    WHERE
    kode_buku = '".$kode_buku."';
    ";

    if ($mysqli->query($sql)) {
      echo "
      <script>
      alert('Laporan berhasil diperbaharui !');
      window.location = 'list-buku2.php?kodeBuku=".$kode_buku."';
      </script>
      ";
      }else{
        echo "
        <script>
        alert('Laporan gagal diperbaharui !');
        window.location = 'list-buku2.php?kodeBuku=".$kode_buku."';
        </script>
        ";
      }
    }
    }
   ?>
<html>
<head>
  <title>e-Perpustakaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="resources/css/ubah-buku.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous"> 
</head>
<body style="background-color: #1e1e1e;">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="dashboard.html"><h3><b>E-Perpustakaan</b></h3></a>
</nav> 
  <div class="content" align="">
      <div class="login-box">
        <form method="post" action="" enctype="multipart/form-data">
        <h3 class="txt" align="center"><b>Edit Buku</b></h3>
        <div class="form-group">
           <div class="form-group">
          Pilih Gambar :
          <br>
          <input type="file" id="gambarupload" hidden="hidden" id="custom-button" name="form_gambar_buku">
          <button type="button" id="custom-button"><b>CHOOSE A FILE</b></button>
          <span id="custom-text">No file choosen, yet.</span>
          <br>

          <img src="resources/img/<?php echo $row_select["gambar_buku"];?>" style="margin-left:40px; margin-top: 30px; width:500px; height:300px;">
		
        </div>
          <label for="exampleInputPassword1">Judul Buku</label>
          <input type="text" class="form-control" value="<?php echo $row_select["judul_buku"];?>" id="exampleInputPassword1" placeholder="Judul Buku" name="form_judul_buku">
        </div>
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">Penerbit</label>
            <input type="text" class="form-control" placeholder="Penerbit" name="form_penerbit" value="<?php echo $row_select["penerbit"];?>">
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Tahun Terbit</label>
            <input type="text" class="form-control" placeholder="Tahun Terbit" name="form_tahun_terbit" value="<?php echo $row_select["tahun_terbit"];?>">
          </div>
        </div>
        <div class="row">
          <div class="col">
            <label for="exampleInputPassword1">Penulis</label>
            <input type="text" class="form-control" placeholder="Penulis" name="form_penulis" value="<?php echo $row_select["penulis"];?>">
          </div>
          <div class="col">
            <label for="exampleInputPassword1">Jumlah Halaman</label>
            <input type="text" class="form-control" placeholder="Halaman" name="form_jumlah_Halaman" value="<?php echo $row_select["jumlah_halaman"];?>" >
          </div>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Sinopsis</label>
          <textarea class="form-control" id="exampleInputPassword1" placeholder="Sinopsis" name="form_sinopsis"><?php echo $row_select["sinopsis"];?></textarea>
        </div>
        <div class="" align="center">
            <input type="submit" name="form_edit" class="btn btn-dark" value="ubah">
        <small id="emailHelp" class="form-text text-muted">Pastikan semua form telah terisi sebelum menekan tombol selanjutnya!.</small> </div>
      </form>
      </div>
    </div>

  </div>
<script type="text/javascript">
  const gambaruploadBtn = document.getElementById("gambarupload");
  const customBtn = document.getElementById("custom-button");
  const customTxt = document.getElementById("custom-text");
  customBtn.addEventListener("click", function(){
    gambaruploadBtn.click();
  });
  gambaruploadBtn.addEventListener("change", function(){
    if (gambaruploadBtn.value) {
      customTxt.innerHTML = gambaruploadBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
    } else {
      customTxt.innerHTML = ">No file choosen, yet.";
    }
  });
</script>
</body>
</html>
<?php 

$mysqli->close();
 ?>
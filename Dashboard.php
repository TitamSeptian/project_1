<?php 
include 'koneksi.php';
session_start();
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <style>
      @import url('https://fonts.googleapis.com/css?family=Titillium+Web'); 
    </style>
    <title>e-Perpustakaan</title>

    <!-- Bootstrap core CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="resources/css/kelola-peminjaman.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="height: 50px;">
      <a class="navbar-brand" href="#">e-Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
                  <a class="nav-link" href="Dashboard.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="list-buku2.php">List Buku</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="kelola-peminjaman.php">kelola</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="data-anggota.php">Data Anggota</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="riwayat.php">Riwayat</a>
                </li>
        </ul>
        <a class="btn btn-outline-light" href="logout.php" role="button">Logout;</a>
        <!-- <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form> -->
      </div> <!--<div class="collapse navbar-collapse" id="navbarsExampleDefault"> -->
    </nav>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: 50px;">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="resources/img/book-slide-1.jpg" alt="First slide" width="800" height="642">
           <div class="carousel-caption text-left">
            <h3>List Buku</h3>
            <p style="color: #fff">Berisi kumpulan buku-buku yang telah terdaftar, terdapat pula didalamnya keterangan-keterangan buku tersebut maupun sinopsis dari buku yang terdaftar.</p>
            <a href="list-buku2.php"><button type="button" class="btn btn-primary" style="pointer-events: none;">Learn More</button></a>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="resources/img/book-slide-2.jpg" alt="Second slide" width="800" height="642">
         <div class="carousel-caption">
                <h1>Data Anggota.</h1>
                <p style="color: #fff">Daftarkan orang yang akan meminjam buku disini, maka dari itu daftarkan terlebih dahulu agar menjadi anggota tetap, apabila jika suatu saat akan meminjam kembali, pengguna sudah memiliki nomer ID Anggota.</p>
                <p><a class="btn btn-lg btn-primary" href="data-anggota.php" role="button">Learn more</a></p>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="resources/img/book-slide-3.jpg" alt="Third slide" width="800" height="642">
          <div class="carousel-caption text-right">
            <h1>Riwayat.</h1>
            <p  style="color: #fff">Melihat riwayat beberapa anggota yang sudah mengembalikan buku yang telah dipinjam.</p>
            <p><a class="btn btn-lg btn-primary" href="riwayat.php" role="button">Learn More</a></p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <div class="container marketing" style="margin-top: 50px;">
      <div class="row">
            <div class="col">
              <center>
              <img class="rounded-circle" src="resources/img/list-book.png" alt="Generic placeholder image" width="140" height="140">
              <h2>List Buku</h2>
              <p>Berisi kumpulan buku-buku yang telah terdaftar, terdapat pula didalamnya keterangan-keterangan buku tersebut maupun sinopsis dari buku yang terdaftar.</p>
              <p><a class="btn btn-dark" href="list-buku2.php" role="button">Lihat &raquo;</a></p>
              </center>
          </div><!-- /.col-lg-4 -->
          <div class="col"><center>
            <img class="rounded-circle" src="resources/img/pinjam-buku.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Kelola Pinjaman</h2>
            <p>Berisi buku buku yang di pinjamkan dan form pengembalian</p>
            <p><a class="btn btn-dark" href="kelola-peminjaman.php" role="button">Kelola &raquo;</a></p>
          </center></div><!-- /.col-lg-4 -->

          <div class="col"><center>
            <img class="rounded-circle" src="resources/img/pengembalian-buku.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Riwayat</h2>
            <p>Melihat riwayat beberapa anggota yang sudah mengembalikan buku yang telah dipinjam.</p>
           <p><a class="btn btn-dark" href="riwayat.php" role="button">Kelola &raquo;</a></p>
        </center></div><!-- /.col-lg-4 -->
        <div class="col"><center>
            <img class="rounded-circle" src="resources/img/user_dashboard.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Data Anggota</h2>
            <p>Daftarkan orang yang akan meminjam buku disini, maka dari itu daftarkan terlebih dahulu agar menjadi anggota tetap, apabila jika suatu saat akan meminjam kembali, pengguna sudah memiliki nomer ID Anggota.</p>
           <p><a class="btn btn-dark" href="data-anggota.php" role="button">Lihat &raquo;</a></p>
        </center></div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
    </div>





    <footer class="container">
      <hr>
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>&copy; 2017-2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
      <br><br><br>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="resources/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="resources/js/popper.min.js"></script>
    <script src="resources/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

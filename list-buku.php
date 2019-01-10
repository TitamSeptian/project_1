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
    <link href="resources/css/list-buku.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="height: 50px;">
      <a class="navbar-brand" href="#">e-Perpustakaan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="nNavbarSupportContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="Dashboard.html">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="list-buku.html">List Buku</a>
          </li>
         <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Kelola
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="kelola-peminjaman.html">Kelola Peminjaman</a>
                    <a class="dropdown-item" href="kelola-pengembalian.html">Kelola Pengembalian</a>
                  </div>
                </li>
          <li class="nav-item">
            <a class="nav-link" href="data-anggota.html">Data Anggota</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="riwayat.html">Riwayat</a>
          </li>
        </ul>
        <button type="button" class="btn btn-outline-light">Logout</button>
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
            <p>Berisi kumpulan buku-buku yang telah terdaftar, terdapat pula didalamnya keterangan-keterangan buku tersebut maupun sinopsis dari buku yang terdaftar.</p>
            <a href="list-buku.html"><button type="button" class="btn btn-primary" style="pointer-events: none;">Learn More</button></a>
        </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="resources/img/book-slide-2.jpg" alt="Second slide" width="800" height="642">
          <div class="carousel-caption">
                <h1>Data Anggota.</h1>
                <p>Daftarkan orang yang akan meminjam buku disini, maka dari itu daftarkan terlebih dahulu agar menjadi anggota tetap, apabila jika suatu saat akan meminjam kembali, pengguna sudah memiliki nomer ID Anggota.</p>
                <p><a class="btn btn-lg btn-primary" href="data-anggota.html" role="button">Learn more</a></p>
         </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="resources/img/book-slide-3.jpg" alt="Third slide" width="800" height="642">
          <div class="carousel-caption text-right">
                <h1>Riwayat.</h1>
                <p>Melihat riwayat beberapa anggota yang sudah mengembalikan buku yang telah dipinjam.</p>
                <p><a class="btn btn-lg btn-primary" href="riwayat.html" role="button">Learn More</a></p>
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
      <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
    <hr style="width: 100%;">
    <br>
    <div class="container-fluid">
    <form class="form-inline">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <br>
    <div class="table-responsive">
    <table class="table">
  <thead class="thead-dark" align="center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Rilis</th>
      <th scope="col">Genre</th>
      <th scope="col">Halaman</th>
      <th scope="col">Sinopsis</th>
    </tr>
  </thead>
  <tbody align="center">
    <tr>
      <th scope="row">1</th>
      <td><img src="resources/img/bukuinfografis.jpg" style="height: 135px; width: 125px;"></td>
      <td>Kiat Bikin Infografis Keren</td>
      <td>Indonesiabaik.id</td>
      <td>2018</td>
      <td>education</td>
      <td>58</td>
      <td>Konten visual yang menarik, ringan, dan menghibur kini lebih disukai masyarakat. Di antara derasnya arus informasi di internet, kemampuan menyajikan konten yang menarik dan berkualitas sangat penting.</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src="resources/img/bukutatakelolainternet.jpg" style="height: 135px; width: 125px;"></td>
      <td>Pengantar Tata Kelola Internet</td>
      <td>ID IGF</td>
      <td>2018</td>
      <td>education</td>
      <td>96</td>
      <td>Siapa saja para pemain yang memiliki kekuatan untuk membentuk internet dan apa saja yang dipertaruhkan di masa mendatang? Anda akan diajak menelusuri lansekap digital dan memahami peran berbagai pemangku kepentingan—pemerintah, operator jaringan, dan para raksasa teknologi di balik layanan internet yang kita nikmati.</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src="resources/img/bukuinternetsehat.jpg" style="height: 135px; width: 125px;"></td>
      <td>Internet Sehat Pedoman Berinternet Sehat, Aman, Nyaman dan Bertanggungjawab</td>
      <td>ICT Watch</td>
      <td>2017</td>
      <td>education</td>
      <td>92</td>
      <td>Panduan berinternet yang lengkap dan praktis untuk seisi keluarga dan pendidik dengan bahasa yang mudah dipahami awam. Dari menjaga keamanan gawai dari serangan malware, cara melindungi privasi online, pedoman bermedia sosial untuk anak, isu cyberbullying, hingga langkah berbisnis online untuk wanita yang ingin mencari penghasilan tambahan lewat internet.</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td><img src="resources/img/bukukeamanansiber.jpg" style="height: 135px; width: 125px;"></td>
      <td>Keamanan Siber untuk e-Commerce</td>
      <td>Siber Kreasi</td>
      <td>2017</td>
      <td>education</td>
      <td>80</td>
      <td>Sebelum terjun ke bisnis online, pelaku bisnis sebaiknya mengenali dan memetakan ranah bisnis yang makin ramai ini. Selain strategi memilih model bisnis, trik marketing, dan memilih platform yang tepat, masih ada isu ancaman keamanan siber yang penting diwaspadai, baik oleh pelapak maupun pembeli.</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td><img src="resources/img/bukudigitalkeluarga.jpg" style="height: 135px; width: 125px;"></td>
      <td>Literasi Digital Keluarga</td>
      <td>CfDS UGM</td>
      <td>2017</td>
      <td>education</td>
      <td>15</td>
      <td>Internet telah menjadi kebutuhan primer hampir semua orang. Penggunanya pun tidak lagi terbatas pada remaja dan orang dewasa, tapi juga anak-anak. Dengan akses penyaringan informasi yang masih terbatas sedangkan jenis informasi dan konten di internet sangat beragam, penting bagi para orangtua untuk ambil bagian dalam usaha melindungi anak dari konsumsi informasi dan konten yang tidak sesuai usia anak.</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td><img src="resources/img/bukumediaadvokasi.jpg" style="height: 135px; width: 125px;"></td>
      <td>Media Sosial untuk Advokasi Publik</td>
      <td>ICT Watch</td>
      <td>2017</td>
      <td>education</td>
      <td>77</td>
      <td>Media sosial kini memegang peran penting dalam advokasi kegiatan publik dan mendorong inisiasi gerakan sosial. Buku ini menyajikan panduan bagi organisasi masyarakat sipil (CSO) dan komunitas di Indonesia untuk membangun kapasitas dan kapabilitas yang memadai dalam menyusun strategi, menyiapkan taktik dan melakukan aksi yang efektif dalam memaksimalkan media sosial agar memberikan dampak yang tepat sasaran.</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td><img src="resources/img/bukugamercerdas.png" style="height: 135px; width: 125px;"></td>
      <td>Yuk, Jadi Gamer Cerdas: Berbagi Informasi Melalui Literasi</td>
      <td>Program Studi Magister Ilmu Komunikasi UGM</td>
      <td>2018</td>
      <td>education</td>
      <td>50</td>
      <td>Buku ini memberikan panduan untuk gamer (pemain game) remaja awal yang berumur 13 tahun sampai 18 tahun. Gamer yang menjadi fokus target audiens/pembaca buku ini merupakan para pemain dan pengakses game melalui gadget atau telepon seluler.</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td><img src="resources/img/bukudigitalparenting.png" style="height: 135px; width: 125px;"></td>
      <td>Digital Parenting: Mendidik Anak di Era Digital</td>
      <td>Samudra Biru</td>
      <td>2018</td>
      <td>education</td>
      <td>70</td>
      <td>Era digital menawarkan beragam ancaman dan kesempatan maka penting bagi orang tua mengembangkan model pengasuhan yang bertujuan menghindarkan anak dari ancaman dan memaksimalkan potensi digital.</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td><img src="resources/img/bukumengenalhoaks.png" style="height: 135px; width: 125px;"></td>
      <td>Mengenal Hoaks</td>
      <td>banyumurti.net</td>
      <td>2018</td>
      <td>education</td>
      <td>60</td>
      <td>Hoaks (hoax) menjadi isi yang cukup banyak dibicarakan orang saat ini di dunia siber. Sebenarnya apakah yang disebut hoaks? Berdasarkan Kamus Besar Bahasa Indonesia (KBBI), hoaks didefinisikan sebagai berita bohong.</td>
    </tr>
  </tbody>
</table>
</div>
</div>
    <br>
    <hr style="width: 100%">
    <br>
    <div class="card-deck">
  <div class="card" align="center">
    <img class="card-img-top" src="resources/img/bukuinfografis.jpg" style="height: 238px; width: 180px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Kiat Bikin Infografis Keren</h5>
      <p class="card-text">Series: frontpage<br>
        Published by: Indonesiabaik.id<br>
        Release Date: 2018<br>
        Genre: education<br>
        Pages: 58</p>
      <p class="card-text">Konten visual yang menarik, ringan, dan menghibur kini lebih disukai masyarakat. Di antara derasnya arus informasi di internet, kemampuan menyajikan konten yang menarik dan berkualitas sangat penting.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card" align="center">
    <img class="card-img-top" src="resources/img/bukutatakelolainternet.jpg" style="height: 238px; width: 180px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Pengantar Tata Kelola Internet</h5>
      <p class="card-text">Published by: ID IGF<br>
        Release Date: 2018<br>
        Genre: education<br>
        Pages: 96</p>
      <p class="card-text">Siapa saja para pemain yang memiliki kekuatan untuk membentuk internet dan apa saja yang dipertaruhkan di masa mendatang? Anda akan diajak menelusuri lansekap digital dan memahami peran berbagai pemangku kepentingan—pemerintah, operator jaringan, dan para raksasa teknologi di balik layanan internet yang kita nikmati.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card" align="center">
    <img class="card-img-top" src="resources/img/bukuinternetsehat.jpg" style="height: 238px; width: 180px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Internet Sehat Pedoman Berinternet Sehat, Aman, Nyaman dan Bertanggungjawab</h5>
      <p class="card-text">Series: frontpage<br>
Published by: ICT Watch<br>
Release Date: 2017<br>
Genre: education<br>
Pages: 82<br>
ISBN13: 978-602-51324-1-4</p>
      <p class="card-text">Panduan berinternet yang lengkap dan praktis untuk seisi keluarga dan pendidik dengan bahasa yang mudah dipahami awam. Dari menjaga keamanan gawai dari serangan malware, cara melindungi privasi online, pedoman bermedia sosial untuk anak, isu cyberbullying, hingga langkah berbisnis online untuk wanita yang ingin mencari penghasilan tambahan lewat internet.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

<br>
    <hr style="width: 100%">
    <br>
    <div class="card-deck">
  <div class="card" align="center">
    <img class="card-img-top" src="resources/img/bukukeamanansiber.jpg" style="height: 238px; width: 180px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Keamanan Siber untuk e-Commerce</h5>
      <p class="card-text">Series: frontpage<br>
Published by: Siber Kreasi<br>
Release Date: 2017<br>
Genre: education<br>
Pages: 80</p>
      <p class="card-text">Sebelum terjun ke bisnis online, pelaku bisnis sebaiknya mengenali dan memetakan ranah bisnis yang makin ramai ini. Selain strategi memilih model bisnis, trik marketing, dan memilih platform yang tepat, masih ada isu ancaman keamanan siber yang penting diwaspadai, baik oleh pelapak maupun pembeli.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card" align="center">
    <img class="card-img-top" src="resources/img/bukudigitalkeluarga.jpg" style="height: 238px; width: 180px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Literasi Digital Keluarga</h5>
      <p class="card-text">Series: frontpage<br>
Published by: CfDS UGM<br>
Release Date: 2017<br>
Genre: education<br>
Pages: 15</p>
      <p class="card-text">Internet telah menjadi kebutuhan primer hampir semua orang. Penggunanya pun tidak lagi terbatas pada remaja dan orang dewasa, tapi juga anak-anak. Dengan akses penyaringan informasi yang masih terbatas sedangkan jenis informasi dan konten di internet sangat beragam, penting bagi para orangtua untuk ambil bagian dalam usaha melindungi anak dari konsumsi informasi dan konten yang tidak sesuai usia anak.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card" align="center">
    <img class="card-img-top" src="resources/img/bukumediaadvokasi.jpg" style="height: 238px; width: 180px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Media Sosial untuk Advokasi Publik</h5>
      <p class="card-text">Published by: ICT Watch<br>
Release Date: 2017<br>
Genre: education<br>
Pages: 77<br>
ISBN13: 978-602-51324-4-5</p>
      <p class="card-text">Media sosial kini memegang peran penting dalam advokasi kegiatan publik dan mendorong inisiasi gerakan sosial. Buku ini menyajikan panduan bagi organisasi masyarakat sipil (CSO) dan komunitas di Indonesia untuk membangun kapasitas dan kapabilitas yang memadai dalam menyusun strategi, menyiapkan taktik dan melakukan aksi yang efektif dalam memaksimalkan media sosial agar memberikan dampak yang tepat sasaran.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>

<br>
    <hr style="width: 100%">
    <br>
    <div class="card-deck">
  <div class="card" align="center">
    <img class="card-img-top" src="resources/img/bukugamercerdas.png" style="height: 238px; width: 180px;" alt="Card image cap">
    <div class="card-body" align="center">
      <h5 class="card-title">Yuk, Jadi Gamer Cerdas: Berbagi Informasi Melalui Literasi</h5>
      <p class="card-text">Published by: Program Studi Magister Ilmu Komunikasi UGM<br>
Release Date: 2018<br>
Genre: education<br>
ISBN13: 978-602-71877-5-7</p>
      <p class="card-text">Buku ini memberikan panduan untuk gamer (pemain game) remaja awal yang berumur 13 tahun sampai 18 tahun. Gamer yang menjadi fokus target audiens/pembaca buku ini merupakan para pemain dan pengakses game melalui gadget atau telepon seluler. </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card" align="center">
    <img class="card-img-top" src="resources/img/bukudigitalparenting.png" style="height: 238px; width: 180px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Digital Parenting: Mendidik Anak di Era Digital</h5>
      <p class="card-text">Series: frontpage<br>
Published by: Samudra Biru<br>
Release Date: 2018<br>
Genre: education</p>
      <p class="card-text">Era digital menawarkan beragam ancaman dan kesempatan maka penting bagi orang tua mengembangkan model pengasuhan yang bertujuan menghindarkan anak dari ancaman dan memaksimalkan potensi digital.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card" align="center">
    <img class="card-img-top" src="resources/img/bukumengenalhoaks.png" style="height: 238px; width: 180px;" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mengenal Hoaks</h5>
      <p class="card-text">Published by: banyumurti.net<br>
Release Date: 2018<br>
Contributors: Indriyatno Banyumurti<br> 
Genre: education</p>
      <p class="card-text">Hoaks (hoax) menjadi isi yang cukup banyak dibicarakan orang saat ini di dunia siber. Sebenarnya apakah yang disebut hoaks? Berdasarkan Kamus Besar Bahasa Indonesia (KBBI), hoaks didefinisikan sebagai berita bohong. </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
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
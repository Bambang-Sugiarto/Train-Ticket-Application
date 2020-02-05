<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
  </head>
  <body>

  <?php require_once 'proses.php'; ?>

  <?php 

    if(isset($_SESSION['message'])):
  
  ?>
  
  <div class="alert alert-<?php echo $_SESSION['msg_type'];?>">

  <?php 
    echo $_SESSION['message'];
    unset($_SESSION['message']);
  ?>

  </div>
    <?php endif;?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="index2.php">Tiket Kereta</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link active" href="index2.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" href="tiket.php">Ticket</a>
      <a class="nav-item nav-link active" href="service.php">Service</a>
      <a class="btn btn-warning" id=buton href="index.php">Keluar</a>
    </div>
  </div>
  </div>
</nav>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><b>Pesan Tiketmu Sekarang dan Nikmati Promonya</b></h1>
    <a href="tiket.php" class="btn btn-warning" id="buton">Pesan TIket</a>
  </div>
</div>

<div class="container rata">
  <div class="row justify-content-center">
    <div class="col-lg-10 info-panel">
        <div class="row">

          <div class="col-lg">
          <a href="tiket.php"><img src="img/tr.png" class="gmbr " alt=""></a>
              <h4>Pesan Tiket</h4>
              <p>Beli tiket sekarang</p>
          </div>

          <div class="col-lg">
          <a href="jadwal.php"><img src="img/11.png" class="gmbr " alt=""></a>
              <h4>Jadwal</h4>
              <p>Lihat jadwal disini</p>
          </div>
          <div class="col-lg">
          <a href="service.php"><img src="img/13.png" class="gmbr " alt=""></a>
              <h4>Service</h4>
              <p>Layanan untuk umum</p>
          </div>
          <div class="col-lg">
              <a href="about.php"><img src="img/10.png" class="gmbr " alt=""></a>
              <h4>About</h4>
              <p>Tentang aplikasi kami</p>
          </div>

        </div>
    </div>
  </div>
</div>
<div class="container">
  <br><br><br>
  <h4 align="center"><b>Mau Pergi Kemana Hari Ini</b></h4>
</div>
<div class="kartu">
<div class="container">
<div class="card-deck">
  <div class="card">
    <img src="img/train.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Simple Profile</h5>
      <p class="card-text">Pesan lebih cepat, isi data penumpang
        dengan sekali klik.</p>
        <p class="card-text"><small class="text-muted">Terima kasih sudah berlangganan</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/kereta.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Simple Booking Process</h5>
      <p class="card-text">Pemesanan tanpa ribet di mana pun dan kapan pun.</p>
      <p class="card-text"><small class="text-muted">Terima kasih sudah berlangganan</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/rel.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Simple Reschedule</h5>
      <p class="card-text">Memudahkan kamu mengatur ulang pemberangkatan.</p>
      <p class="card-text"><small class="text-muted">Terima kasih sudah berlangganan</small></p>
    </div>
  </div>
</div>
</div>
</div>

<div class="container">
  <hr>
  <br>
  <h4 align="center"><b>Kritik dan Saran</b></h4><br><br>
</div>

<div class="container formulir">
<form action="proses.php" method="Post">
  <div class="form-group">
  <label for="">Email</label>
  <input type="text" name="email" class="form-control" placeholder="Masukan Email">
  </div>
  <div class="form-group">
  <label for="">Nama</label>
  <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
  </div>
  <div class="form-group">
  <label for="">Kritik</label>
  <input type="text" name="kritik" class="form-control" placeholder="Masukan Kritik">
  </div>
  <div class="form-group">
  <label for="">Saran</label>
  <input type="text" name="saran" class="form-control" placeholder="Masukan Saran">
  </div>
  <div class="form-group">
  <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
  
</div>
</form>

</div>

<div class = "footer">
  <div class="row justify-content-center">
    <div class="col-lg-10"> 
        <div class="row">

          <div class="col-lg">
            <img src="img/logo.png" class="float-left" alt="">
            <P>APLIKASI TIKET KERETA</P>
            <p>Copyright © 2015 - 2020 All right Reserved (App 1.0) 
              Alamat : Jl Nakula 1 No 38 Semarang Pendrikan Kidul
             </p>
          </div>

          <div class="col-lg ikon">
            <p>CONTACT US</p>
            <p>Website : www.dinus.ac.id <br>
              Email : bambangsugiarto200316@gmail.com
            </p>

          </div>

        </div>
    </div>
  </div>
  
</footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
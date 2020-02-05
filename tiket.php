<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tiket</title>
  </head>
  <body>

    <?php require_once 'proses.php'; ?>

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



<div class="container">
  <br>
  
</div>

<div class="container formulir">
<form action="proses.php" method="Post">
<h4 align="center"><b>Beli Tiket</b></h4><br><br>
<div class="form-group">
    <input type="hidden" name="id" value="<?php echo $id;?>">
  <label for="">Nama</label>
  <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" placeholder="Masukan nama anda" required>
  </div>
  <div class="form-group">
  <label for="">Telp</label>
  <input type="text" name="telp" class="form-control" value="<?php echo $telp; ?>" placeholder="Masukan nomor telepon" required>
  </div>
  <div class="form-group">
  <label for="">Nik</label>
  <input type="text" name="nik" class="form-control" value="<?php echo $nik; ?>" placeholder="Masukan nomor nik" required>
  </div>
  <div class="form-group">
  <label for="">Dari</label>
  <input type="text" name="dari" class="form-control" value="<?php echo $dari; ?>" placeholder="Stasiun pemberangkat" required>
  </div>
  <div class="form-group">
  <label for="">Ke</label>
  <input type="text" name="ke" class="form-control" value="<?php echo $ke; ?>" placeholder="Stasiun tujuan" required>
  </div>
  <div class="form-group">
  <label for="">Tanggal</label>
  <input type="date" name="tgl" value="<?php echo $tgl; ?>" class="form-control" required>
  </div>
  <div class="form-group">
  <label for="">Penumpang</label>
  <input type="number" name="penumpang" value="<?php echo $penumpang; ?>" class="form-control" placeholder="1" required>
  </div>
  <div class="form-group">
    <?php if($update == true):?>
    <button type="submit" name="update" class="btn btn-info">Update</button>
    <?php else:?>
    <button type="submit" name="save" class="btn btn-primary">Submit</button>
    <?php endif;?>
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
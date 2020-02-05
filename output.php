<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>View</title>
  </head>
  <body>

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



<?php require_once 'proses.php'; ?>

    <?php
        $mysqli = new mysqli('localhost','root','','weblanjut') or die(mysqli_error($mysqli));
        $result = $mysqli->query("select * from tb_tiket") or die(mysqli_error($mysqli));
    ?>
    <div class="container view">
        <h4 align = "center">Data Penumpang </h4><br><br>
    <div class="row justify-content-center">
        <table class="table">
            <thead>
                <tr>
                    <th>NAMA</th>
                    <th>TELEPON</th>
                    <th>NIK</th>
                    <th>DARI</th>
                    <th>KE</th>
                    <th>TANGGAL</th>
                    <th>PENUMPANG</th>
                    <th colspan="2">ACTION</th>
                </tr>
            </thead>

            <?php
                while($row=$result->fetch_assoc()):
            ?>

            <tr>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['telp'] ?></td>
                <td><?php echo $row['nik'] ?></td>
                <td><?php echo $row['dari'] ?></td>
                <td><?php echo $row['ke'] ?></td>
                <td><?php echo $row['tgl'] ?></td>
                <td><?php echo $row['penumpang'] ?></td>
                <td>
                    <a href="tiket.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a>
                    <a href="proses.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a>
                    <a href="tiket.php" class="btn btn-primary">Insert</a>
                </td>
            </tr>
            <?php endwhile;?>
        </table>
    </div>
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
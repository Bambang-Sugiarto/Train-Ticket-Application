<?php

    session_start();

    $mysqli = new mysqli('localhost','root','','weblanjut') or die(mysqli_error($mysqli));

    $id=0;
    $nama = '';
    $telp = '';
    $nik = '';
    $dari = '';
    $ke = '';
    $tgl = '';
    $penumpang = '';
    $update = false;

    

    if(isset($_POST['simpan']))
    {
        $email=$_POST['email'];
        $nama=$_POST['nama'];
        $kritik=$_POST['kritik'];
        $saran=$_POST['saran'];

        $mysqli->query("insert into service(email,nama,kritik,saran) 
        values('$email','$nama','$kritik','$saran')") or die($mysqli->error);
        
        $_SESSION['message']="Sukses Menyimpan";
        $_SESSION['msg_type']="success";
        

        header("location: index.php");

    }

    if(isset($_POST['save']))
    {
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $nik = $_POST['nik'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $tgl = $_POST['tgl'];
        $penumpang = $_POST['penumpang'];

        $mysqli->query("insert into tb_tiket(nama,telp,nik,dari,ke,tgl,penumpang) 
        values('$nama','$telp','$nik','$dari','$ke','$tgl','$penumpang')") or die($mysqli->error);
        
        header("location: output.php");
    }

    if(isset($_GET['delete']))
    {
        $id = $_GET['delete'];
        $mysqli->query("delete from tb_tiket where id=$id") or die($mysqli->error);
        header("location: output.php");
    }

    if(isset($_GET['edit']))
    {
        $update = true;
        $id = $_GET['edit'];
        $result = $mysqli->query("select * from tb_tiket where id=$id");
        
        $row = mysqli_fetch_array($result);
        $nama = $row['nama'];
        $telp = $row['telp'];
        $nik = $row['nik'];
        $dari = $row['dari'];
        $ke = $row['ke'];
        $tgl = $row['tgl'];
        $penumpang = $row['penumpang'];

        
    }

    if(isset($_POST['update']))
    {
        $id=$_POST['id'];
        $nama = $_POST['nama'];
        $telp = $_POST['telp'];
        $nik = $_POST['nik'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        $tgl = $_POST['tgl'];
        $penumpang = $_POST['penumpang'];
        $mysqli->query("update tb_tiket set nama='$nama',telp='$telp',nik='$nik',dari='$dari',
        ke='$ke', tgl='$tgl', penumpang='$penumpang' where id='$id'") or die($mysqli->error);
    
        header("location: output.php");
    }
    






?>
<?php 

    $error = '';
    
    $mysqli = new mysqli('localhost','root','','weblanjut') or die(mysqli_error($mysqli));

    if(isset($_POST['oke']))
    {
       
        
            $nama=$_POST['nama'];
            $pass=$_POST['password'];
            $query = $mysqli->query("select * from login where nama='$nama' and password='$pass'");
            $row = mysqli_num_rows($query);
            if($row==1)
            {
                header("location: index2.php");
            }else
            {
                echo
                "
                <script>
                    alert('Nama dan password belum terdaftar');history.back(self);
                </script>
                ";
            }
    }

    if(isset($_POST['daftar']))
    {
        $nama=$_POST['nama'];
        $pass=$_POST['password'];
        $mysqli->query("insert into login(nama,password) values('$nama','$pass')") or die($mysqli->error);
        echo
        "
           <script>alert('Berhasil membuat akun');window.location='index.php';</script> 

        ";
    }
    
?>
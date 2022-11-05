<?php
require 'koneksi.php';

if(isset($_POST["submit"])){
    $tanggal = $_POST["tanggal"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $pesan = $_POST["pesan"];
    $namagambar=$_POST['namagambar'];
    $gambar=$_FILES['gambar']['name'];

    $x = explode('.', $gambar);
    $extension = strtolower(end($x));
    $gambar_baru= "$namagambar.$extension";
    $tmp = $_FILES['gambar']['tmp_name']; 
    
    if(move_uploaded_file($tmp,"gambar/".$gambar_baru)){
        $query = "INSERT INTO postest5 (tanggal, nama, email, pesan,namagambar,gambar) 
        VALUES ('$tanggal','$nama','$email','$pesan','$namagambar','$gambar_baru')";
        $result=$conn->query($query);
        if($result){
            echo
            "
                <script>
                    alert('Data Berhasil Ditambahkan!'); 
                    document.location.href = 'hasil.php' ;
                </script>
            ";

        }
        else{
            echo
            "
                <script>
                    alert('Data Gagal Ditambahkan!');
                    document.location.href = 'postest4.php';
                </script>
            ";

        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pt4.css?v6" >
    <title>Document</title>
</head>
<body>
<div class="container">
    <div align="center">
            <div class="box" align="center">
                <h1>give your outfit ideas here </h1>
                    <form action="" method="post" enctype="multipart/form-data">
                        <label  for=""><br>Tanggal    : <br></label>
                        <input  type="date" name="tanggal" required><br>
                        <label for=""><br>Nama      :<br> </label>
                        <input type="text" name="nama" required><br>
                        <label  for=""><br>Email        :<br> </label>
                        <input  type="email" name="email" required> <br><br>
                        <label for="">Message          :<br><br> </label>
                        <input type="text" name="pesan"  required> <br>
                        <label for="">nama Gambar        :<br><br> </label>
                        <input type="text" name="namagambar"  required> <br>
                        <label for="">Upload Gambar        :<br><br> </label>
                        <input type="file" name="gambar"  required> <br>
                        <br><br>
                        <button type="submit" name="submit" value="submit" >Submit</button>
                    </form>
            </div>
    </div>
</div>
</body>
</html>

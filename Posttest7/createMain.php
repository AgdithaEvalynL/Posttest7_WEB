<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signIN.css" >
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="">nama Gambar        :<br><br> </label>
        <input type="text" name="nama"  required> <br>
        <label for="">Upload Gambar        :<br><br> </label>
        <input type="file" name="gambar"  required> <br>
        <a href = "main.php"><button type="submit" name="submit">Kirim</button></a>
    </form>
</body>
</html>

<?php
require 'koneksi.php';

if(isset($_POST["submit"])){
    // $name_menu=$_POST['nama_menu']
    $nama=$_POST['nama'];
    $gambar=$_FILES['gambar']['name'];

    $x = explode('.', $gambar);
    $extension = strtolower(end($x));
    $gambar_baru= "$nama.$extension";
    $tmp = $_FILES['gambar']['tmp_name'];  
    
    if(move_uploaded_file($tmp,"gambar/".$gambar_baru)){
        $query = "INSERT INTO konten (gambar) VALUES ('$gambar_baru')";
        $result= $conn->query($query);
       
        if($result){
            header("Location:main.php");
        } 
        else {
            echo "gagal kirim";
        }

    }
    }
?>

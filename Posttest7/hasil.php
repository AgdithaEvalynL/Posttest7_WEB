<?php
require 'koneksi.php';

if (isset($_GET['search'])) {
    $keyword = $_GET['keyword'];
    $query  = mysqli_query($conn, "SELECT * FROM postest5 WHERE
    nama     LIKE '%$keyword%' OR email  LIKE '%$keyword%'
    ");
 } else {
    $query = mysqli_query($conn, "SELECT * FROM postest5");
}


$feedback = [];
while($row = mysqli_fetch_assoc($query)){
    $feedback[] = $row;
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hasil.css?v4" >
    <title>Document</title>
</head>
<body>

<h1 align="center">POST YOUR OUTFIT </h1>
<form action="" method="GET" align='center'>
    <div class="boxcontainer">
       <table class="element">
            <tr>
                <td>
                    <input type="text" name="keyword" id="keyword" class="search" placeholder="Search..">
                </td>
                <td>
                <button type="submit" name='search' >Search</button> 
                </td>
            </tr>
        </table>
    </div>
</form>
<?php
    $i = 1;
    foreach($query as $kmn):
?>
        <div class="container">
            <div class="date">
            Tanggal  : <?php echo $kmn["tanggal"]?><br>
            </div>
            <div class="daftar">
                Nama Akun    :    <?php echo $kmn["nama"]?> <br>
                Email        :    <?php echo $kmn["email"]?>
                <div class="posisi">
                Message     : <?php echo $kmn["pesan"] ?><br>
                </div>
                <li>
                <img src="gambar/<?=$kmn['gambar']?>" alt=""  height="200px" width="150px">
                </li>
                <button><a href="update.php?id=<?=$kmn['id']?>">Edit</a></button>
                <button><a href="delete.php?id=<?=$kmn['id']?>">Hapus</a></button>               
            </div>
        </div>
<?php $i++; endforeach; ?>

<div align="center">
<button><a href="postest4.php">Tambah</a></button>
</div>
</body>
</html>
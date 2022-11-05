<?php

require 'koneksi.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($conn,
        "DELETE FROM konten WHERE id ='$id'");

    if($result){
        echo " 
            <script> 
            alert('You Deleted foto');
            document.location.href = 'main.php';
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signIN.css" >
    <title>Document</title>


    <div class="container">
    <div align="center" class="box" >
        <h1>REGISTER AS USER</div>
            <form action="" method='post'>
                <label for="username"><br>username<br></label>
                <input type="text" name="username" id="username">
                <label for="password"><br><br>password<br></label>
                <input type="password" name="password" id="password">
                <label for="password"><br><br>confirm password<br></label>
                <input type="password" name="confirm" id="confirm">
                <p>sudah punya akun? 
                    <a href="signIn.php"> Login</a>
                </p>
                <br><br>
                <button type ="submit" name="submit" value="submit">Submit</button>
            </form>    
    </div>


</body>
</html>

<?php
    require 'koneksi.php';
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm=$_POST['confirm'];

        // cek username telah digunakan atau belom
        $user = $conn->query("SELECT * FROM akun WHERE username='$username'");

        if(mysqli_num_rows($user) > 0){
            echo "<script>
            alert('username telah digunakan silakan gunakan username lain');
            </script>";
        } else{
            // konfirmasi password uda bener atau belom
            if ($password == $confirm){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = "INSERT INTO akun(username,psw)
                VALUES ('$username', '$password')";
                $result = $conn->query($query);

                if($result){
                    echo "<script>
                    alert('Registrasi Berhasil');
                    document.location.href='signIN.php'; 
                    </script>";
                }
                else {
                    echo "<script>
                    alert('Registrasi Gagal');
                    </script>";
                }
            } else {
                echo "<script>
                alert('konfirmasi pw salah!');
                </script>";
            }
        }
    }

?>
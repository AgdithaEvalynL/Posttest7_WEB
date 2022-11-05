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
        <h1>LOGIN AS USER</div>
            <form action="" method='post'>
                <label for="username"><br>username<br></label>
                <input type="text" name="username" id="username">
                <label for="password"><br><br>password<br></label>
                <input type="password" name="password" id="password">
        
                <p>belum punya akun? 
                    <a href="register.php"> Register</a>
                </p>
                <br><br>
                <button type ="submit" name="submit" value="submit">Submit</button>
            </form>    
    </div>     


</body>
</html>

<?php
    session_start();
    require 'koneksi.php';

    if(isset($_POST['submit'])){
        $username= $_POST['username'];
        $password = $_POST['password'];
        
        $query =  "SELECT * FROM akun
            WHERE username = '$username'";

        $result = $conn->query($query);
        $rows = mysqli_fetch_array($result);
        $username=$rows['username'];

        // jadi ini ngecek apakah var password itu sama dengan yang di db akun yaitu psw
        // if(password_verify($password, $rows['psw'])){
        //     $_SESSION['login'] = true;
            if(password_verify($password, $rows['psw'])){
                $_SESSION['submit'] = $username;

                echo "<script>
                        alert('Selamat Datang $username');
                        document.location.href = 'index.php'
                        </script>";
            }else{
                echo "<script>
                        alert('Username dan Password salah');
                        </script>";
            }
    }
    // }

?>
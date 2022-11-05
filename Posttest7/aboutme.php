<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="aboutme.css">
    <title>Document</title>
    <script>
        alert('ANDA SEDANG LOGIN KE ABOUT ME');
    </script>
</head>
<body class="transbox">
    <nav>
        <div class="logo">
            <h1>myFashion</h1>
        </div>
        <ul align="right">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">About Me</a></li>
            <li><a href="postest4.php">feedback</a></li>
            <li><a href="signIN.php">Sign in/sign up</a></li>
        </ul>
    </nav>
    <br>
    <p style="font-size: 17px;">Click switch darkmode/lightmode</p><img id="icon" src="logow.png">

    <div>
        <br><br><br>
        <h2>ABOUT ME</h2>

        <p><br>Name:<br>Agditha Evalyn Lolongan</p>
        <p>BirthDate: <br> August 28,2003</p>
        <p>NIM: <br> 2109106030</p>
        <p>HA..HALOO.. Saya bisa di panggil dita, sekarang dan <br> kedepannya ni postest ada lagi karena postestnya lanjut hiksss.
           <br> oiya, Saya seorang mahasiswi fakultas teknik dengan prodi Informatika<br>di UNIVERSITAS MULAWARMAN.
        </p>
        <br>
        <div class="poto">

        <img id="image" src="manis.jpeg" width="250px" height="310px">

        </div>
        <ul >
            <h3>Ini contact saya ya gaes (klik logo)</h3>
                <li><a href="https://instagram.com/ditaevalin?igshid=YmMyMTA2M2Y=">
                <img src="https://cdn-icons-png.flaticon.com/512/717/717392.png" width="30px" height="30px"> 
                </a><sup>: @ditaevalin </sup></li>

                <li><a href="mailto: ditaevalin28@gmail.com">
                <img src="https://cdn-icons-png.flaticon.com/512/60/60543.png" width="30px" height="30px">
                </a><sup>ditaevalin28@gmail.com</sup></li>
        </ul>
    </div>

    <script>
        // DARKMODE
        var icon=document.getElementById("icon")
         icon.onclick = function(){ 
         document.body.classList.toggle("darktema"); 
        }
    </script>

    <script>
    function image1(){
    document.getElementById('image').src="manis.jpeg";
    }
    document.getElementById('image').addEventListener('mouseover', image1);
    function image2(){
    document.getElementById('image').src="cantik.jpeg";
    }
    document.getElementById('image').addEventListener('mouseout', image2);
    </script>

    <!-- 
    <script>
        //addeventlistener 
        const element = document.getElementById("image");
        element.addEventListener("click", myFunction);
        function myFunction() {
            document.getElementById("image").src = "cantik.jpeg";
        }
    </script> -->


    <script src="postest.js"></script>


</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!--css dahil etmek için-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');
    
    </style>

<!--stil bitiş-->

</head>

<body >
    <!--navbar başlangıcı-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html">
            
            <h1>Sümeyye Çetinkaya</h1>     
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Ana Sayfa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cv.html">Öz Geçmiş</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ilgialani.html">İlgi Alanlarım</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sehrim.html">Şehrim</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="takimimiz.html">Takımımız</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="login.php">Login <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.html">İletişim Sayfası</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--navbar bitişi-->


    <!-- Login Formu -->
    <div class="container-login" style="margin-top: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label for="username">Kullanıcı Adı:</label>
                        <input type="text" class="form-control" id="username" name="username"
                            placeholder="Kullanıcı adınızı girin.">
                    </div>
                    <div class="form-group">
                        <label for="password">Şifre:</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Şifrenizi girin.">
                    </div>
                    <button type="submit" name="submit" class="button-form">Giriş</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Formu Bitişi -->


    <?php
    session_start();

    if(isset($_POST['submit'])){
        $user = $_POST['username'];
        $pass = $_POST['password'];
        if($user == "g231210065@ogr.sakarya.edu.tr" && $pass == "g231210065"){
            $_SESSION['success'] = "Başarılı giriş! Sayfaya yönlendiriliyorsunuz.";
            echo "<script type='text/javascript'>alert('Başarılı giriş! Sayfaya yönlendiriliyorsunuz.'); window.location.href = 'index.html';</script>";
        } else {
            echo "<script type='text/javascript'>alert('Hatalı giriş!');</script>";
        }
    }
    ?>











    <!--java dahil etmek için-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
</body>

</html>
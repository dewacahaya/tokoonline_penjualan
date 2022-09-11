<?php
    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kediri Jaya Indah</title>
    <link rel="icon" href="img/logo-kertas.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
</head>
<body>
        <!-- header -->
        <header>
        <div class="container">
                <h1><a href="dashboard.php">Kediri Jaya Indah</a></h1>
                <ul>
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="profil.php">Profil</a></li>
                    <li><a href="data-kategori.php">Data Kategori</a></li>
                    <li><a href="data-produk.php">Data Produk</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
        </div>
        </header>

        

        <!-- content -->
        <div class="section">
            <div class="container">
                <h3>Dashboard</h3>
                <div class="box">     
                    <h4>Selamat Datang <?php echo $_SESSION['admin_global']->admin_name?></h4>
                </div>
            </div>
        </div>

            <div class="container">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/Halaman Dashboard kediri jaya indah.jpg" class="d-block w-100" alt="..." width="100%">
                        </div>
                        </div>
                    </div>
            </div>

        <!-- footer -->
        <footer>
            <div class="container">
                <small>Copyright &copy; 2022 - Kediri Jaya Indah</small>
            </div>
        </footer>

</body>
</html>
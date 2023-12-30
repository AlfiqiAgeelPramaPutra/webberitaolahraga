<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berita dan Tiket Olahraga | BerTiGa</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header class="atas">
        <img src="gambar/logo.png" alt="BerTiGa" class="logo">
        <form class="form">
            <input class="search" type="text" placeholder="Cari...">
            <input class="button" type="button" value="Cari">		
        </form>
        <button class="daftar">Daftar</button>
        <button class="login">Login</button>
    </header>
    <header>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=jadwal">Jadwal & Klasemen</a></li>
                <li><a href="index.php?page=tiket">Tiket</a></li>
                <li><a href="index.php?page=contact">Contact</a></li>
                <li><a href="index.php?page=about">About</a></li>
            </ul>
        </nav>
        <h1 class="title">BerTiGa</h1>
        <h3 class="desc">Berita dan Tiket Olahraga</h3>
        <hr size="10px" width="100%">
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'home':
                include "home.php";
                break;
                case 'jadwal':
                include "jadwal.php";  
                break;
                case 'tiket':
                include "tiket.php";  
                break;
                case 'contact':
                include "contact.php";
                break;  
                case 'about':
                include "about.php";      
            }
        }
else{
            require_once "home.php";
        }
        ?>
 
    </div>
    <footer>
        &copy Copyright BerTiga 2022 | Website Berita dan Jual Beli Tiket Terbaik Indonesia
    </footer>
</body>
</html>
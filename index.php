<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Genshin Impact</title>
    <link rel="icon" href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIADgAOAMBIgACEQEDEQH/xAAcAAACAwADAQAAAAAAAAAAAAAFBgABBAMHCAL/xAAxEAABBAAFAQcDAgcAAAAAAAABAgMEEQAFEiExBhMiQVFhcYEUMpEHQhUjUoKx0fH/xAAaAQACAwEBAAAAAAAAAAAAAAACAwAEBQEG/8QAIBEAAgICAgIDAAAAAAAAAAAAAAECAxEhEjEEIhNR8f/aAAwDAQACEQMRAD8AddQRqUo0kAknH262/HeQJKEtlxsOJGqyB5HbY4pgtpltreQtbaDqKUVZI459cbZjkZ9URZYW6ltrs1uvWrSoggJUAKKtRF+WPL0ePGyDbezfsscJJY0TK4SJxU+pwdg3zR3O1/j1wzR0t9g2WgA2UgpA4rAXL4cgKQXI5bKWQguHSCoBAFbbnfffHLlynWYjIfedDCW09mWwDSa/dsT88VzjY8SmFUdLZmeTOVku9GLrfMI7WVvZc4tHayQBpJ4RfeJ8hsR8+hwi9L9TdUtZxH6YhOw5w/Y/LbWostDe1KCgVUNqokmt/HHYWcZblkyP9UpiNIWFAlwoTqP9wF+WBOUdPx8u6pVnMFRWPpFxlxFbOIJWlVgk71pI38+cacba1Di1+lTg37JjJmCGHEIYnfcRqQ62KIV4lPNe2+xo3iYyT5LmYNIRGjhKg4QC+vTZHIFA2B58e+LxVbGKOiRcvahQnpbxC3A0pV+CRR4/3hOzrr/L8jhpiuZfJnOhtC5Qa06EhzeiSfu3Pd528OcO2dHR03ISLtUfRQ53FYUnMnbzXJJCsscQzmJWwpaikFK1NVV+WoAfj3wNVddbjDpBylOxOb2w30v1F9fkkef2T64rhpKlI/mIHHeAJujY2Pvgsh9plhwggobsitqT88Vx8YxdNwn4cJ8yigSJMhchaUfagqrYfi/nBJ5bSQA8UDV3QFVufLBzwm0mClvoUJnUuWzJKmm8ozZzW4lpuWzDcS2uyAVa6FpF87g1teDUuMxLhtLTKDU5tOkLvdeklPeHxzgg7yVE0ByScYen4yZmXLfK3mVOvuKttZFgqJFg+NVgFvQb9VnIHiy5qW+ykRnloaQpguNJJUEED03qhuPxe+KwRzJl2JIU21MkkUDalBRH5GKwtxY5TXaCGbuheXUPtLmgeoH/ADAKG59FMU+2kqCwA62DyPAj1G/vZxublxXocZKpMfuqUopU6BfGBXUUyDl8CXmbTwtloqEdFLUsjwq8HK2HP432VoppZQzx5ceSnQ06NRH23pUPjnHHJfgRnA5MkR23Eigp90Ap9rO2PPGadaZhnFfUy0MNWClhg6Qk+G/JPzgQtaXV90ha1Hk+JxaXjfbOfIegZXUcDMnTDhy2HEE6TpcBU8f6Ui7r/Pthry1CYuWthRFBJUojizua9LOOmf046bOXS/471JMh5bCaSShDjrYce9zdpT6cnx255v1B/VtuUk5R0iS664ez+rqkgnbuXyfXgeuA4KLwjknk7Cee+rfceuwpVJ9htisYMl+nh5XEjKltrLTKEFSnQSSABfPjzisLwFnB5Zw3ZLK6SbisDMoq1SRHSFLUFlsO63d1JBBIos3R4BAF4mJh4k0Gb0OZNqy96g6Gjp1hspsKLtatQFgp0XelXNjGhE3obt0KVGCVh5KFlLTnZKTSVKWASSBqCkgGyEqutqxMTEIWMx6MFJcgQnXBIS4VhL6G9Os2LAvZGnbTROo+hxdSSemV5RIbyYxTJVJ1BRjLbV2e1JRtVDxJIJ32GJiYhBNxMTExCH//2Q==">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* CSS untuk Light Mode */
        body {
            background-color: #FFFFFF;
            color: #000000;
        }
        .card {
            background-color: #FFFFFF; 
            color: #000000;
        }
        #hero {
            background-color: #F0F0F0; 
        }

        #Gallery {
            background-color: #F8F8F8; 
        }
        nav {
            background-color:  #F8F8F8; 
        }
        /* CSS untuk Dark Mode */
        body.dark-mode {
            background-color: #121212;
            color: #E0E0E0;
        }

        .card.dark-mode {
            background-color: #2b2b2b;
            color: #E0E0E0;
        }
        .card-footer.dark-mode {
      color: #FFFFFF; 
        }

        nav.dark-mode {
            background-color: #484848; 
        }

        #hero.dark-mode {
            background-color: #282828; 
        }

        #Gallery.dark-mode {
            background-color: #282828; 
        }

        footer.dark-mode {
            background-color: #484848; 
        }
        nav.dark-mode .nav-link,nav.dark-mode .navbar-brand{
            color: #E0E0E0 !important; 
        }

    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg  sticky-top">
        <div class="container">
          <a class="navbar-brand" href="#">Wiki Genshin Impact</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark"> 
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#article">Article</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Gallery">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php" target="_blank">Login</a>
              </li>
            </ul> 
                <button id="light-mode" class="btn btn-sm btn-primary ml-2"><i class="bi bi-brightness-high-fill"></i></button>
                <button id="dark-mode" class="btn btn-sm btn-dark"><i class="bi bi-moon-fill"></i></button>
          </div>
        </div>
      </nav>
    <section id="hero" class="text-center p-5  text-sm-start">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="https://cdn1.epicgames.com/offer/879b0d8776ab46a59a129983ba78f0ce/genshintall_1200x1600-4a5697be3925e8cb1f59725a9830cafc" class="img-fluid" width="300">
                <div>
                    <h1 class="fw-bold display-4">genshin impact characters</h1>
                    <h4 class="lead display-6”">Genshin Impact adalah gim video aksi bermain peran tahun 2020 yang diproduksi oleh MiHoYo/HoYoverse. Gim ini menampilkan lingkungan dunia terbuka bergaya anime dan sistem pertarungan berbasis aksi yang menggunakan sihir elemen dan pergantian karakter.</h4>
                    <p>
                        <span id="tanggal"></span>
                        <span id="jam"></span>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- article begin -->
<section id="article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="img/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->
    <section id="Gallery" class="text-center p-5 ">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Gallery</h1>
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="img/4d7a1510b4a17783730c8fad1846c879_8340152663215970197.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/563a64233ced3c4eb27e4389a10cd28a_3095593444105945626.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/c03408d8696d6221234a0e1ebb458b79_2284907930243629986.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="img/fe98864ac8983946754b328cf4833638_6223911642110953858.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>
    </section>
    <footer class="text-center p-5 ">
        <div>
            <a href=""><i class="bi bi-instagram h2 p-2 text-dark"></i></a>
            <a href=""><i class="bi bi-twitter h2 p-2 text-dark"></i></a>
            <a href=""><i class="bi bi-whatsapp h2 p-2 text-dark"></i></a>
        </div>
        <div>
            Muhammad Rifki Hendarto &copy; 2023
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.setTimeout("TampilWaktu()",1000);

        function TampilWaktu(){
            var waktu = new Date();
            var bulan = waktu.getMonth() + 1;

            setTimeout("TampilWaktu()",1000);
            document.getElementById("tanggal").innerHTML =
                waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
            document.getElementById("jam").innerHTML = 
                waktu.getHours() +  ":" +
                waktu.getMinutes() + ":" +
                waktu.getSeconds();
        }
        const lightbutton = document.getElementById('light-mode');
        const darkbutton = document.getElementById('dark-mode');
        const body = document.body;

function updateCardTheme(addClass, removeClass) {
    const cards = document.querySelectorAll('.card');
    const cardFooters = document.querySelectorAll('.card-footer');

    cards.forEach(card => {
        card.classList.add(addClass);
        card.classList.remove(removeClass);
    });

    cardFooters.forEach(footer => {
        footer.classList.add(addClass);
        footer.classList.remove(removeClass);
    });
}

darkbutton.addEventListener('click', () => {
    body.classList.add('dark-mode');
    body.classList.remove('light-mode');
    updateCardTheme('dark-mode','light-mode');

    // Menambahkan kelas dark-mode ke elemen lainnya
    document.querySelector('nav').classList.add('dark-mode');
    document.getElementById('hero').classList.add('dark-mode');
    document.getElementById('Article').classList.add('dark-mode');
    document.getElementById('Gallery').classList.add('dark-mode');
    document.querySelector('footer').classList.add('dark-mode');
});
lightbutton.addEventListener('click', () => {
    body.classList.add('light-mode');
    body.classList.remove('dark-mode');
    updateCardTheme('light-mode','dark-mode');

    // Menghapus kelas dark-mode dari elemen lainnya
    document.querySelector('nav').classList.remove('dark-mode');
    document.getElementById('hero').classList.remove('dark-mode');
    document.getElementById('Article').classList.remove('dark-mode');
    document.getElementById('Gallery').classList.remove('dark-mode');
    document.querySelector('footer').classList.remove('dark-mode');
});


    </script>
  </body>
</html>
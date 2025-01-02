<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Boostrap + js Yuda Fuji</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
  <link rel="icon" href="https://github.com/heroyamada/tugas_boostrap-js/blob/main/img/icon-finish.png?raw=true">
  <style>
    .carousel-inner img {
      width: 100%;
      height: 1000px;
      object-fit: cover;
    }

    .row img {
      height: 400px;
      object-fit: cover;
    }

    .list-group-item {
      height: 57px;
    }

    .shadow-img {
      box-shadow: 0px 7px 15px rgba(0, 0, 0, 0.5);
      /* Bayangan lembut */
    }


    @media (max-width: 768px) {
      .carousel-inner img {
        height: 250px;
      }

      .row img {
        height: 100%;
      }

      .list-group-item {
        width: 100%;
        height: 100%;
        margin-left: 5%;
      }

      .about-row {
        flex-direction: column;
      }

      .about-img {
        margin-bottom: 10px;
      }

      .about-content-col {
        text-align: center;
      }
    }
  </style>
</head>

<body>
  <!---NAV START-->
  <nav id="navbar" class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">wiki genshin impact</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
          <li class="nav-item">
            <a class="nav-link active fw-bold" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" aria-current="page" href="#article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" aria-current="page" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" aria-current="page" href="#schedule">Schedule</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" aria-current="page" href="#about-me">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold" aria-current="page" href="login.php" target="_blank">Login</a>
          </li>
          <button id="darkbutton" class="btn btn-dark btn-sm-2" type="button">
            <i class="bi bi-moon-stars-fill"></i>
          </button>
          <button id="lightbutton" class="btn btn-danger btn-sm-2" type="button">
            <i class="bi bi-brightness-high"></i>
        </ul>
      </div>
    </div>
  </nav>
  <!--NAV END-->

  <!--HERO START-->
  <section id="hero">
    <div class="hero container-fluid bg-dark-subtle p-5">
      <div class="d-sm-flex flex-sm-row-reverse align-items-center">
        <img src="https://cdn1.epicgames.com/offer/879b0d8776ab46a59a129983ba78f0ce/genshintall_1200x1600-4a5697be3925e8cb1f59725a9830cafc"
          class="img-fluid rounded-4" width="500">
        <div>
          <h1 class="fw-bold display-4">genshin impact characters</h1>
                    <h4 class="lead display-6”">Genshin Impact adalah gim video aksi bermain peran tahun 2020 yang diproduksi oleh MiHoYo/HoYoverse. Gim ini menampilkan lingkungan dunia terbuka bergaya anime dan sistem pertarungan berbasis aksi yang menggunakan sihir elemen dan pergantian karakter.</h4>
            GTR</h4>
          <h6>
            <span id="tanggal"></span>
            <span id="jam"></span>
          </h6>
        </div>
      </div>
    </div>
  </section>
  <!--HERO END-->

  <!--ARTICLE START-->
  <section id="article" class="text-center">
    <div class="article container-fluid p-5">
      <h1 class="fw-bold display-4 pb-3">article</h1>
      <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
        <?php
        $sql = "SELECT * FROM article ORDER BY tanggal DESC";
        $hasil = $conn->query($sql);

        while ($row = $hasil->fetch_assoc()) {
          ?>
          <div class="col">
            <div class="card h-100">
              <img src="img/<?= $row["gambar"] ?>" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title"><?= $row["judul"] ?></h5>
                <p class="card-text">
                  <?= $row["isi"] ?>
                </p>
              </div>
              <div class="card-footer">
                <small class="text-body-secondary">
                  <?= $row["tanggal"] ?>
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
  <!---ARTICLE END-->

  <!---GALLERY START-->
  <section id="gallery" class="text-center">
    <div class="gallery container-fluid bg-dark-subtle p-5">
      <h1 class="fw-bold display-4 pb-3 text-center">Gallery</h1>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner rounded-4">
          <div class="carousel-item active">
            <img src="img/4d7a1510b4a17783730c8fad1846c879_8340152663215970197.jpg"
              class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/563a64233ced3c4eb27e4389a10cd28a_3095593444105945626.jpg"
              class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/c03408d8696d6221234a0e1ebb458b79_2284907930243629986.jpg"
              class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/fe98864ac8983946754b328cf4833638_6223911642110953858.jpg"
              class="d-block w-100" alt="...">
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
  <!---GALLERY END-->

  <!--Footer Start-->
  <footer id="footer">
    <div id="icon" class="footer text-center pt-4">
      <a href="https://www.instagram.com/_muhammadr.h/" class="h2 p-2 text-dark"><i class="bi bi-instagram"></i></a>
      <a href="https://www.twitter.com" class="h2 p-2 text-dark"><i class="bi bi-twitter"></i></a>
      <a href="https://www.whatsapp.com" class="h2 p-2 text-dark"><i class="bi bi-whatsapp"></i></a>
    </div>
    <div class="footer text-center pb-4">Muhammad Rifki Hendarto &copy; 2024</div>
  </footer>
  <!--Footer End-->

  <!---Script JS--->
  <script type="text/javaScript">
      document.getElementById("darkbutton").onclick = function(){
          const herocollection = document.getElementsByClassName("hero");
          for (let i = 0; i < herocollection.length; i++){
              herocollection[i].classList.remove("bg-dark-subtle");
              herocollection[i].classList.add("bg-dark");
              herocollection[i].classList.add("text-white");
          }
          const articleCollection = document.getElementsByClassName("article");
          for (let i = 0; i < articleCollection.length; i++) {
              articleCollection[i].classList.remove("bg-white", "text-dark");
              articleCollection[i].classList.add("bg-secondary", "text-white");
          }
          const galleryCollection = document.getElementsByClassName("gallery");
          for (let i = 0; i < galleryCollection.length; i++) {
              galleryCollection[i].classList.remove("bg-dark-subtle", "text-dark");
              galleryCollection[i].classList.add("bg-dark", "text-white");
          }
          const scheduleCollection = document.getElementsByClassName("schedule");
          for (let i = 0; i < scheduleCollection.length; i++) {
              scheduleCollection[i].classList.remove("bg-white", "text-dark");
              scheduleCollection[i].classList.add("bg-secondary", "text-white");
          }
          const listCollection = document.getElementsByClassName("list");
          for (let i = 0; i < listCollection.length; i++) {
              listCollection[i].classList.remove("bg-white", "text-dark");
              listCollection[i].classList.add("bg-dark", "text-white");
          }
          
          const aboutCollection = document.getElementsByClassName("about-section");
          for (let i = 0; i < aboutCollection.length; i++) {
              aboutCollection[i].classList.remove("bg-danger-subtle", "text-dark");
              aboutCollection[i].classList.add("bg-dark", "text-white");
          }

          const footerCollection = document.getElementsByClassName("footer");
          console.log("Footer elements:", footerCollection);

          for (let i = 0; i < footerCollection.length; i++) {
            console.log("Updating footer:", footerCollection[i]);
            
            footerCollection[i].classList.remove("text-dark");
            footerCollection[i].classList.add("bg-secondary", "text-white");
            const icons = footerCollection[i].getElementsByTagName("i");
            for (let j = 0; j < icons.length; j++) {
            icons[j].classList.add("text-white");
            }
          }

          const cardCollection = document.getElementsByClassName("card-body");
          for (let i = 0; i < cardCollection.length; i++) {
              cardCollection[i].classList.remove("bg-white", "text-dark");
              cardCollection[i].classList.add("bg-dark", "text-white");
          }
          const cardfCollection = document.getElementsByClassName("card-footer");
          for (let i = 0; i < cardfCollection.length; i++) {
              cardfCollection[i].classList.remove("bg-white");
              cardfCollection[i].classList.add("bg-secondary", "text-white");
          }
          
          
    };
    </script>

  <script>
    // Event listener untuk tombol darkbutton
    document.getElementById("darkbutton").addEventListener("click", function () {
      // Ambil elemen <a> dengan id "linkText"
      const link = document.getElementById("linkText");

      // Ubah warna teks menjadi putih
      link.style.color = "white";
    });
  </script>
  <script>
    // Event listener untuk tombol lightbutton
    document.getElementById("lightbutton").addEventListener("click", function () {
      // Ambil elemen <a> dengan id "linkText"
      const link = document.getElementById("linkText");

      // Ubah warna teks menjadi hitam
      link.style.color = "black";
    });
  </script>


  <script type="text/javaScript">
      document.getElementById("lightbutton").onclick = function() {
      console.log("Light button clicked");

      const herocollection = document.getElementsByClassName("hero");
      for (let i = 0; i < herocollection.length; i++) {
        herocollection[i].classList.remove("bg-dark", "text-white");
        herocollection[i].classList.add("bg-dark-subtle", "text-dark");
      }

      const articleCollection = document.getElementsByClassName("article");
      for (let i = 0; i < articleCollection.length; i++) {
        console.log("Updating article:", articleCollection[i]);
        articleCollection[i].classList.remove("bg-secondary", "text-white");
        articleCollection[i].classList.add("bg-white", "text-dark");
      }

      const galleryCollection = document.getElementsByClassName("gallery");
      for (let i = 0; i < galleryCollection.length; i++) {
        console.log("Updating gallery:", galleryCollection[i]);
        galleryCollection[i].classList.remove("bg-dark", "text-white");
        galleryCollection[i].classList.add("bg-dark-subtle", "text-dark");
      }

      const scheduleCollection = document.getElementsByClassName("schedule");
      for (let i = 0; i < scheduleCollection.length; i++) {
        console.log("Updating gallery:", scheduleCollection[i]);
        scheduleCollection[i].classList.remove("bg-secondary", "text-white");
        scheduleCollection[i].classList.add("bg-white", "text-dark");
      }

      const listCollection = document.getElementsByClassName("list");
      for (let i = 0; i < listCollection.length; i++) {
        console.log("Updating gallery:", listCollection[i]);
        listCollection[i].classList.remove("bg-dark", "text-white");
        listCollection[i].classList.add("bg-white", "text-dark");
      }

      const aboutCollection = document.getElementsByClassName("about-section");
      for (let i = 0; i < aboutCollection.length; i++) {
        console.log("Updating gallery:", listCollection[i]);
        aboutCollection[i].classList.remove("bg-dark", "text-white");
        aboutCollection[i].classList.add("bg-danger-subtle", "text-dark");
      }

      const footerCollection = document.getElementsByClassName("footer");
          console.log("Footer elements:", footerCollection);

          for (let i = 0; i < footerCollection.length; i++) {
            console.log("Updating footer:", footerCollection[i]);
            
            footerCollection[i].classList.remove("bg-secondary","text-white");
            footerCollection[i].classList.add("text-dark");
            const icons = footerCollection[i].getElementsByTagName("i");
            for (let j = 0; j < icons.length; j++) {
            icons[j].classList.remove("text-white");
            icons[j].classList.add("text-dark");
            }
      }

        const cardCollection = document.getElementsByClassName("card-body");
        for (let i = 0; i < cardCollection.length; i++) {
        console.log("Updating card-body:", cardCollection[i]);
        cardCollection[i].classList.remove("bg-dark", "text-white");
        cardCollection[i].classList.add("bg-white", "text-dark");
      }
        const cardfCollection = document.getElementsByClassName("card-footer");
        for (let i = 0; i < cardfCollection.length; i++) {
        console.log("Updating card-footer:", cardfCollection[i]);
        cardfCollection[i].classList.remove("bg-secondary", "text-white");
        cardfCollection[i].classList.add("text-dark");
      }
    };
    </script>

  <script type="text/javaScript">
      window.setTimeout("tampilWaktu()", 1000);

      function tampilWaktu(){
        var waktu = new Date();
        var bulan = waktu.getMonth() + 1;

        setTimeout("tampilWaktu()", 1000);
        document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
        document.getElementById("jam").innerHTML = 
          waktu.getHours() +
          ":" +
          waktu.getMinutes() +
          ":" +
          waktu.getSeconds();
      }
    </script>
</body>

</html>
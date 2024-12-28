<?php
session_start();

include "koneksi.php";  

//check jika belum ada user yang login arahkan ke halaman login
if (!isset($_SESSION['username'])) { 
	header("location:login.php"); 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIADgAOAMBIgACEQEDEQH/xAAcAAACAwADAQAAAAAAAAAAAAAFBgABBAMHCAL/xAAxEAABBAAFAQcDAgcAAAAAAAABAgMEEQAFEiExBhMiQVFhcYEUMpEHQhUjUoKx0fH/xAAaAQACAwEBAAAAAAAAAAAAAAACAwAEBQEG/8QAIBEAAgICAgIDAAAAAAAAAAAAAAECAxEhEjEEIhNR8f/aAAwDAQACEQMRAD8AddQRqUo0kAknH262/HeQJKEtlxsOJGqyB5HbY4pgtpltreQtbaDqKUVZI459cbZjkZ9URZYW6ltrs1uvWrSoggJUAKKtRF+WPL0ePGyDbezfsscJJY0TK4SJxU+pwdg3zR3O1/j1wzR0t9g2WgA2UgpA4rAXL4cgKQXI5bKWQguHSCoBAFbbnfffHLlynWYjIfedDCW09mWwDSa/dsT88VzjY8SmFUdLZmeTOVku9GLrfMI7WVvZc4tHayQBpJ4RfeJ8hsR8+hwi9L9TdUtZxH6YhOw5w/Y/LbWostDe1KCgVUNqokmt/HHYWcZblkyP9UpiNIWFAlwoTqP9wF+WBOUdPx8u6pVnMFRWPpFxlxFbOIJWlVgk71pI38+cacba1Di1+lTg37JjJmCGHEIYnfcRqQ62KIV4lPNe2+xo3iYyT5LmYNIRGjhKg4QC+vTZHIFA2B58e+LxVbGKOiRcvahQnpbxC3A0pV+CRR4/3hOzrr/L8jhpiuZfJnOhtC5Qa06EhzeiSfu3Pd528OcO2dHR03ISLtUfRQ53FYUnMnbzXJJCsscQzmJWwpaikFK1NVV+WoAfj3wNVddbjDpBylOxOb2w30v1F9fkkef2T64rhpKlI/mIHHeAJujY2Pvgsh9plhwggobsitqT88Vx8YxdNwn4cJ8yigSJMhchaUfagqrYfi/nBJ5bSQA8UDV3QFVufLBzwm0mClvoUJnUuWzJKmm8ozZzW4lpuWzDcS2uyAVa6FpF87g1teDUuMxLhtLTKDU5tOkLvdeklPeHxzgg7yVE0ByScYen4yZmXLfK3mVOvuKttZFgqJFg+NVgFvQb9VnIHiy5qW+ykRnloaQpguNJJUEED03qhuPxe+KwRzJl2JIU21MkkUDalBRH5GKwtxY5TXaCGbuheXUPtLmgeoH/ADAKG59FMU+2kqCwA62DyPAj1G/vZxublxXocZKpMfuqUopU6BfGBXUUyDl8CXmbTwtloqEdFLUsjwq8HK2HP432VoppZQzx5ceSnQ06NRH23pUPjnHHJfgRnA5MkR23Eigp90Ap9rO2PPGadaZhnFfUy0MNWClhg6Qk+G/JPzgQtaXV90ha1Hk+JxaXjfbOfIegZXUcDMnTDhy2HEE6TpcBU8f6Ui7r/Pthry1CYuWthRFBJUojizua9LOOmf046bOXS/471JMh5bCaSShDjrYce9zdpT6cnx255v1B/VtuUk5R0iS664ez+rqkgnbuXyfXgeuA4KLwjknk7Cee+rfceuwpVJ9htisYMl+nh5XEjKltrLTKEFSnQSSABfPjzisLwFnB5Zw3ZLK6SbisDMoq1SRHSFLUFlsO63d1JBBIos3R4BAF4mJh4k0Gb0OZNqy96g6Gjp1hspsKLtatQFgp0XelXNjGhE3obt0KVGCVh5KFlLTnZKTSVKWASSBqCkgGyEqutqxMTEIWMx6MFJcgQnXBIS4VhL6G9Os2LAvZGnbTROo+hxdSSemV5RIbyYxTJVJ1BRjLbV2e1JRtVDxJIJ32GJiYhBNxMTExCH//2Q==">
    <title>Genshin Impact | Admin</title>
    <link rel="icon" href="img/logo.png" />
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
    crossorigin="anonymous"
    /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <!-- nav begin -->
    <nav class="navbar navbar-expand-sm bg-body-tertiary sticky-top bg-danger-subtle">
    <div class="container">
        <a class="navbar-brand" href=".">Wiki Genshin Impact</a>
        <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
        >
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=dashboard">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="admin.php?page=article">Article</a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-danger fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['username']?>
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li> 
                </ul>
            </li> 
        </ul>
        </div>
    </div>
    </nav>
    <!-- nav end -->
    <!-- content begin -->
<section id="content" class="p-5">
    <div class="container">
        <?php
        if(isset($_GET['page'])){
        ?>
            <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle"><?= ucfirst($_GET['page'])?></h4>
            <?php
            include($_GET['page'].".php");
        }else{
        ?>
            <h4 class="lead display-6 pb-2 border-bottom border-danger-subtle">Dashboard</h4>
            <?php
            include("dashboard.php");
        }
        ?>
    </div>
</section>
<!-- content end -->
    <!-- footer begin -->
    <footer class="text-center p-5 bg-danger-subtle footer ">
    <div>
        <a href="https://www.instagram.com/udinusofficial"
        ><i class="bi bi-instagram h2 p-2 text-dark"></i
        ></a>
        <a href="https://twitter.com/udinusofficial"
        ><i class="bi bi-twitter h2 p-2 text-dark"></i
        ></a>
        <a href="https://wa.me/+62812685577"
        ><i class="bi bi-whatsapp h2 p-2 text-dark"></i
        ></a>
    </div>
    <div>Muhammad Rifki Hendarto  &copy; 2023</div>
    </footer>
    <!-- footer end -->
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"
    ></script>
</body>
</html> 
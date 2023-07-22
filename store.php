<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <link rel="icon" href="poze/logo_ureche_numai_cerc.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.php"/>
    <title>EAR-3 Market</title>

    
    <style>
        /* Stil pentru imagini în carousel */
        .carousel-item img {
            max-height: 400px; /* Ajustați înălțimea la dimensiunea dorită */
            object-fit: cover;
            width: 70%;
            align: center;
        }
    </style>
</head>
<body class="body">
    <nav class="nav-bar">  
        <ul class="nav-ul">
            
        </ul>
    </nav>
    <div id="main">
        <span id="open" class="nav-button">&#9776; <?php echo $lang['menu'] ?></span>
    </div>
    <div id ="mySidenav" class="sidenav">
        <div class="box-c1">
            <div class="div-cercMeniu">  <img src="poze/logo_ureche_numai_cerc.png" width=55%></div>
            <a href="#" class="closebtn" id="close"> &times;</a>          
        </div>

        <ul class ="nav-list">
            <li><a class="nav-a" href="index.php"><?php echo $lang['home'] ?></a></li>
            <li><a class="nav-a" href="store.php"><?php echo $lang['store'] ?></a></li>
            <li><a class="nav-a" href="community.php"><?php echo $lang['community'] ?></a></li>
            <li><a class="nav-a" href="about.php"><?php echo $lang['about'] ?></a></a></li>
            <li><a class="nav-a" href="support.php"><?php echo $lang['support'] ?></a></li>
        </ul>

        <div class="div-copy">
             ©EAR-3 2023-2023
         </div>
</div>
     <div class= "div-login">
     <a class="nav-a" href="login.php"><img src="poze/simbol_login.png" width=20px> <?php echo $lang['login'] ?></a>
     </div>
    <script>
        const openNav =document.getElementById("open");
        const closeNav =document.getElementById("close");
        const navSlide =document.getElementById("mySidenav");

        openNav.addEventListener("click", ()=>{
            navSlide.classList.add("navside");
        });

        closeNav.addEventListener("click", ()=>{
            navSlide.classList.remove("navside");
        });
        
        let playBtn = document.getElementsByClassName("div-cercMeniu");
        const audio = new Audio("poze/scula_bob.mp3");
        playBtn[0].addEventListener("click", (e) => {
  audio.play();
});
    </script>
    
    <div style="height:800px;background-color:#202020;font-size:36px;align:center" class='rounded-corners'>
        <br>
        <div class="mainul" align="center">EAR Games</div>

        <div id="carousel1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Imaginile pentru carousel -->
                <div class="carousel-item active">
                    <img src="poze/poza_masina.png" class="d-block w-100" alt="Imagine 1">
                </div>
                <div class="carousel-item">
                    <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 2">
                </div>
                <div class="carousel-item">
                    <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 3">
                </div>
                <div class="carousel-item">
                    <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 4">
                </div>
                <div class="carousel-item">
                    <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 5">
                </div>
            </div>
            <!-- Săgeți pentru navigarea în carousel -->
            <a class="carousel-control-prev" href="#carousel1" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel1" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    <!-- Carusel 2 -->
    <br>
    <div class="mainul" align="center">Andrei Games</div>

    <div id="carousel2" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Imaginile pentru carousel -->
            <div class="carousel-item active">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 1">
            </div>
            <div class="carousel-item">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 2">
            </div>
            <div class="carousel-item">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 3">
            </div>
            <div class="carousel-item">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 4">
            </div>
            <div class="carousel-item">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 5">
            </div>
        </div>
        <!-- Săgeți pentru navigarea în carousel -->
        <a class="carousel-control-prev" href="#carousel2" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel2" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    </div>

    <!-- Carusel 3 -->
    <br>
    <div class="mainul" align="center">Emi Games</div>

    <div id="carousel3" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- Imaginile pentru carousel -->
            <div class="carousel-item active">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 1">
            </div>
            <div class="carousel-item">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 2">
            </div>
            <div class="carousel-item">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 3">
            </div>
            <div class="carousel-item">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 4">
            </div>
            <div class="carousel-item">
                <img src="poze/provizoriu.png" class="d-block w-100" alt="Imagine 5">
            </div>
        </div>
        <!-- Săgeți pentru navigarea în carousel -->
        <a class="carousel-control-prev" href="#carousel3" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel3" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
    </div>
    <pre>
        <a class="nav-steag1" href="store.php?lang=en"><img src="poze/en.png" width=50px ></a>            <a class="nav-steag2" href="store.php?lang=ro"><img src="poze/ro.png"width= 50px><a>    
    </pre>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
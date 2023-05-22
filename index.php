<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="poze/logo_ureche_numai_cerc.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.php">
    <title>EAR-3 Market</title>
</head>
<body class="body">
    <nav class="nav-bar">  
        <ul class="nav-ul">
            <br><br>
        </ul>
    </nav>
    


    <div id="main">
        <span id="open">&#9776; Menu<span>
    </div>
    <div id ="mySidenav" class="sidenav">
        <div class="box-c1">
            <a href="#" class="logo"><img src="poze/logo_ureche_numai_cerc.png" width=45%></a>
            <a href="#" class="closebtn" id="close"> &times;</a>          
        </div>

        <ul class ="nav-list">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
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

    </script>


    <footer>
        <p align="center">
        <a class="nav-a">English</a> | <a class="nav-a">Romanian</a>
        </p>
    </footer>
</body>
</html>

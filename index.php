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
    <link rel="stylesheet" type="text/css" href="style.php">
    <title>EAR-3 Market</title>
</head>
<body class="body">
    <nav class="nav-bar">  
        <ul class="nav-ul">

        </ul>
    </nav>


    <div id="main">
        <span id="open" class="nav-button">&#9776; <?php echo  $lang['menu'] ?></span>
    </div>
    <div id ="mySidenav" class="sidenav">
        <div class="box-c1">
            <a href="#" class="logo"><div class="div-cercMeniu">  <img src="poze/logo_ureche_numai_cerc.png" width=55%></div></a>
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
            <p class="text">
             ©EAR-3 2023-2023
            </p>
         </div>
</div>
<div class="div-poza">
<p align="center"><img src="poze/noi_3_costum.png" width="50%" height="60%"></p>
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
        <div class="div-textAcasa">
    <p class="text" align="center"><font face="Franklin Gothic"><b>
        <?php echo $lang['textHome'] ?></b></font>
    </p>
    </div>
        <a class="nav-steag1" href="index.php?lang=en"><img src="poze/en.png" width = "50px"></a>
        <a class="nav-steag2" href="index.php?lang=ro"><img src="poze/ro.png" width = "50px"></a>

        <div class="footer">
            <p class="text-footer">
                <font face="Franklin Gothic">
                    test
                </font>
            </p>
        </div>
</body>
</html>

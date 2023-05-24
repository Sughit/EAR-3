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
            <a href="#" class="logo"><div class="div-cercMeniu"><img src="poze/logo_ureche_numai_cerc.png" width=55%></a></div>
            <a href="#" class="closebtn" id="close"> &times;</a>          
        </div>

        <ul class ="nav-list">
            <li><a class="nav-a" href="index.php"><?php echo $lang['home'] ?></a></li>
            <li><a class="nav-a" href="store.php"><?php echo $lang['store'] ?></a></li>
            <li><a class="nav-a" href="community.php"><?php echo $lang['community'] ?></a></li>
            <li><a class="nav-a" href="about.php"><?php echo $lang['about'] ?></a></a></li>
            <li><a class="nav-a" href="support.php"><?php echo $lang['support'] ?></a></li></a></li><br><br><br><br>

<div class="div-textMeniu">
<p align="center">
<font size=5%><?php echo $lang['projects'] ?></font>
</p>
</div>
<li><a class="nav-a" href="Project1.php"><?php echo $lang['Project1'] ?></a></li>
        </ul>
        <div class="div-copy">
            <p class="text">
             ©EAR-3 2023-2023
            </p>
         </div>
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
    <div class="div-store">
        <nav>
            <ul>
                <a class="nav-b" href="#"><?php echo $lang['your-store'] ?></a>
                <a class="nav-b" href="#"><?php echo $lang['categories'] ?></a>
                <a class="nav-b" href="#"><?php echo $lang['news'] ?></a>
            </ul>
        </nav>
    </div>
    <div class="div-textMagazin">
    <p class="text">
    <?php echo $lang['textStore'] ?>
    </p>
    </div>
    <pre>
        <a class="nav-steag1" href="store.php?lang=en"><img src="poze/en.png" width=50px ></a>            <a class="nav-steag2" href="store.php?lang=ro"><img src="poze/ro.png"width= 50px><a>    
    </pre>

</body>
</html>
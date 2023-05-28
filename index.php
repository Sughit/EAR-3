<?php
    include("config.php");
?>

<!DOCTYPE html>
<html lang="ro">
<head>
    <link rel="icon" href="poze/logo_ureche_numai_cerc.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.php">
    <title>EAR-3</title>

    <script>
        window.addEventListener('load', function() {
            var topButton = document.getElementById('top-button');
            var isShown = false;

            function checkVisibility() {
                if (window.scrollY > 0 && !isShown) {
                    topButton.style.display = 'block';
                    setTimeout(function() {
                        topButton.style.opacity = '1';
                    }, 100);
                    isShown = true;
                } else if (window.scrollY === 0 && isShown) {
                    topButton.style.opacity = '0';
                    setTimeout(function() {
                        topButton.style.display = 'none';
                    }, 300);
                    isShown = false;
                }
            }

            checkVisibility();

            window.addEventListener('scroll', function() {
                checkVisibility();
            });

            function scrollToTop() {
                var currentPosition = window.scrollY;
                var distance = currentPosition / 40;
                var scrollAnimation = setInterval(function() {
                    if (window.scrollY !== 0) {
                        window.scrollBy(0, -distance);
                    } else {
                        clearInterval(scrollAnimation);
                    }
                }, 8);
            }
            
            topButton.addEventListener('click', function() {
                scrollToTop();
            });
        });

        
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">



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
            <a href="#" class="logo"><div class="div-cercMeniu">  <img src="poze/logo_ureche_numai_cerc.png" width=55%></div></a>
            <a href="#" class="closebtn" id="close"> &times;</a>          
        </div>

        <ul class ="nav-list">
            <li><a class="nav-a" href="index.php"><?php echo $lang['home'] ?></a></li>
            <li><a class="nav-a" href="store.php"><?php echo $lang['store'] ?></a></li>
            <li><a class="nav-a" href="community.php"><?php echo $lang['community'] ?></a></li>
            <li><a class="nav-a" href="about.php"><?php echo $lang['about'] ?></a></a></li>
            <li><a class="nav-a" href="support.php"><?php echo $lang['support'] ?></a></li>
            <li><a class="nav-a" href="login.php"><?php echo $lang['login'] ?></a></li><br><br><br><br>
        </ul>

        <div class="div-copy">
            <p class="text">
             ©EAR-3 2023-2023
            </p>
         </div>
</div>
     <div class ="div-Project1">

     <a class="nav-a" href="Project1.php"><?php echo $lang['Project1'] ?></a></li>
     </div>


<div class="parallax" ></div>
 
<div style="height:1000px;background-color:#202020;font-size:36px" class='rounded-corners'>


<font color=gray>






    <div class="mainul" align="center" >NOUTĂȚI<br> <font size=5>Aici sunt postate stirile in legatura cu EAR-3 </font></div>
<br><br>
    <div class="postare">Șoc si groază<br> <font size=5>a murit Ceaușescu </font></div>







    <div id="top-button" onclick="scrollToTop()">
        TOP
    </div>

</font>


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
        <div class="div-textAcasa">
    <p class="text" align="center"><font face="Franklin Gothic"><b>
        <?php echo $lang['textHome'] ?></b></font>
    </p>
    </div>

    <pre>
        <a class="nav-steag1" href="index.php?lang=en"><img src="poze/en.png" width=50px ></a>           
        <a class="nav-steag2" href="index.php?lang=ro"><img src="poze/ro.png"width= 50px><a>    

</body>
</html>

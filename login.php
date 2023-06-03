<?php
include("config.php");
include("data-base.php");
$message = ""; // Variabila pentru a stoca mesajele de eroare sau de succes

        if (isset($_POST["login"])) {
           $username = $_POST["username"];
           $password = $_POST["password"];
            require_once "data-base.php";
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $user_now = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user_now) {
                if (password_verify($password, $user_now["password"])) {
                    session_start();
                    $_SESSION["username"] = "yes";
                    header("Location: index.php");
                    die();
                }else{
                    echo "Password does not match";
                }
            }else{
                echo "Email does not match";
            }
        }
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
        <span id="open" class="nav-button">&#9776; <?php echo $lang['menu'] ?></span>
    </div>
    <div id="mySidenav" class="sidenav">
        <div class="box-c1">
            <div class="div-cercMeniu">  <img src="poze/logo_ureche_numai_cerc.png" width=55%></div>
            <a href="#" class="closebtn" id="close"> &times;</a>          
        </div>

        <ul class="nav-list">
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
    <div class="div-login">
        <a class="nav-a" href="login.php"><img src="poze/simbol_login.png" width=20px> <?php echo $lang['login'] ?></a>
    </div>

    <script>
        const openNav = document.getElementById("open");
        const closeNav = document.getElementById("close");
        const navSlide = document.getElementById("mySidenav");

        openNav.addEventListener("click", () => {
            navSlide.classList.add("navside");
        });

        closeNav.addEventListener("click", () => {
            navSlide.classList.remove("navside");
        });

        let playBtn = document.getElementsByClassName("div-cercMeniu");
        const audio = new Audio("poze/scula_bob.mp3");
        playBtn[0].addEventListener("click", (e) => {
            audio.play();
        });
    </script>
    <div class="login-form">
        <div class="text">
            <?php echo $lang['login'] ?>
        </div>
        <form action="login.php" method="post">
            <div class="field">
                <div class="fas fa-envelope"></div>
                <input type="text" name="username" placeholder="<?php echo $lang['user-placeholder'] ?>">
            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input type="password" name="password" placeholder="<?php echo $lang['password-placeholder'] ?>">
            </div>
            <button type="submit" name="login"><?php echo $lang['login'] ?></button>
            <div class="link">
                <?php echo $lang['not-member'] ?>
                <a href="register.php"><?php echo $lang['signup-now'] ?></a>
            </div>
        </form>
    </div>
    <div class="message"><?php echo $message; ?></div>
</body>
</html>

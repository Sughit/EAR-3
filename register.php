<?php
    include("data-base.php");
    include("config.php");

    $message = ""; // Variabila pentru a stoca mesajele de eroare sau de succes

    // Verifică dacă s-a efectuat o cerere POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username)) {
            $message = "Pune nume";
        } elseif (empty($password)) {
            $message = "Pune parola bai";
        } else {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO users (username, password)
                    VALUES ('$username', '$hash')";
            if (mysqli_query($conn, $sql)) {
                $message = "Utilizator adăugat cu succes";
            } else {
                $message = "Eroare la adăugarea utilizatorului: " . mysqli_error($conn);
            }
        }
        mysqli_close($conn);
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
    <div class="login-form" align=center>
        <div class="text">
            Sign Up
        </div>
        <form method="post">
            <div class="field">
                <div class="fas fa-envelope"></div>
                <input type="text" name="username" placeholder="User">
            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input type="password" name="password" placeholder="Password">
            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input type="password" name="password-again" placeholder="Verify password">
            </div>
            <button type="submit">Sign up</button>
            <div class="link">
                Already have an account ?
                <a href="login.php">Login</a>
            </div>
        </form>
    </div>
    <div class="message"><?php echo $message; ?></div>
</body>
</html>
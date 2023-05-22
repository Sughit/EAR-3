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
            <a class="nav-a" href="index.php"><?php echo $lang['home'] ?></a>
            <a class="nav-a" href="community.php"><?php echo $lang['community'] ?></a>
            <a class="nav-a" href="about.php"><?php echo $lang['about'] ?></a>
            <a class="nav-a" href="support.php"><?php echo $lang['support'] ?></a>
        </ul>
    </nav>
    <div class="div-store">
        <nav>
            <ul>
                <a class="nav-b" href="#"><?php echo $lang['your-store'] ?></a>
                <a class="nav-b" href="#"><?php echo $lang['categories'] ?></a>
                <a class="nav-b" href="#"><?php echo $lang['news'] ?></a>
            </ul>
        </nav>
    </div>
    <p class="text">
        Magazin
    </p>
</body>
</html>
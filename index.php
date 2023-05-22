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
    <link rel="stylesheet" type="text/css" href="style.php"/>
    <title>EAR-3 Market</title>
</head>
<body class="body">
    <nav class="nav-bar">  
        <ul class="nav-ul">
            <a class="nav-a" href="#"><?php echo $lang['store'] ?></a>
            <a class="nav-a" href="#"><?php echo $lang['community'] ?></a>
            <a class="nav-a" href="#"><?php echo $lang['about'] ?></a>
            <a class="nav-a" href="#"><?php echo $lang['suport'] ?></a>
        </ul>
    </nav>
    <p class="text">
        Text
    </p>
    <footer class="footer">
        <p align="center">
        <a class="nav-a" href="index.php?lang=en"><?php echo $lang['en'] ?></a> <font color="white">|</font> <a class="nav-a" href="index.php?lang=ro"><?php echo $lang['ro'] ?></a>
        </p>
    </footer>
</body>
</html>

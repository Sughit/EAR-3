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
            <a class="nav-a" href="#"><?php echo $lang['home'] ?></a>
            <a class="nav-a" href="#"><?php echo $lang['next'] ?></a>
            <a class="nav-a" href="#"><?php echo $lang['more'] ?></a>
        </ul>
    </nav>
    <footer>
        <p align="center">
        <a class="nav-a" href="index.php?lang=en"><?php echo $lang['en'] ?></a> | <a class="nav-a" href="index.php?lang=ro"><?php echo $lang['ro'] ?></a>
        </p>
    </footer>
</body>
</html>

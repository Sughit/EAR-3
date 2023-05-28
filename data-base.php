*<?php

    $db_server = 'sql101.epizy.com';
    $db_user = 'epiz_34300412';
    $db_pass = 'WxmoXuKwka';
    $db_name = 'epiz_34300412_ear3database';
    $conn = '';

    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    } catch (Exception $e) {
      
        echo 'A apărut o eroare la conectarea la baza de date: ' . $e->getMessage();
    }
    
 
?>
<?php
    //Import clasele lu' phpmailer
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    include("data-base.php");
    include("config.php");

    function sendMail($email, $v_code)
    {
        require("PHPMailer/PHPMailer.php");
        require("PHPMailer/SMTP.php");
        require("PHPMailer/Exception.php");

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP(); 
            $mail->SMTPDebug = 0;
            $mail->Debugoutput = 'html';                                         
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'ear3.ro@gmail.com';                     //SMTP username
            $mail->Password   = 'EmanuelAndreiRobert333';                               //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('ear3.ro@gmail.com', 'EAR-3 Market');
            $mail->addAddress($email);
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Email Verification form';
            $mail->Body    = "Mersi de inregistrare! Da click pentru a verifica emailul <a href='verify.php?email=$email&v_code=$v_code'>Link</a>";
        
            if($mail->send())
            {
                echo 'Message has been sent';
            }
            else
            {
                echo "Eroare la trimitere";
            }
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    $message = ""; // Variabila pentru a stoca mesajele de eroare sau de succes

    // Verifică dacă s-a efectuat o cerere POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $password_again = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);

            if (empty($username)) 
            {
                $message = "Pune nume";
            } 
            elseif (empty($email))
            {
                $message = "Pune email";
            } 
            elseif (empty($password)) 
            {
                $message = "Pune parola bai";
            } 
            else 
            {
                $hash = password_hash($password, PASSWORD_DEFAULT);
                $v_code = bin2hex(random_bytes(16));
                $sql = "INSERT INTO users (username, password, email, verification_code, is_verified )
                        VALUES ('$username', '$hash', '$email', '$v_code', '0')";
                if (mysqli_query($conn, $sql) && sendMail($_POST['email'], $v_code)) 
                {
                    $message = "Utilizator adăugat cu succes";
                } 
                else 
                {
                    $message = "Eroare la adăugarea utilizatorului: " . mysqli_error($conn);
                }
            }
    
            //Verificam daca cele doua parole coincid
            if($password != $password_again)
            {
                echo"Parolele nu coincid";
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
    
    <div  class="container" >
    <div class="login-form">
        <div class="text">
            <?php echo $lang['signup'] ?>
        </div>
        <form method="post">
            <div class="field">
                <div class="fas fa-envelope"></div>
                <input type="text" name="username" placeholder="<?php echo $lang['user-placeholder'] ?>">
            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input type="password" name="password" placeholder="<?php echo $lang['password-placeholder'] ?>">
            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input type="password" name="password_again" placeholder="<?php echo $lang['password-placeholder-2'] ?>">
            </div>
            <div class="field">
                <div class="fas fa-lock"></div>
                <input type="email" name="email" placeholder="Email">
            </div>
            <button type="submit"><?php echo $lang['signup'] ?></button>
            <div class="link">
                <?php echo $lang['yes-member'] ?>
                <a href="login.php"><?php echo $lang['login'] ?></a>
            </div>
        </form>
    </div>
    </div>
    <div class="message"><?php echo $message; ?></div>
</body>
</html>
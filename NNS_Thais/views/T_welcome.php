<?php
session_start();
// var_dump($_SESSION["user"]);
$nomPrenom = $_SESSION["user"]["nom"]  . " " . $_SESSION["user"]["prenom"];
// var_dump($nomPrenom);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/T_reset.css">
    <link rel="stylesheet" href="../asset/css/T_container.css">
    <link rel="stylesheet" href="../asset/css/T_welcome.css">
    <img id="fondecran" class="fondecran" title="fondecran" alt="fond d'écran nuageux"src="../asset/img/T_fond-maquette2.png">
    <title>Bienvenue</title>
</head>
<body>
    <div id="container">
        
        <header>
            <section>
                 <div>
                    <a href="../T_index.php"><img id="logo" src="../asset/img/T_logo.png" title="logo" alt="logo now no stress"></a>
                </div>
                <div>
                    <button class="burger"onclick="show()"><img src="../asset/img/menu-burger.png" alt="menu burger" id="menuBurger"></button>
                </div>
            </section>
            <section>
                <div class="navBar">
                    <h3>Menu</h3><br>
                       <ul>
                            <li><a href="aPropos1.php">A propos de Now no Stress</a></li>
                            <li><a href="aPropos2.php">Découvrir (Essai rapide)</a></li>
                            <li><a href="#">Contactez-nous</a></li>
                            <li><a href="T_createaccount.php">Créez un compte</a></li>
                        </ul>     
                </div>
            </section>
        </header>
        <div id="content">

            <section>
                <h1>Bienvenue</h1>
            </section>

            <section>
                <p><?= $nomPrenom ?></p>
            </section>

            <section id="bouton">
                <button class="classic-btn" id="apropos-questionnaire">Questionnaire</button>
            </section>
        </div>
        
    </div>
    <script src="../asset/script/T_versApropos2.js"></script>
</body>
</html>
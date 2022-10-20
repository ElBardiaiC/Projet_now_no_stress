<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../asset/css/C_reset.css">
    <!-- <link rel="stylesheet" href="../asset/css/C_pulsationrespiration.css"> -->
    <link rel="stylesheet" href="../asset/css/C_style.css">
    <title>Document</title>
</head>
<body>

    <div id="container">
        <img id="fond" src="../asset/img/autre1.png" alt="">
    
    
            <header>
                <section>
                    <div >
                        <a href=../../NNS_Thais/T_index.php>   <section id="logo"><img src="../asset/img/MicrosoftTeams-image (6).png" alt="" height="60px" width="300px"></section></a>
                        <!-- <section><img id="burger" src="../asset/img/Menu-burger new.png"   alt=""></section> -->
                        <button class="burger"onclick="show()"><img src="../asset/img/Menu-burger new.png" alt="" id="menuBurger"></button>
                    </div>
                </section> 
                <div class="navBar">
                    <h3>Menu</h3><br>
                    <nav>
                            
                        <ul>
                            <li><a href="../../NoStress_zahra/views/aPropos1.php">A propos de Now no Stress</a></li>
                            <li><a href="#">Découvrir (Essai rapide)</a></li>
                            <li><a href="#">Connectez-vous</a></li>
                            <li><a href="#">Créez un compte</a></li>
                        </ul>
                    </nav>
                
            </header> 
    
            <main>
            <div id="back_blop">
                <div class="blob"></div>
        
            </div>
            </main>

            <a href="../../NOWS_Chaimae/views/C_respirationprofonde.php"><img  id="sparrow" src="../asset/img/retour new.png" alt=" fleche retour">
            </a>
            <p>Pas de compte? <br> 
                <a href="../../NNS_Thais/views/T_createaccount.php">
               <span id="crée"> Créez un compte ici</span></p>
            </a>

            <footer class="footPulsa">
        
                <ul>
                    <li>Contact</li>
                    <li>Support</li>
                    <li>Adresse</li>
                    <li>info</li>
                </ul>
            </footer>
        <script src="../asset/script/C_pulsationRespiration.js"></script>
</body>
</html>
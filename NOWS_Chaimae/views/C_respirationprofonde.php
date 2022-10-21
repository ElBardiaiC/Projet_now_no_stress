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
    <!-- <link rel="stylesheet" href="../asset/css/C_respirationProfonde.css"> -->
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
                </div>
            </header> 
    
            <main>
            <div id="back_content">
                <img id="yoga-pic" src="../asset/img/pngtree-hand-drawn-cute-girl-practice-yoga-png-image_2174532.jpg" alt="" height="150px" width="150px">
                <h1 class="TitreRespiration">Respiration Profonde :  </h1>
                <p class="ParaRespiration">
                
                Nous allons vous rediriger vers une animation de respirations profonde ,<br> il vous suffirat de Inpirer (comme décrit ci-dessous)<br> quand la pulsé gonfle et expiré ( décrit comme ci-dessous) quand la pulsé redecend <br>
                    
               <br> <span> Comment respirer:</span>  <br><br>Par le nez en gonflant votre ventre comme s'il s'agissait d'un ballon.<br> Expirez par la bouche en rentrant progressivement le ventre.<br>  Videz complètement l'air de vos poumons.<br>  À nouveau, inspirez en gonflant le ventre et cette fois bloquez votre respiration quelques secondes.<br>
            
                <br> </p>
                <button id="start"> Commencer</button>
    
            </div>
            </main>

            <a href="C_CombiendeTemps.php"><img  id="sparrow" src="../asset/img/retour new.png" alt=" fleche retour">
            </a>
            <p class="PasCompte">Pas de compte? <br> 
                <a href="../../NNS_Thais/views/T_createaccount.php">
               <span id="crée"> Créez un compte ici</span></p>
            </a>

     
            <footer class="footRespir">
        
                <ul>
                    <li>Contact</li>
                    <li>Support</li>
                    <li>Adresse</li>
                    <li>info</li>
                </ul>
            </footer>
                <script src="../asset/script/C_RespirationProfonde.js"></script>
</body>
</html>
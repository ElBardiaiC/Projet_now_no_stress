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
    <!-- <link rel="stylesheet" href="../asset/css/C_combiendetemps.css"> -->
    <link rel="stylesheet" href="../asset/css/C_style.css">
    <title>Connection combien de temps</title>
</head>
<body>
    <div id="container">
        <img id="fond" src="../asset/img/autre1.png" alt="">
        <header>
            <section>
                 <div>
                    <a href="../../NNS_Thais/T_index.php"><img id="logo" src="../../NNS_Thais/asset/img/T_logo.png" alt="logo now no stress"></a>
                </div>
                <div>
                    <button class="burger"onclick="show()"><img src="../../NNS_Thais/asset/img/menu-burger.png" alt="menu burger" id="menuBurger"></button>
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
    
        
    
            <h1 class="TitreCombien"> De combien de temps disposez vous ? </h1>
            <main class="MainChaimae">
                <button id="btn-moin-30">- de 30 min</button>
    
                <button id="btn-plus-30">+ de 30min</button>
       
            </main>
    
    
    
    </div>
    
    <a href="../../NOWS_Chaimae/views/C_angoisserdesecoucher.php"><img  id="sparrow" src="../asset/img/retour new.png" alt=" fleche retour">
    </a>
    <p class="PasCompte">Pas de compte? <br> 
        <a href="../../NNS_Thais/views/T_createaccount.php">
       <span id="crée"> Créez un compte ici</span></p>
    </a>

    <footer class="footComb">
        
        <ul>
            <li>Contact</li>
            <li>Support</li>
            <li>Adresse</li>
            <li>info</li>
        </ul>
    </footer>

    <script src="../asset/script/C_ConnexionCmbDeTmps.js"></script>
</body>
</html>
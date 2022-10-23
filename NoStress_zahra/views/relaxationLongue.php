<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/container.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Relaxation</title>
</head>
<body class="anxiete">

        <header>
            <section>
                 <a href="../../NNS_Thais/T_index.php"><img src="../assets/img/logo_NoStress.png" id="logo"></a>
            
                <button class="burger" onclick="show()"><img src="../assets/img/menu-burger.png" alt="" id="menuBurger"></button>
            </section>

            <div class="navBar">
                <h3>Menu</h3>
                <nav>
                    <ul>
                        <li><a href="aPropos1.php">A propos de Now no Stress</a></li>
                        <li><a href="aPropos2.php">Découvrir (Essai rapide)</a></li>
                        <li><a href="contactezNous.php">Contactez-nous</a></li>
                        <li><a href="../../NNS_Thais/views/T_createaccount.php">Créez un compte</a></li>
                    </ul>
                </nav>
            </div>
        </header>

    <div class="container">
        
       
        <section class="containt">

            <div id="imageRelax">
                <img src="../assets/img/relaxationLongue.webp" alt="" id="img-relax">
            </div><br>
            
                <div>
                    <audio controls="controls">
                        <source src="../assets/Medias/Z_scanCorporel_meditation_40mn.mp3">
                    </audio> 
                </div>

        </section>
           
        </div>
        
    </div>
    
    <div id="basDePageTension">
            
        <div class="retour">
            <a href="duree.php"><img src="../assets/img/fleche-retour.png"id="retourFleche" ></a>
        </div>
        <div class="pasDeCompte">
            <p>Pas de compte?<br>
            <a href="../../NNS_Thais/views/T_createaccount.php">Créer un compte ici</a></p>
        </div>
    </div>

    
    <script src ="../assets/scripts/relaxationLongue.js"></script>
</body>
</html>
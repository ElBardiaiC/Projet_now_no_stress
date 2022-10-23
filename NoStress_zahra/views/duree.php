<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/container.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Durée de relaxation</title>
</head>
<body class="anxiete">

    <header>
                <section >
                    <a href="../../NNS_Thais/T_index.php"><img src="../assets/img/logo_NoStress.png" alt=""id="logo"></a>
                    
                    <button class="burger"onclick="show()"><img class="icon" src="../assets/img/menu-burger.png" alt="" id="menuBurger"></button>
                </section> 
                <div class="navBar-solutions">
                    <h3>Menu</h3>
                    
                        <ul>
                            <li><a href="aPropos1.php">A propos de Now no Stress</a></li>
                            <li><a href="aPropos2.php">Découvrir (Essai rapide)</a></li>
                            <li><a href="contactezNous.php">Contactez-nous</a></li>
                            <li><a href="../../NNS_Thais/views/T_createaccount.php">Créez un compte</a></li>
                        </ul>
                    
                    </div>
    </header>

    <div class="container">

            <div class="containt">
                <div>
                    <h2>De combien de temps disposez-vous pour vous relaxer?</h2>
                </div>
                <div>
                    <div>        
                        <button class="btn-reponses" id="moins30">- de 30 min</button>
                    </div>

                    <div>
                        <button class="btn-reponses" id="plus30">+ de 30 min</button>
                    </div>        
                </div>
            </div>
        
    </div>
    <div id="basDePage">
                
            <div class="retour">
                <a href="relax.php"><img src="../assets/img/fleche-retour.png" id="retourFleche"></a>
            </div>
            <div class="pasDeCompte">
                <p>Pas de compte?<br>
                <a href="../../NNS_Thais/views/T_createaccount.php">Créer un compte ici</a></p>
            </div>
    </div>

    <script src ="../assets/scripts/duree.js"></script>

</body>
</html>
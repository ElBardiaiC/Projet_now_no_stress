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
                <h3>Menu</h3><br>
              
                    <ul>
                        <li><a href="aPropos1.php">A propos de Now no Stress</a></li>
                        <li><a href="aPropos2.php">Découvrir (Essai rapide)</a></li>
                        <li><a href="contactezNous.php">Contactez-nous</a></li>
                        <li><a href="../../NNS_Thais/views/T_createaccount.php">Créez un compte</a></li>
                    </ul>
               
            </div>

        </header>

    <div class="container">
        
        <div class="containt-relax">
            <div id="imageRelax">
                <img src="../assets/img/relax1.jpg" alt="" id="img-relax">
            </div>
            <div>
                <h2>C'est quoi la relaxation?</h2>
            </div>

                <p>
                    La relaxation est une technique de détente corporelle permettant de libérer les ressources et les énergies présentes en chacun de nous. Au cours d'une séance de relaxation, la conscience reste vigilante tandis que le corps est en état de détente profonde.
                    Elle permet de retrouver très vite une pleine sérénité, un apaisement émotionnel et une meilleure concentration. Elle peut aussi agir sur la dépression et la tension artérielle. Lorsque vous êtes détendu et calme, votre rythme cardiaque est régulier et harmonieux. Installez-vous dans un endroit calme, assis.e ou couché.e. Appuyez sur commencer. Laissez-vous guider. Bonne détente.
                </p>
                
                <button class="btn-relax" id="se-relaxer">Se relaxer</button>
           
        </div>
        
    </div>
    <div id="basPage">
            
        <div class="retour">
            <a href="solutionAnxiete.php"><img src="../assets/img/fleche-retour.png"  id="retourFleche"></a>
        </div>
        <div class="pasDeCompte">
            <p>Pas de compte?<br>
            <a href="../../NNS_Thais/views/T_createaccount.php">Créer un compte ici</a></p>
        </div>
    </div>

    
    <script src ="../assets/scripts/relax.js"></script>
</body>
</html>

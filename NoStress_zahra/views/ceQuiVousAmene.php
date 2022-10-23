<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/container.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Now,No Stress</title>
</head>
<body>
    
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
            
             
        <div class="containt-solutions">
            
            <div>
                <h2>Qu'est ce qui vous amène sur Now No Stress?</h2><br>
            </div>
            <div>
        
                <div>        
                    <button class="reponses" id="rep1">Mon Sommeil</button>
                </div>
                
                <div>
                    <button class="reponses" id="rep2">Mon anxiété</button>
                </div>
                
                <div>
                    <button class="reponses" id="rep3">Des tensions</button>
                </div>
            </div>
      
        </div>
    </div>
    <div id="basDePage">
            
        <div class="retour">
            <a href="aPropos2.php"><img src="../assets/img/fleche-retour.png" id="retourFleche"></a>
        </div>
        <div class="pasDeCompte">
            <p>Pas de compte?<br>
            <a href="http://localhost/Projet_now_no_stress/NNS_Thais/views/T_createaccount.php">Créer un compte ici</a></p>
        </div>
    </div>
    <script src ="../assets/scripts/ceQuiVsAmene.js"></script>
</body>
</html>
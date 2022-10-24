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

<body class="solutions"> 

<header>
            <section >
                <a href="http://localhost/Projet_now_no_stress/NNS_Thais/T_index.php"><img src="../assets/img/logo_NoStress.png" alt=""id="logo"></a>
                
                <button class="burger"onclick="show()"><img src="../assets/img/menu-burger.png" alt="" id="menuBurger"></button>
            </section> 

            <div class="navBar">

                <h3>Menu</h3><br>
                        
                    <ul>
                        <li><a href="aPropos1.php">A propos de Now no Stress</a></li>
                        <li><a href="ceQuiVousAmene.php">Découvrir (Essai rapide)</a></li>
                        <li><a href="contactezNous.php">Contactez-nous</a></li>
                        <li><a href="../../NNS_Thais/views/T_createaccount.php">Créez un compte</a></li>
                    </ul>
             
                </div>
                   
    </header>

    <div id="container">
        

        <div class="containt-relax">
            

                <div id="img-carte">
                    <img id="img-relax" src="../../NNS_Thais/asset/img/T_meditationhomme.png" alt="sommeil">
                </div>

                <div>
                    <h2>Méditation Scan Corporel </h2>
                </div>

                <div>
                    <p>
                        Durée : 40 minutes.
                    </p>
                    <p>
                        Matériel : Aucun matériel recquis.
                    </p>
                </div>
                <div>
                    <p id="para">
                        Dans cette méditation de 4O minutes, nous vous invitons à vous détendre. Le scan corporel consiste a, avec son attention, scan son corps et se focaliser sur les sensations qui y résident. Il permet également de vous encrer dans le présent en se focalisant sur votre respiration afin de laisser les inquiétudes du quotidien s'envoler. Installez-vous confortablement et  appuyez sur commencer. Bonne nuit.

                    </p>
                </div>

                <div>
                    <button class="btn-questionnaire" id="scan-btn">Commencer</button>
                </div>

        </div>   
    </div>
    <div id="basDePage">
        
        <div class="retour">
            <a href="SolutionPlus30.php"><img src="../assets/img/fleche-retour.png" id="retourFleche" ></a>
        </div>

        <div class="pasDeCompte">
            <p>Pas de compte?<br>
            <a href="../../NNS_Thais/views/T_createaccount.php">Créer un compte ici</a></p>
        </div>
    </div>
    <script src="../assets/scripts/scanCorporel.js"></script>

</body>
</html>
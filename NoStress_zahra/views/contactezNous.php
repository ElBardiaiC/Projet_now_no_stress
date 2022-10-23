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
            <section >
                <a href="../../NNS_Thais/T_index.php"><img src="../assets/img/logo_NoStress.png" alt=""id="logo"></a>
                
                <button class="burger"onclick="show()"><img src="../assets/img/menu-burger.png" alt="" id="menuBurger"></button>
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
        
        <H2>Contactez nous</H2><br>

            <section class="containt">
                
                <form class=contact name="contactForm" method="post" action="javascript:void(0)">
                    <div>
                        <label for="nom">Nom et Prénom</label>
                        <input name="nom" id="nom" placeholder="Votre nom et Prénom" type="text"/>
                    <div id="nom-error"></div>
            
                    <div>
                        <label for="phone">Numéro de tél</label>
                        <input name="phone" id="phone" placeholder="n de tél" type="tel"/>
                        <div id="phone-error"></div>
                    </div>
                    <div>
                        <label for="email">Adresse email</label>
                        <input name="email" id="email" placeholder="Email" type="email"/>
                        <div id="email-error"></div>
                    </div>
                    <div>
                        <label for="votreMsg">Veuillez entrer votre message</label>
                        <input name="votreMsg" id="votreMsg" placeholder="Votre message ici" type="text"/>
                        <div id="votreMsg-error"></div>
                    </div><br>
                    <div>
                        <input type="submit" onclick = "envoi()"value="Envoyer" class="btn-envoi">
                        <input type ="reset" value= "Recommencer" class="btn-envoi">
                    </div>
    
                 </form>

                <div id="valid-popup" class="popup hide">
                    <div id="btn" class ="close-btn" onclick="closePopup()">X</div>
                    
                    <h3>Merci, votre message est envoyé!</h3><br>
                    <img src="../assets/img/envoi.png" alt="" id="confirmEnvoi">
                </div>
                
        <script src="../assets/scripts/contact.js"></script>

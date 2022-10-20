<?php
session_start();
var_dump($_SESSION["user"]);

//! ne pas oublier login ne fonctionne pas //
function execute($query, $params= array(), $fetchMode = null)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=noStress.db", "root", "root");
        // prépare la requete éviter injection SQL
    	$stmt = $pdo->prepare($query);
        // exucute la requte
    	$stmt->execute($params);

    	if ($fetchMode !== null) {
            // retourne toutes les données sous forme de tableau
    		return $stmt->fetchAll($fetchMode);
    	} else {
    		return $stmt->fetchAll();
    	}
    	return $stmt; // Iterator (forearch)
    }
function verify($email, $mdp) {
    if (empty($email) || empty($mdp)) {
        return false;
    }
    try {
        
        $requete = "SELECT * FROM user WHERE email = :email";
        $params = array(
            ":email" => $email
        );

        if(execute($requete, $params)!= null){
            $data = execute($requete, $params)[0];
            
           
            // if(password_verify($mdp, $data['mdp'])) {
            //     // var_dump('Utilisateur is ok');
            //     $arrayData = array(
            //         "id" => $data["user_id"],
            //         "email" => $data["email"],
            //         "role" => $data["fk_role"]
            //     );
            //     return $arrayData;
            // }
            if($mdp == $data['password']){
                $arrayData = array(
                            "nom" => $data["nom"],
                            "prenom" => $data["prenom"]
                            
                        );
                        return $arrayData;
            }
            else {
                // le mot de passe n'est pas valide
                return false;
            }

        }
        else {
            // l'utilisateur n'existe pas
            return false;
        }
    
    } catch (PDOException $e) {
        return false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/T_reset.css">
    <link rel="stylesheet" href="./asset/css/T_style.css">
    <img id="fondecran" class="fondecran" src="./asset/img/T_fond-maquette2.png">
    <link rel="stylesheet" href="./asset/css/T_container.css">
    
    <title>NNSpage d'acceuil</title>
</head>
<body>
    <div id="container">
        <header>
                
            <div>
                <img src="./asset/img/T_logo.png" alt="logo now no stress">
            </div>
            <div>
                 <button class="burger" onclick="show()"><img src="../assets/img/menu-burger.png" alt="" id="menuBurger"></button>
            </div>
           
            
        </header>
        <?php 
          
          $msg="";
          if(isset($_POST["email"], $_POST["password"])){
            

      
              $user = verify(htmlspecialchars($_POST['email']), htmlspecialchars($_POST['password']));
              var_dump($user);
              if($user != false){
                  $_SESSION["user"] = $user;
                  var_dump($_SESSION["user"]);
                  header("Location:views/T_welcome.php");
              }
              else{
                  $msg = "<p style='color:red'>L'email / mot de passe ne sont pas valides</p>";
              }
          }
      
        
        ?>

        <div id="content">
    
            <div id="titres-div">
                <section id="titres">
                    <h2>Connectez-vous</h2>
                    <h2>Découvrir?</h2>
            
                </section>
            </div>
            <div id="content-login">
                <form method="post" action="#" id="login">
                        
                    <div>
                        <input type="email" name="email">
                        <input type="password" name="password">
                    </div>



                    
                    <div>
                        <p><a href="#">Mot de passe oublié?</a></p>
                    </div>
                    
                    <div>
                        <button class="classic-btn" id="log-in" type="submit">S'enregistrer</button>
                    </div>
                    
                    <div id="creer-compte">
                        <p>Pas de compte?</p>
                        <p><a href="http://localhost/Projet_now_no_stress/NNS_Thais/views/T_createaccount.php">Créer un compte ici</a></p>
                    </div>

                </form>
                <section id="essai">
                    <button class="classic-btn" id="essai-btn" type="submit">Essai</button>
                </section>
                
            </div>
        </div> 
        
        <!-- <footer>
            <p>Footer</p>
        </footer> -->
    </div>
            

    
    <script src="./asset/script/T_versBienvenue.js"></script> 
</body>
</html>
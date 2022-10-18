<?php
session_start();
$isfound= false;



if(isset($_POST['email'], $_POST['password'])){

    $em_ail = $_POST['email'];
    $pass_word = $_POST['password'];

$sqlQuery= "SELECT *
FROM membres
WHERE email=:param_email  AND  password= :param_password
"; 

$statement = $mysqlClient->prepare($sqlQuery);
$statement->execute(array("param_email" => $em_ail, "param_password" =>$pass_word));
$result = $statement -> fetchAll();



if($result){
$isfound = true;
$connectedUser =$result[0]['email'];

    exit();
}
}




if($isfound = true && $connectedUser = true){
   ;
  
  ;
    }
    else{
       
        include_once ('C:\MAMP\htdocs\Projet NNS\Projet_now_no_stress\NOWS_Chaimae\asset\src\login.php');

}


?>
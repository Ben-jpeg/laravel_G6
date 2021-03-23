<?php



require '../database/connexion_bdd.php';
require '../views/page_connexion.php';


if(isset($_POST['pseudo']) && isset($_POST['motdepasse'])) {


    $pseudo = addslashes($_POST['pseudo']);

    $password = addslashes($_POST['motdepasse']);

    $password_crypte = password_hash($password, PASSWORD_BCRYPT);


    
  $data = $bdd->prepare("SELECT * FROM user WHERE name=:name");

  
  $data->execute(['name' => $pseudo]); 
  $user = $data->fetch(); 


if(password_verify($password, $user['password'])){
    if ($pseudo != $user['name'] ) {

        echo " Identifiant incorrect";
    } else {

        session_start();
        $_SESSION['admin'] = $pseudo;
        echo " Bienvenue $pseudo, tu es connecté ";
        header('Location: ../views/ajoutemot.php');
        
  
    }
}else{
    echo " Identifiant incorrect";
}

    }
   

?>      
<?php 

$errror = null;
 
if(isset($_POST['new_user'])&& isset($_POST['user_email'])&& isset($_POST['new_user_mdp'])){
    //declaration des variables
    $new_user = $_POST['new_user'];
    $user_email = $_POST['user_email'];
    $new_user_mdp = $_POST['new_user_mdp'];
    if(mb_strlen ($new_user)<= 3 &&mb_strlen ($new_user)>90 ){
        $error = "Le nom d'utilisateur n'est pas valide ";

    }else if (mb_strlen ($new_user_mdp)<= 4 &&mb_strlen ($new_user_mdp)>=8) {
        $error = "Le mot de pass  d'utilisateur n'est pas valide ";
    }else {
        // criptage du password
        $encryptedPass = password_hash($new_user_mdp, PASSWORD_BCRYPT);
        
        // insertion dans la bdd et connexion
        if (create($new_user, $user_email,$new_user_mdp )) {
            session_start();
            $_SESSION['user'] = $new_user;
        }
    }
    
}


?>
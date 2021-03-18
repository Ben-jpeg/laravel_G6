<?php 
if(isset($_POST['wordname']) && isset($_POST['definition'])){
    $wordname = htmlspecialchars($_POST['wordname']);
    $definition = htmlspecialchars($_POST['definition0']);

    if(!$_SESSION['admin']){

        $error = 'Vous navez pas de droit';
    }else {
        ajouter_mot($wordname,$definition);
    }
    


}



?>
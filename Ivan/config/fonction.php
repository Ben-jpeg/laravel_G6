<?php 
// function pour la session 
if (!function_exists("is_connected")) {
    function is_connected(): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return !empty($_SESSION['user']);
    }
}

// creation une function pour creer un utilisateur 
if (!function_exists("create")) {
    function create(string $new_user, string $user_email, string $new_user_mdp): bool
    {
        require '../database/connexion.php';
        $sql = 'INSERT INTO user (name, email, password) VALUES (:name, :email, :password)';
        $newUser = $db->prepare($sql);
        $newUser->bindValue(":name", $new_user, PDO::PARAM_STR);
        $newUser->bindValue(":email", $user_email, PDO::PARAM_STR);
        $newUser->bindValue(":password", $new_user_mdp, PDO::PARAM_STR);

        $response = $newUser->execute();
        return $response;

}
}


//creation un function qui permet ajouter un mot a bdd
if (!function_exists("ajouter_mot")) {
    function ajouter_mot(string $wordname, string $definition):bool{
         require './database/connexion.php';
         $sql = 'INSERT INTO words (wordname, definition) VALUES (:wordname, :definition)';
         $newword = $db->prepare($sql);
         $newword->bindValue(":wordname", $wordname, PDO::PARAM_STR);
         $newword->bindValue(":definition", $definition, PDO::PARAM_STR);
         $response = $newword->execute();
            return $response;

}


}
?>
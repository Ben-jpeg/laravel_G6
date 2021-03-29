<?php  require '../components/header.php' ?>

<div id="bloc-centre">
    <img src="../img/velo.png" alt="Cycliste">
    <h1>Quiz</h1>
  
   <?php

    
    require '../database/connexion_bdd.php';

    // Affiche 1 définition aléatoire de la base de données
    // $requete = $bdd->query("SELECT * FROM  `words`  ORDER BY ID ASC LIMIT 1");
    $requete = $bdd->query("SELECT * FROM  `words` ORDER BY rand() LIMIT 1");
    
    $definition = $requete->fetch();
    $bonne_reponse =  $definition['wordname'];
    echo '<p class="definition">'. $definition['definition'] .'</p>';
    

    $id = $definition['id'];
    
    // Affiche 3 mots aléatoires de la base de données
    $requete = $bdd->query("SELECT * FROM  `words` WHERE id != $id ORDER BY rand() ");
    
    for ($i= 0; $i < 3; $i++) {

      $donnees = $requete->fetch();
      $tableau[] = $donnees['wordname'];
      // echo($tableau[$i] ) .'<br />'  ;
      }
      array_push($tableau, $bonne_reponse);
      shuffle($tableau);
      
      // creation un quiz
      
      //formulaire DEBUT --->
      echo '<form action="./quiz.php" method="POST"  >';
      foreach ($tableau as $reponse ) {
        
        echo '<input required value="'. $reponse . '" name="reponse" type="radio"> <label class="reponse" for="'. $reponse . '">'. $reponse . '</label>';
        
      }
      
      //btn radio (input)
      echo '<button name ="btn" type="submit">Valider</button>';
      session_start();
      echo '</form>';
      
      if(!isset($_SESSION['counter'])) {
        $counter = $_SESSION['counter'] = 0;
      }
      
      if(isset($_POST['btn'])) {
        ++$_SESSION['counter'];
 
      }         
      echo $_SESSION['counter'];
      //formulaire FIN --->

      if($_SESSION['counter']>=5){
        session_destroy();
        $_SESSION['counter'] = 0;

      }

      // var_dump($tableau);
    ?>


  </div>

  <?php  require '../components/footer.php' ?>





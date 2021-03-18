<?php $expression = false; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>QUIZ</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
  <nav>
    <a href="/lexique">Lexique</a>
    <a href="/connexion">Connexion</a>
    <a href="/enregistrement">Enregistrement</a>
  </nav>

  
  <?php if ($expression == true): ?>

    <!-- CAS PAGE 2 BLOCS -->
    <!-- BLOC DE GAUCHE -->
      <div id="bloc-gauche">
        <h1>Ceci est un titre</h1>
        <form method="POST" action="insert.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" name="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" required>
            <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre email.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Pseudo</label>
            <input type="text" name="pseudo" class="form-control" id="InputPseudo" required>
            </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de Passe</label>
            <input type="password" name="motdepasse" class="form-control" id="InputPassword" required>
          </div>
        
          <div id="button-group">
            <button type="submit" class="btn btn-primary rounded-0">Valider</button> <button class="btn rounded-0">S'enregistrer</button>
          </div>
        </form>
      </div>

    <!-- BLOC DE DROITE -->
      <div id="bloc-droite">
        <img src="./img/velo.png" alt="Cycliste">
      </div>
    <!-- FIN CAS PAGE 2 BLOCS -->
  <?php else: ?>
 

  <div id="bloc-centre">
    <img src="./img/velo.png" alt="Cycliste">
    <h1>Lexique</h1>
    <h3>Mot 1</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur nostrum, ex iure id, suscipit ea cupiditate animi explicabo porro rerum dolores inventore, veritatis corrupti a nulla quasi eius incidunt! Dolores.</p>
    <h3>Mot 2</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim voluptate tempora nisi recusandae, quaerat magni eaque rerum consequatur dolor iusto explicabo accusamus porro animi veritatis hic quisquam fugit vel repellat!</p>
  </div>
  <?php endif; ?>
</body>
</html>
<?php require './components/header.php' ?>
<body>

<h1> Connectez vous</h1>

<form method="POST" action="../config/auth.php">
  

  <div class="form-group">
    <label for="exampleInputPassword1">Pseudo</label>
    <input type="text" name="pseudo" class="form-control" id="InputPseudo" placeholder="Pseudo" required>
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Mot de Passe</label>
    <input type="password" name="motdepasse" class="form-control" id="InputPassword" placeholder="Mot de passe" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Valider</button>
</form>

<button><a href = 'deconnexion.php'>Revenir vers l'accueil</a></button>

<?php require './components/footer.php' ?>
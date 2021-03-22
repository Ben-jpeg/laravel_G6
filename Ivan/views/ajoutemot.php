<?php require '../components/header.php' ?>
<body>

<h1> Enregistrez un nouveau mot <br/>
        et sa définition
</h1>

<form method="POST" action="ajoutemot_bdd.php">
  

  <div class="form-group">
    <label for="exampleInputPassword1">Mot</label>
    <input type="text" name="wordname" class="form-control" id="wordname" placeholder="Mot" required>
    </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Définition</label>
    <textarea type="text" name="definition" class="form-control" id="definition" placeholder="Définiton" required> </textarea>
  </div>
  
  <button type="submit" class="btn btn-primary">Ajouter ce mot</button>
</form>

<button><a href = 'deconnexion.php'>Voir la page Lexique</a></button>
<br/>

<?php require '../components/footer.php' ?>
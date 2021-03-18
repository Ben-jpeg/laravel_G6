@include("commons.header")
    <!-- BLOC DE GAUCHE -->
    <div id="bloc-gauche">
        <h1>Enregistrez-vous</h1>
        <form method="POST" action="record.php">
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
            <button type="submit" class="btn btn-primary rounded-0">Valider</button> <button class="btn rounded-0">Se connecter</button>
          </div>
        </form>
      </div>

    <!-- BLOC DE DROITE -->
      <div id="bloc-droite">
        <img src="img/velo.png" alt="Cycliste">
      </div>
@include("commons.footer")
<?php if(!isset($_SESSION['pseudo'])): ?>
    
<h3>Connexion au Site</h3>

<form action="<?= url('connection')?>" method="POST">
    <div class="input-group mb-3">
        <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" autocomplete="off">
    </div>

    <div class="input-group mb-3">
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" autocomplete="off">
    </div>
    
    <button type="submit" class="btn btn-primary">Valider</button>
  
</form>

<?php endif ?>



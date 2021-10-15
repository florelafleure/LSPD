<?php 
    $connection = isset($_SESSION['pseudo']) ? 'Connecté depuis ' .$_SESSION['pseudo'] :'Non Connecté';
?>



<section class="Titre">
  <h1>Los Santos Police Départementale</h1><br>
</section>


<span class="connectText"><?= $connection ?></span>
  

    <div class="navbar">
        <a href="<?= url('') ?>">Home</a>
        <a href="<?= url('effectif') ?>">Effectif</a>
        <a href="<?= url('service') ?>">Service</a>
        <a href="<?= url('contact') ?>">Contact</a>
        <div class="dropdown">
            <button class="dropbtn">Actions
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="<?= url('casier') ?>">Casier</a>
                <a href="<?= url('enquete') ?>">Enquête</a>
                <a href="<?= url('rapport') ?>">Rapport</a>
                <a href="<?= url('amande') ?>">Amande</a>
                <a href="<?= url('saisie') ?>">Saisie</a>
                <a href="<?= url('gav.php') ?>">G.A.V</a>
                <a href="<?= url('bracelet') ?>">Bacelet Elec.</a>
                <a href="<?= url('plainte') ?>">Plainte</a>
                <a href="<?= url('plaque') ?>">Plaque D'imm.</a>
            </div>
        </div>
        
        <?php if(isset($_SESSION['pseudo'])): ?>
            <a href="<?=url('deco') ?>">Deconnection</a>
        <?php endif ?>

    </div>

    

    <?php include(router())?>
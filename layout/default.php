<section class="Titre">
  <h1>Los Santos Police Départementale</h1><br>
</section>

  

    <div class="navbar">
        <a href="<?php url('') ?>">Home</a>
        <a href="<?php url('effectif.php') ?>">Effectif</a>
        <a href="<?php url('service.php') ?>">Service</a>
        <a href="<?php url('contact.php') ?>">Contact</a>
        <div class="dropdown">
            <button class="dropbtn">Actions
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="<?php url('casier.php') ?>">Casier</a>
                <a href="<?php url('enquete.php') ?>">Enquête</a>
                <a href="<?php url('rapport.php') ?>">Rapport</a>
                <a href="<?php url('amande.php') ?>">Amande</a>
                <a href="<?php url('saisie.php') ?>">Saisie</a>
                <a href="<?php url('gav.php') ?>">G.A.V</a>
                <a href="<?php url('bracelet.php') ?>">Bacelet Elec.</a>
                <a href="<?php url('plainte.php') ?>">Plainte</a>
                <a href="<?php url('plaque.php') ?>">Plaque D'imm.</a>
            </div>
        </div>
    </div>

    <?php include(router())?>
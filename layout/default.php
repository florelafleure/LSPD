<section class="Titre">
  <h1>Los Santos Police Départementale</h1><br>
</section>

  

    <div class="navbar">
        <a href="<?php url('') ?>">Home</a>
        <a href="<?php url('effectif') ?>>Effectif</a>
        <a href="effectif.php">Service</a>
        <a href="effectif.php">Contact</a>
        <div class="dropdown">
            <button class="dropbtn">Actions
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="casier.php">Casier</a>
                <a href="enquete.php">Enquête</a>
                <a href="rapport.php">Rapport</a>
                <a href="amande.php">Amande</a>
                <a href="saisie.php">Saisie</a>
                <a href="gav.php">G.A.V</a>
                <a href="bracelet.php">Bacelet Elec.</a>
                <a href="plainte.php">Plainte</a>
                <a href="plaque.php">Plaque D'imm.</a>
            </div>
        </div>
    </div>

    <?php include(router())?>
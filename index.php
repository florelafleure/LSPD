<?php include("fonction/fonction.php") ?>
<?php include("core/router.php") ?>
<?php session_start()?>








<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="lspd.css" rel="stylesheet">
    <title>Los Santos Police Départementale Intranet</title>

</head>


<body>

    <section class="Titre"><h1>Los Santos Police Departementale</h1><br>

    <section class="Nav">
        <nav><strong><ul>
            <li><a href="lspdhome.php">Home</a></li>
            <li><a href="casier.php">Casier Judiciaire</a></li>
            <li><a href="enquete.php">Enquête</a></li>
            <li><a href="rapport.php">Rapport</a></li>
            <li><a href="amande.php">Amande</a></li>
            <li><a href="saisie.php">Saisie</a></li>
            <li><a href="gav.php">GAV</a></li>
            <li><a href="bracelet.php">Bracelet Elec.</a></li>
            <li><a href="plainte.php">Plainte</a></li>
            <li><a href="plaque.php">Plaque D'imm.</a></li>
            <li><a href="effectif.php">Effectif de Police</a></li>
            <li><a href="service.php">Service</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul></strong></nav>
    </section>
    
    <?php 
        include(router());
    ?>


</body>
</html>
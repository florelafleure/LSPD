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
            <li><a href="lspdhome.html">Home</a></li>
            <li><a href="effectif.html">Effectif de Police</a></li>
            <li><a href="casier.html">Casier Judiciaire</a></li>
            <li><a href="enquete.html">Enquête</a></li>
            <li><a href="rapport.html">Rapports</a></li>
            <li><a href="service.html">Service</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul></strong></nav>
    </section>
    
    <?php 
        include(router());
    ?>


</body>
</html>
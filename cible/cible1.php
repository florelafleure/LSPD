<?php

    $pseudo = isset($_POST['pseudo']) ? $_POST['pseudo']:'';
    $password = isset($_POST['password']) ? $_POST['password']:'';

     
    if($password ==='1'){
        $_SESSION['pseudo'] = $pseudo;
        header('Location:'.url());
    }
    
?>

Mot de passe, INCORRECTE

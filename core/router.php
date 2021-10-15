<?php
    function router(){
        $pageName = str_replace('/', '', isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '');
        switch($pageName){
            case 'effectif':
                return'page/effectif.php';
            case 'amande':
                return "page/amande.php";
            case 'bracelet':
                return "page/bracelet.php";
            case 'casier':
                return "page/casier.php";
            case 'contact':
                return 'page/contact.php';
            case 'enquete':
                return "page/enquete.php";
            case 'gav':
                return "page/gav.php";
            case 'home':
                return "page/home.php";
            case 'plainte':
                return "page/plainte.php";
            case 'plaque':
                return "page/plaque.php";
            case 'rapport':
                return "page/rapport.php";
            case 'saisie':
                return "page/saisie.php";
            case 'service':
                return "page/service.php";
            case 'deco':
                return "cible/deco.php";
            case 'connection':
                return "cible/cible1.php";
            
            default: 
                return 'formulaire/form1.php';
        }
    }
?>

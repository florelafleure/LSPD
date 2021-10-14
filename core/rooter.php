<?php
    function router(){
        $pageName = str_replace('/', '', isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '');
        switch($pageName){
            case 'formulaire_1':
            case 'cible_1':
                return "cible/cible1.php";
            case 'cible_2':
                return "cible/cible2.php";
            case 'cible_3':
                return "cible/cible3.php";
            case 'cible_tp_1';
                return 'cible/cibletp1.php';
            
        }
    }
?>

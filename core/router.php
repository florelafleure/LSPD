<?php
    function router(){
        $pageName = str_replace('/', '', isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '');
        switch($pageName){
            case 'effectif':
                return'page/effectif.php';
            case '':
                return "";
            case '':
                return "";
            case '':
                return "";
            case '':
                return '';
            default: 
                return 'page/home.php';
        }
    }
?>

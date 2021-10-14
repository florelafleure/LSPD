<?php
    function router(){
        $pageName = str_replace('/', '', isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '');
        switch($pageName){
            case '':
                return'';
            case '':
                return "";
            case '':
                return "";
            case '':
                return "";
            case '':
                return '';
            default: 
                return 'formulaire/form1.php';
        }
    }
?>

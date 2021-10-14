<?php 
    function url($url = '') {
        $pathInfo = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
        $redirectURL = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
        return "http://".$_SERVER['HTTP_HOST'].str_replace($pathInfo, '/', $redirectURL).$url;
    }
?>
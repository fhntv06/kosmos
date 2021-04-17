<?php 

    $protocol = "http://";
    require_once "common/database/database.php"; /* подключение базы данных */

    // код получающий url страницы
    $url = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    $url = explode('?', $url);
    $url = $url[0];

    if( $url == $protocol."kosmos/" ){
        $title = "SPACE TODAY";

    }

    if( $url == $protocol."kosmos/404.php" ){
        $title = "Страница не найдена";
    }

    if( $url == $protocol."kosmos/about/index.php" ){
        $title = "О компании";
    }
    
    
    require_once "index.php";

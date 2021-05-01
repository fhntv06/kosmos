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

    // проблема с title должна решиться, если перенести все страницы (в том числе и навигацию) в базу данных

    // навигация
    if( $url == $protocol."kosmos/about/index.php" ){
        $title = "О компании";
    }
    if( $url == $protocol."kosmos/works/index.php" ){
        $title = "Портфолио";
    }
    if( $url == $protocol."kosmos/technology/index.php" ){
        $title = "Технологии";
    }
    if( $url == $protocol."kosmos/contact/index.php" ){
        $title = "Контакты";
    }
    
    require_once "index.php";

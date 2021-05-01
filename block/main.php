

<main class="main">
    <?php
        if( $url == $protocol."kosmos/" ){ 

            require_once "main/sidebar.php"; 

        }
    ?>
    
    <div id="container">
        <?php 
        
            // вывод контента для 404
            if( $url == $protocol."kosmos/404.php" ){ 

                require_once "error.php";

            }

            // вывод блоков на главной странице
            if( $url == $protocol."kosmos/" ){ 

                require_once "main/news.php";
                require_once "main/spaceships.php";
                require_once "main/facts.php";

            }
            // Логика для вывода статей по GET-параметрам   
            // вывод статей / публикации
            if( $simbol_code ){
        ?>
            
                <section class="section"> 
                    
                    
                    <div class="wrapper">
                    <h2><?= $facts[0][0] ?></h2>
                        <div class="wrapper__content">
                            
                                <?php
                                    $text = explode( ". ", $facts[0][3] ); 
                                    $length = count($text);
                                    for( $i = 0; $i < $length; $i++){
                                ?>
                                    
                                    <p><?= $text[$i] ?>.</p>

                                <?php 
                                    
                                    } 
                                ?>
                        </div>
                    </div>
                </section>
        <?php 

            }

            if( $content != ""){

                // переходы для навигации

                echo $content;


            }

            // подтягиваем данный в из файла соответствующему пути и ссылки 
                // $url = $_SERVER['REQUEST_URI'];
                // $url = explode('?', $url);
                // $url = $url[0];

                // require_once "..".$url;

        
        ?>
    </div>
</main>
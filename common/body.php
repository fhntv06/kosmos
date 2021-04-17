
<body>
   
    <?php 
        if(  $url == $protocol."kosmos/" ||  $url == $protocol."kosmos/404.php" || $simbol_code  ){
            $path = "./block/";
        }else{
            $path = "../block/";
        }
        
        require_once $path."header.php";

        // Логика для вывода статей по GET-параметрам в main

        require_once $path."main.php";

        require_once $path."footer.php";

        if( $url == $protocol."kosmos/" ){
            require_once "scripts.php"; 
        }

    ?> 
    
</body>

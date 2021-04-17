
<body>
   
    <?php 
    if(  $url == "http://kosmos/" ||  $url == "http://kosmos/404.php" ){
        $path = "./block/";
    }else{
        $path = "../block/";
    }
        require_once $path."header.php";

        // Логика для вывода статей по GET-параметрам в main

        require_once $path."main.php";

        require_once $path."footer.php";

        if( $url == "http://kosmos/" ){
            require_once "scripts.php"; 
        }

    ?> 
    
</body>

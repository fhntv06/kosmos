
<body>
   
    <?php 

        require_once "./block/header.php";

        // Логика для вывода статей по GET-параметрам в main

        require_once "./block/main.php";

        require_once "./block/footer.php";

        if( $url != "http://kosmos/404.php" ){
            require_once "scripts.php"; 
        }

    ?> 
    
</body>

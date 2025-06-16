 <?php
         function gerarcor(){
            return sprintf('#%06x', random_int(0, 0xFFFFFF));
         };
         $cor = gerarcor();
    ?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <meta http-equiv="refresh" content="5">
     <style>
        body{background-color:<?php echo $cor ?> ;}
     </style>
</head>
<body>
    
</body>
</html>
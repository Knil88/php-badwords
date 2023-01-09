<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>BadWord</title>
</head>
<body>
  
     <?php

     $txt = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos doloremque explicabo architecto aut a dolores odio totam reprehenderit nihil, ratione labore aperiam dolore ea excepturi officia iure, consequuntur voluptates. Consequatur!  <br>";
        echo $txt;

        echo "Lunghezza Frase: <br>";
        echo strlen($txt)  ;

      
        $badword = $_GET["badword"];

       $modifica = str_replace($badword,"***",$txt );

     echo "$modifica <br>";

     echo " Lunghezza Frase : <br>";

     echo strlen($modifica);



     ?>
   
</body>
</html>
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

<!-- Titolo -->

     <header>

          <h1>
               BAD WORD
          </h1>

     </header>

   <main class="container">

   <?php

// Creiamo la variabile testo che andremo poi a modificare

   $txt = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos doloremque explicabo architecto aut a dolores odio totam reprehenderit nihil, ratione labore aperiam dolore ea excepturi officia iure, consequuntur voluptates. Consequatur!  <br><br>";
   
 // Stampiamo a schermo
   
   echo "Frase Normale <br><br>";

   echo $txt;

// Stampiamo la lunghezza della frase con mb_strlen che misura il numero dei caratteri

   echo "Lunghezza Frase:<br><br> ";
   
   echo mb_strlen($txt)  ;

   echo " caratteri";

   echo "<br><br>";

 // Prendiamo la nostra variabile con la frase da censurare tramite variabile super globale $_GET

  $badWord = $_GET["badWord"];
  

// creiamo un altra variabile che sarà il nostro testo modificato e tramite la funzione str_replace modifichiamo la frase 

  $modifiedTxt = str_replace($badWord,"***",$txt );

//Stampiamo a schermo il testo modificato con la lunghezza della frase

  echo "Frase Modificata <br><br>";

  echo " $modifiedTxt <br>";

  echo " Lunghezza Frase : <br><br>";

  echo mb_strlen( $modifiedTxt);

  echo " caratteri";



?>

   </main>

  
   
</body>
</html>
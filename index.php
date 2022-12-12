<?php 

//Creo una variabile in php
$variabile = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint quam a dolore quae enim perferendis, strunz itaque modi optio rerum recusandae odit incidunt exercitationem? Alias, eveniet. Voluptatem fugiat reiciendis excepturi modi!';
//modifico la variabile con Il GET ricevuto nell'URL
$variabileModificata = str_replace($_GET['name'], '***', $variabile);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Stampo la variabile -->
    <p>Il paragrafo della variabile è: <?php echo $variabile ?> </p>
    <!-- Stampo la lunghezza variabile -->
    <p>La lunghezza della variabile è: <?php echo strlen($variabile) ?> </p>
    <!-- Stampo la variabile modificata-->
    <p>Il paragrafo modificato è: <?php echo $variabileModificata ?></p>
    <!-- Stampo la lunghezza della variabile modificata -->
    <p>La lunghezza della variabile è: <?php echo strlen($variabileModificata) ?> </p>

</body>
</html>
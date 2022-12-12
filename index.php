<?php 

//Creo una variabile in php
$variabile = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint quam a dolore quae enim perferendis, strunz itaque modi optio rerum recusandae odit incidunt exercitationem? Alias, eveniet. Voluptatem fugiat reiciendis excepturi modi!';
$variabileModificata = str_replace($_GET['name'], '***', $variabile);

//GEt method

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
    
    <p>Il paragrafo della variabile è: <?php echo $variabile ?> </p>
    <p>La lunghezza della variabile è: <?php echo strlen($variabile) ?> </p>
    <p>Il paragrafo modificato è: <?php echo $variabileModificata ?></p>
    <p>La lunghezza della variabile è: <?php echo strlen($variabileModificata) ?> </p>

</body>
</html>
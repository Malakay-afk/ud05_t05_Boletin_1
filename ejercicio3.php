<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BOLETIN 3 EJERCIO</title>
</head>
<body>
    <?php
   $palabras=array(
        'table'=>'mesa',
        'chair'=>'silla',
        'sofa'=>'sofá',
        'dor'=>'puerta',
        'window'=>'ventana',
        'lamp'=>'lampara',
        'big'=>'grande',
        'mom'=>'madre',
        'boat'=>'barco',
        'bed'=>'cama',
     );
    echo "<table>";
    echo "<table border='1'>";
    //Recorremos o array asociativo para imprimir por tabla
    foreach ($palabras as $ingles => $castelan){
        echo "<tr><td>".$ingles."</td><td>".$castelan."</td></tr>";
    };
 
    ?>
 
</body>
</html>
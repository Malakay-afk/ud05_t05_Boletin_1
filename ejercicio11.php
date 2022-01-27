
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<pre>";
        echo "*<br>";
        echo "**<br>";
        $blancos="";
        for ($i=1;$i<=6;$i++){
        $blancos=$blancos."&nbsp;";
        echo "*"."$blancos"."*<br>";
    }
    echo "*********";
    echo "</pre>"
    ?>
    
</body>
</html>
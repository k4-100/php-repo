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
    $phrase = "Giraffe Academy";
    $phrase[0] = "H";
    $strLen = strlen($phrase);
    
    echo substr( str_replace("Hiraffe", "Bro",$phrase) , 5,8 );
   ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 

    <form action="site.php" method="get">
        Name: <input type="text" name="name" id="name">

        <button type="submit">
            submit
        </button>
    </form>
    <br>
    
    Your name is: <?php echo $_GET["name"]?>


</body>
</html>
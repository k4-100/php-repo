<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<form action="site.php" method="post">
    Apple <input type="checkbox" name="fruits[]" value="apple">
    <br>
    Banana <input type="checkbox" name="fruits[]" value="banana">
    <br>
    Coconut <input type="checkbox" name="fruits[]" value="coconut">
    <br>
    Cherry <input type="checkbox" name="fruits[]" value="cherry">
    <br>
    <input type="submit">
</form>

<?php 
    $fruits = $_POST["fruits"]; 
    echo $fruits[0];
?>


</body>
</html>
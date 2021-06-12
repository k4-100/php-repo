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
    <input type="number" name="val1"> <br>
    <input type="number" name="val2"> <br>
    <p>operators</p> 

    <button name="btns" value="add">
    +
    </button>

    <button name="btns" value="sub">
    -
    </button>

    <button name="btns" value="mul">
    *
    </button>

    <button name="btns" value="div">
    /
    </button>

    <br>
    <p>Click to calculate:</p>
    <input type="submit" value="Calculate"  >
</form>


<?php 
    $result = 0;
    $val1 = $_POST['val1'];
    $val2 = $_POST['val2'];
    $btns = $_POST['btns'];


    switch( $btns ){
        case 'add':
            $result = $val1 + $val2;
        break;
        case 'sub':
            $result = $val1 - $val2;
        break;
        case 'mul':
            $result = $val1 * $val2;
        break;
        case 'div':
            $result = $val1 / $val2;
        break;
        case 'mod':
            $result = $val1 % $val2;
        break;

        default: 
            echo "NaN";
    }

    if($result != 0)
        echo $result;
?>


</body>
</html>
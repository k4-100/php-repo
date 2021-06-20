<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 
<div style="text-align:center;">
    <?php 
      $num = 10;

      if( $num == 10 ):
        echo "is equal: <br>";
        echo "10 <br>";
      else:
        echo "isn't equal <br>";
        echo "10 <br>";
        echo "and it's equal: <br>";
        echo "$num instead ";
      endif 
      

    ?>
</div>



</body>
</html>
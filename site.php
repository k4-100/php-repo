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
      class Chef{
        function makeChicken(){
            echo "The chef makes chicken <br>";
        }
        function makeSpecialDish(){
            echo "The chef makes bbq ribs <br>";
        }
      }

      class ItalianChef extends Chef{
        function makePizza(){
            echo "The italian chef makes pizza <br>";
        }
      }


      $chef = new Chef();
      $chef->makeSpecialDish();

      $italianChef = new ItalianChef();
      $italianChef->makeSpecialDish();

    ?>
</div>



</body>
</html>
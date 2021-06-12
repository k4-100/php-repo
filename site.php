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
        class Book{
            var $title;
            var $author;
            var $pages;

            function __construct($title, $author, $pages){
                $this->title  = $title;
                $this->author = $author; 
                $this->pages  = $pages;
                
                echo "New book created <br>";
            }
        }

        $b1 = new Book("Mati","Też Mati",201);

        echo "$b1->author <hr>";       
    ?>
</div>



</body>
</html>
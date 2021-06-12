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
        }

        $b1 = new Book;

        $b1->title = "Harry Potter";
        $b1->author = "JK Rowling";
        $b1->pages = 400;
        

        echo "$b1->title <hr>";
    ?>
</div>



</body>
</html>
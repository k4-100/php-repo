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
        class Movie {
            private $title;
            private $rating;

            function __construct( $title, $rating ){
                $this->title    = $title;
                $this->setRating( $rating );
            }


            function getShallowCopy(){
                return $this;
            }

            function getRating(){
                return $this->rating;
            }

            function setRating( $rating ){
                $properRatings = array(
                    "G",
                    "PG",
                    "PG-13",
                    "R",
                    "NR"
                );
                            
                for( $i=0; $i < count( $properRatings ); $i++ ){
                    if( $properRatings[$i] == $rating ){
                        $this->rating = $rating;
                        break;
                    }
                }
            }
        }

        
        $avengers = new Movie("Avengers", "P-13");
            // G, PG, PG-13, R, NR

        $test = $avengers->getShallowCopy();
        // echo $test->rating;

        echo $avengers->setRating("G");
        echo $avengers->setRating("NMMM");


        echo $avengers->getRating();
    ?>
</div>



</body>
</html>
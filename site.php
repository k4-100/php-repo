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
        class Student{

            var $name;
            var $major;
            var $gpa;


            function __construct($name, $major, $gpa ){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }
            
            function hasHonors(){
             return $this->gpa >= 3.5 ? "true" : "false"; 
            }

            
        }    

        $student1 = new Student( "Jim", "Business", 2.8 );
        $student2 = new Student("Pam", "Art", 3.6 );



        echo " $student1->name hasHonors() == ", $student1->hasHonors() , "<br>";;
        echo "$student2->name hasHonors() == ", $student2->hasHonors() , "<br>";
    ?>
</div>



</body>
</html>
<?php

class LineComparisonProgram{

   public function checkingEquality(){
    // checking both lines is equal or not

     $x1 = readline("put value of x1 : ");
     $x2 = readline("put value of x2 : ");
     $y1 = readline("put value of y1 : ");
     $y2 = readline("put value of y2 : ");
     $x3 = readline("put value of x3 : ");
     $y3 = readline("put value of y3 : ");

     $lengthOfline1 = sqrt(($x2-$x1)**2+($y2-$y1)**2);
     $lengthOfline2 = sqrt(($x3-$x2)**2+($y3-$y2)**2);

    if($lengthOfline1 == $lengthOfline2){
        echo "both lines are equal";
    }else{
        echo "Both lines are not a equal ";
    }

   }
} 

$obj = new LineComparisonProgram();
$obj->checkingEquality();




?>

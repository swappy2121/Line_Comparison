<?php
class LineComparisonProgram{
    

    public function assignValueToCoordinates(){

        $x1 = readline("put value of x1 : ");
        $x2 = readline("put value of x2 : ");
        $y1 = readline("put value of y1 : ");
        $y2 = readline("put value of y2 : ");

        $lengthOfline = sqrt(($x2-$x1)**2+($y2-$y1)**2);
         
        echo $lengthOfline;
    }
} 

$obj = new LineComparisonProgram();
$obj->assignValueToCoordinates();




?>
<?php


class LineComparisonProgram{
    public $x1;
    public $x2;
    public $y1;
    public $y2;
    public $x3;
    public $y3;
    public $lengthOfline1;
    public $lengthOfline2;
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
    }elseif($lengthOfline1 > $lengthOfline2){
        echo "line1 is greater that line2";
    }elseif($lengthOfline1 < $lengthOfline2){
        echo "line2 is greater that line1";
    }else{
        "not any line is same ";
    }

   }
} 

$obj = new LineComparisonProgram();
$obj->checkingEquality();


?>
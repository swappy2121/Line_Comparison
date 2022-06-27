<?php

class LineComparison{

    public $x1;
    public $x2;
    public $y1;
    public $y2;
    public $lengthOfLine;
   
    // checking both lines is equal or not
  public function userInput(){
     $this->x1 = readline("put value of x1 : ");
     $this->x2 = readline("put value of x2 : ");
     $this->y1 = readline("put value of y1 : ");
     $this->y2 = readline("put value of y2 : ");
    /* $x3 = readline("put value of x3 : ");
     $y3 = readline("put value of y3 : ");*/
}

public function calLengthOfLine(){
     $this->lengthOfLine = sqrt(($this->x2-$this->x1)**2+($this->y2-$this->y1)**2);
     return $this->lengthOfLine;
}

public function checkEquality($line1,$line2){
    if($line1 == $line2){
        echo "both lines are equal";
    }else{
        echo "Both lines are not a equal ";
    }

   }
} 

$obj = new LineComparison();
$obj->userInput();
$line1 = $obj->calLengthOfLine();
echo "length of line is : $line1 \n";

$obj->userInput();
$line2 = $obj->calLengthOfLine();
echo "length of line is : $line2 \n";

$obj->checkEquality($line1,$line2);




?>

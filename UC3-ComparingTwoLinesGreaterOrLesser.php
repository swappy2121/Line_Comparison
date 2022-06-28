<?php


class LineComparison{
    public $x1;
    public $x2;
    public $y1;
    public $y2;

   public function userInput(){
    // checking both lines is equal or not
     $this->x1 = readline("put value of x1 : ");
     $this->x2 = readline("put value of x2 : ");
     $this->y1 = readline("put value of y1 : ");
     $this->y2 = readline("put value of y2 : ");
     /*$x3 = readline("put value of x3 : ");
     $y3 = readline("put value of y3 : ");*/
   }

   public function LengthOfLine(){
     $this->lengthOfline = sqrt(($this->x2-$this->x1)**2+($this->y2-$this->y1)**2);
     return $this->lengthOfline;
    //  $lengthOfline2 = sqrt(($x3-$x2)**2+($y3-$y2)**2);
   }

   public function checkEquality($line1,$line2){
    if($line1 < $line2){
        echo "line1 is lesser than line2";
    }elseif($line1 > $line2){
        echo "line1 is greater than line2";
    }else{
        "both lines are equal ";
    }

   }
} 

$calculateLength = new LineComparison();
$calculateLength->userInput();
$line1 = $calculateLength->LengthOfLine();
echo "length of line is : $line1 \n";

$calculateLength->userInput();
$line2 = $calculateLength->LengthOfLine();
echo "length of line is : $line2 \n";

$calculateLength->checkEquality($line1,$line2);


?>
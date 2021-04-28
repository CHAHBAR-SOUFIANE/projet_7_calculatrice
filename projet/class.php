<?php 
class Calculatrice{
   private $x; 
   private $operator; 
   private $y; 

    function __construct($x, $operator, $y){
        $this->x = $x;
        $this->operator = $operator ;
        $this->y = $y;
    }

   function compute(){
    $result = null;
    $n1 = floatval($this->x);
    $n2 = floatval($this->y);
    switch ($this->operator) {
        case '+':
            $result = $n1 + $n2;
            break;
        case '*':
            $result = $n1 * $n2;
            break;
        case '-':
            $result = $n1 - $n2;
            break;
        case '÷':
            $result = $n1 / $n2;
            break;
        default:
           return;
    }
    return $result;
 } 
}
?>
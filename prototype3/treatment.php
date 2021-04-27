<?php 
  require "class.php";

  //intializing varibales
$x = null;
$operator = null;
$y = null;
$display = null;
$number = null;
$result = null;
//values of inputes 
if(isset($_POST["x"])) $x = $_POST["x"];
if(isset($_POST["op"])) $operator = $_POST["op"];
if(isset($_POST["y"])) $y = $_POST["y"];

//add number 
if(isset($_POST["nb"])){
    $number = $_POST["nb"];
    if ($x == null) $x = $number;
    elseif($x != null && $operator == null) $x .= $number;
    elseif($operator != null) $y .= $number;
} 

//add operator
if(isset($_POST["op"])){
    if ($x != null && $operator == null) {
        $operator = $_POST["op"];
    }
}

$calculatrice = new Calculatrice($x, $operator, $y);

//equal button 
if(isset($_POST["equal"])){
    $result = $calculatrice->compute();
}

// display
if($result != null) $display = $result;
else{
    if($x != null) $display .= $x;
    if($operator != null) $display .= $operator;
    if($y != null) $display .= $y;
}

//clear 
if(isset($_POST["C"])){
    $x = null;
    $operator = null;
    $y = null;
    $display = "";
    $number = null;
    $result = null; 
}
?>
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
        default:
           return;
    }
    return $result;
}

}
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

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculatrice v3</title>
</head>
<body>
    <form method="POST">
    <table border="1">
        <thead>
        <tbody>
        <tr>
            <td colspan="4"><input type="text" name="text" readonly value="<?php echo $display; ?>"><td>
        </tr>
        <td><input type="submit" name="C" value="C"></td>
        <td><input type="submit" name="nb" value="1"></td>
        <td><input type="submit" name="nb" value="2"></td>
        <td><input type="submit" name="op" value="+"></td>
        <td><input type="submit" name="equal" value="="></td> 
        </tbody>
        <input type="input" hidden name="x" value="<?php echo $x ?>">
        <input type="input" hidden name="op" value="<?php echo $operator ?>">
        <input type="input" hidden name="y" value="<?php echo $y ?>">
        
    </table> 
    </form>
</body>
</html>
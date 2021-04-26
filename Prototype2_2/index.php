<?php 
$x = null;
$y = null;
$afficheur = "";
$operation = null;
$solution = null;

function calculer($operation,$x,$y){
     $x = floatval($x);
     $y = floatval($y);
     $solution = null;
     switch ($operation) {
         case '+':
              $solution = $x + $y;
        
             break;
         
         default:
         return;
            
     }
     return $solution;
}




//recupérer le variable
if(isset($_POST["x"])) $x = $_POST["x"];
if(isset($_POST["op"])) $operation = $_POST["op"];
if(isset($_POST["y"])) $y = $_POST["y"];

//add number
if (isset($_POST["nb"])) {
    if ($x == null && $operation == null) {
        $x = $_POST["nb"];
    }
    elseif ($x != null && $operation == null) {
        $x .= $_POST["nb"]; 
    }
    elseif ($y == null && $operation != null) {
        $y = $_POST["nb"]; 
    }
    elseif ($y != null) {
        $y .= $_POST["nb"];     
}
}

//add aperation
if(isset($_POST["nb"])){
    if ($x != null && $operation == null) {
        $operation = $_POST["op"];
    }
}

//Equal
if (isset($_POST["equal"])) $solution = calculer($operation,$x, $y);

//affichage
if($solution != null) $afficheur = $solution;
else {
    if($x != null) $afficheur .= $x;
if($operation != null) $afficheur .= $operation;
if($y != null) $afficheur .= $y;
}

//clear
if(isset($_POST["C"])) {
    $effa = $_POST["C"];
    $x = null;
    $y = null;
    $afficheur = "";
    $operation = null;
    $solution = null;
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
            <td colspan="4"><input type="text" name="text" readonly value="<?php echo $afficheur ?>"><td>
        </tr>
        <td><input type="submit" name="C" value="C"></td>
        <td><input type="submit" name="nb" value="1"></td>
        <td><input type="submit" name="nb" value="2"></td>
        <td><input type="submit" name="op" value="+"></td>
        <td><input type="submit" name="equal" value="="></td> 
        </tbody>
        <input type="input" hidden name="x"  value="<?php echo $x ?>">
        <input type="input" hidden name="op" value="<?php echo $operation ?>">
        <input type="input" hidden name="y" value="<?php echo $y ?>">
        
    </table> 
    </form>
</body>
</html>
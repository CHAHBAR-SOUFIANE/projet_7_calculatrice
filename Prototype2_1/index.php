<?php 
$num1 = null;
$num2 = null;
$oper = null;
$solu = null;
$aff = "";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    //recuperri le variable
   if (isset($_POST["x"])) $x = $_POST["x"] ;
   if (isset($_POST["y"])) $y = $_POST["y"] ;
   if (isset($_POST["op"])) $oper = $_POST["op"] ;

   //ajouter la valeur de x et y
   if(isset($_POST["nb"])){
    $nbr = $_POST["nb"];
    if($oper == null){
        if ($x == null) {
            $x = $nbr;
         }else{$x = floatval($x.$nbr);}
    } 

    if($oper != null){
        if ($y == null) {
            $y = $nbr;
        }else {
            $y = floatval($y.$nbr);
        }
    }
   }
  
   if (isset($_POST["equal"])) {
       $equal = $_POST["equal"];

       switch ($equal) {
           case '+':
            $solu = $x +$y;
               break;
           
           default:
               return;
               
       }
   }


   //Affichage
   if ($solu == null) {$aff = $solu}
       
   

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
            <td colspan="4"><input type="text" name="text" value="<?php echo $num1 ?>" readonly ></td>
        </tr>
        <td><input type="submit" name="nb" value="1"></td>
        <td><input type="submit" name="nb" value="2"></td>
        <td><input type="submit" name="add" value="+"></td>
        <td><input type="submit" name="equal" value="="></td> 
        </tbody>
        <input type="input" name="x" value="<?php echo $x ?>" >
        <input type="input" name="y" value="<?php echo $y ?>">
        <input type="inpu" name="op" value="<?php echo $oper?>">

<!--             
        <tbody>
            <tr><td colspan="4" class="titre">Calcularice</td></tr>
            </thead>
            <tr>
                
                <td colspan="4"><input type="text" name="text" readonly ></td>
            </tr>
            <tr>
                <td><input type="submit" name="ac" value="AC"></td>
                <td><input type="submit" name="C" value="C" ></td>
                <td colspan="2"><input type="submit" name="delete" value="<--" ></td>
                
            </tr>
            <tr>
                <td><input type="submit" name="add" value="+"></td>
                <td><input type="submit" name="1" value="1"></td>
                <td><input type="submit" name="2" value="2"></td>
                <td><input type="submit" name="3" value="3"></td>
            </tr>
            <tr>
                <td><input type="submit" name="minus" value="-"></td>
                <td><input type="submit" name="4" value="4"></td>
                <td><input type="submit" name="5" value="5"></td>
                <td><input type="submit" name="6" value="6"></td>
            </tr>
            <tr>
                <td><input type="submit" name="multiplication" value="*"></td>
                <td><input type="submit" name="7" value="7"></td>
                <td><input type="submit" name="8" value="8"></td>
                <td><input type="submit" name="9" value="9"></td>
            </tr>
            <tr>
                <td><input type="submit" name="divition" value="/"></td>
                <td><input type="submit" name="," value="."></td>
                <td><input type="submit" name="0" value="0"></td>
                <td><input type="submit" name="equal" value="="></td> 
            </tr>
        </tbody>-->
    </table> 
    </form>
</body>
</html>
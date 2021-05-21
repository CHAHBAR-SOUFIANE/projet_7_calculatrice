<?php 
require "treatment.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice avec PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   
<form method="post">
    <div class="calculator-grid">
        <div class="output">
            <!-- <div data-up="" class="previous-operand"></div> -->
            <div data-down class="current-operand">
             <input type="text" readonly  value="<?php echo $display; ?>">
            </div>
        </div>

        <input type="input" hidden name="x" value="<?php echo $x ?>">
        <input type="input" hidden name="op" value="<?php echo $operator ?>">
        <input type="input" hidden name="y" value="<?php echo $y ?>">

        <button class="span-two" name="C" value="0">AC</button>
        <!-- <button data-delete>DEL</button> -->
        <button name="nb" value="0">0</button>
        <button name="op" value="÷">÷</button>
        <button name="nb" value="1">1</button>
        
        <button name="nb" value="2">2</button>
        <button name="nb" value="3">3</button>
        <button name="op" value="*">*</button>
        <button name="nb" value="4">4</button>
        <button name="nb" value="5">5</button>
        <button name="nb" value="6">6</button>
        <button name="op" value="+">+</button>
        <button name="nb" value="7">7</button>
        <button name="nb" value="8">8</button>
        <button name="nb" value="9">9</button>
        <button name="op" value="-">-</button>
        <!-- <button data-number>.</button> -->
        
        <button name="equal" class="span-foor equal">=</button>
    </div>
       
</form>

</body>
</html>
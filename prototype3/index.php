<?php 
 require "treatment.php";
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
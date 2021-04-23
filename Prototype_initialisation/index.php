<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
   if (isset($_POST)) {
       foreach ($_POST as $key => $value) {
          if (is_numeric($key)) {
              echo $key;
          }
       }
   }

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
            <td colspan="4"><input type="text" name="text" readonly ></td>
        </tr>
        <td><input type="submit" name="1" value="1"></td>
        <td><input type="submit" name="2" value="2"></td>
        <td><input type="submit" name="add" value="+"></td>
        <td><input type="submit" name="equal" value="="></td> 
        </tbody>

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
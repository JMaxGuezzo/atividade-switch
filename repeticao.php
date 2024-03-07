<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <label for="valor1">valor: </label>
    <input type="text" name="valor1" id="">
    <br>
    <button type="submit">Enviar</button>
</form>
<br>
<?php
 if($_POST){
    $valor1 = $_POST['valor1'];

    switch ($valor1){
        case 1:
            echo "você esta na tabuada do: " . $valor1 ;
            echo "<br>";
            for($i = 1; $i <= 10; $i = $i + 1){
                echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                echo '<br>'; 
            }
            break;
        case 2:
            echo "você esta na tabuada do: " . $valor1 ;
            echo "<br>";
            for($i = 1; $i <= 10; $i = $i + 1){
                echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                echo '<br>'; 
            }
            break;
        case 3:
            echo "você esta na tabuada do: " . $valor1 ;
            echo "<br>";
            for($i = 1; $i <= 10; $i = $i + 1){
                echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                echo '<br>'; 
            }
            break;
        case 4:
            echo "você esta na tabuada do: " . $valor1 ;
            echo "<br>";
            for($i = 1; $i <= 10; $i = $i + 1){
                echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                echo '<br>'; 
            }
            break;
        case 5:
            echo "você esta na tabuada do: " . $valor1 ;
            echo "<br>";
            for($i = 1; $i <= 10; $i = $i + 1){
                echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                echo '<br>'; 
            }
            break;
        case 6:
            echo "você esta na tabuada do: " . $valor1 ;
            echo "<br>";
            for($i = 1; $i <= 10; $i = $i + 1){
                echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                echo '<br>'; 
            }
            break;
        case 7:
            echo "você esta na tabuada do: " . $valor1 ;
            echo "<br>";
            for($i = 1; $i <= 10; $i = $i + 1){
                echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                echo '<br>'; 
            }
            break;
        case 8:
            echo "você esta na tabuada do: " . $valor1 ;
            echo "<br>";
            for($i = 1; $i <= 10; $i = $i + 1){
                echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                echo '<br>'; 
            }
            break;
        case 9:

            
            echo "você esta na tabuada do: " . $valor1 ;
            echo "<br>";
            for($i = 1; $i <= 10; $i = $i + 1){
                echo $valor1 . " X " . $i . " = " . $valor1 * $i;
                echo '<br>'; 
            }
            break;
        default:
            echo "Somente Tabuada do 1 ao 9";
            break;
    }
 }
?>
</body>
</html>

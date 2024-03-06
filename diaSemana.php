<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label for="dia">Dia da semana: </label>
    <input type="text" name="dia" id="">
    <br>
    <button type="submit">Enviar</button>
</form>
<br>
<?php
 if($_POST){
    $dia = $_POST['dia'];

    switch ($dia){
        case 1:
            echo "Dia da Semana é: Segunda-Feira" ;
            break;
        case 2:
            echo "Dia da Semana é: Terça-Feira" ;
            break;
        case 3:
            echo "Dia da Semana é: Quarta-Feira" ;
            break;
        case 4:
            echo "Dia da Semana é: Quinta-Feira" ;
            break;
        case 5:
            echo "Dia da Semana é: Sexta-Feira" ;
            break;
        case 6:
            echo "Dia da Semana é: Sábado" ;
            break;
        case 7:
            echo "Dia da Semana é: Domingo" ;
            break;
        default:
            echo "Nenhum dia da semana encontrado!";
            break;
    }
 }
?>

    
</body>
</html>

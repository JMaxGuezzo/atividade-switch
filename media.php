<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post">
    <label for="nota1">Nota1: </label>
    <input type="text" name="nota1" id="">
    <br>
    <label for="nota2">Nota2: </label>
    <input type="text" name="nota2" id="">
    <br>
    <label for="nota3">Nota3: </label>
    <input type="text" name="nota3" id="">
    <br>
    <button type="submit">Enviar</button>
</form>
<br>
<?php
 if($_POST){
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 + $nota2 + $nota3) / 3;

    switch ($media){
        case $media == 100:
            echo "Aprovado com prestigio com a nota: " . $media ;
            break;
        case $media >= 70:
            echo "Aprovado com a nota: " . $media;
            break;
        case $media < 70:
            echo "Reprovado com a nota: " . $media ;
            break;
        default:
            echo "Media Digitada Errada! verifique";
            break;
    }
 }
?>

    
</body>
</html>

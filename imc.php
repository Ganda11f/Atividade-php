<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <?php
$peso = $_GET["peso"];
$alt = $_GET["alt"];
$alt= str_replace(",",".",$alt);
$imc = $peso /($alt*2); 
    if ($imc < 17){ echo $imc . "<br>"."Muito abaixo do peso";}
    else
    if ($imc >= 17 && $imc <= 18.49){ echo $imc ."<br>"."Abaixo do peso";}
    else
    if ($imc >= 18.5 && $imc <= 24.99){ echo $imc ."<br>"."Peso normal";}
    else
    if ($imc >= 25 && $imc <= 29.99){ echo $imc ."<br>"."Acima do peso";}
    else
    if ($imc >= 30 && $imc <= 34.99){ echo $imc ."<br>"."Obesidade I";}
    else
    if ($imc >= 35 && $imc <= 39.99){ echo $imc ."<br>"."Obesidade II";}
    else
    if ($imc >= 40){ echo $imc ."<br>"."Obesidade III";}
    ?>
</body>
</html>

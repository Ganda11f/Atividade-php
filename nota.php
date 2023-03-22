<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculo</title>
</head>
<body>
    <?php 
    $nome = $_GET["nome"];
    $nota1 = $_GET["nota1"];
    $nota2 = $_GET["nota2"];
   $media = ($nota1 + $nota2) /2;

   if($media >=6){echo "A situação do aluno " .$nome." é aprovado.";} else
   if($media >= 4 && $media < 6){echo "A situação do aluno " .$nome. " é exame final.";} else
   if($media < 4){echo "A situação do aluno " .$nome. " é reprovado.";}    
    ?>
</body>
</html>
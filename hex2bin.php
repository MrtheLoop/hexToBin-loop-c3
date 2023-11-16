<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <?php
    
    $hex = $_GET['valor'];
    $tamanho = strlen($hex);

    if ($tamanho > 1) {
        echo "Por favor, digite um unico digito em formato hexadecimal.";
    } else {
        $bin = base_convert($hex, 16, 2);

        echo "O valor digitado foi $hex e o valor em binário é $bin.";
    }
    
    
    ?>
</body>
</html>
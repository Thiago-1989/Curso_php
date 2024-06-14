<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Variáveis em PHP</title>
    <link rel="stylesheet" href="../_css/estilo.css">
</head>
<body>
<div>
    <?php
        $num = 4; //usando type cast temos: $num = (int)4;
        $nome = "Thiago";
        $idade = 35;
        echo $nome . " tem " . $idade . " anos<br/>";
        echo "$nome tem $idade anos<br/>";
        echo '$nome tem $idade anos<br/>';

    ?>
</div>
</body>
</html>

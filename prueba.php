<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PAULA.2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
    <?php
        <?php
        $resultado = 0;
        $tipo = gettype($resultado);
        echo "Resultado vale: $resultado y es de tipo $tipo<br>";
        $resultado2 = (double)$resultado;
        $tipo = gettype($resultado2);
        echo "y Resultado 2 vale: $resultado2 y es de tipo $tipo<br>";
        $tipo = gettype($resultado);
        echo "mientras Resultado vale: $resultado y es de tipo $tipo<br>";
        ?>
        
    ?>
    
</body>
</html>
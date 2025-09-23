<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .footer {
            background-color: lightblue;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 3em;
            text-align: center;
            padding: 1em;
        }
        .tabla {
            position: relative;
            padding: 3px;
        }
        td {
            border: 2px solid black;
            padding: 8px;
            font-size: 20px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    echo "<table class=tabla>";
    $n = 10;
    $l = 64;
    // Posicion de los barcos, tamaño y la orientación que llevan
    $barcos = [
        ["fila" => "C", "col" => 3, "size" => 4, "orientacion" => "horizontal"],
        ["fila" => "D", "col" => 2, "size" => 2, "orientacion" => "vertical"],
    ];

    $ocupadas = []; // Array vació para guardar la posición de los barcos puestos en la tabla
    foreach ($barcos as $barco) {
        $filaAscii = ord($barco["fila"]); // Pasamos de Letra a numero
        $col = $barco["col"];
        $size = $barco["size"];

        // Bucle para guardar las posiciones de los barcos en la tabla
        for ($i = 0; $i < $size; $i++) {
            if ($barco["orientacion"] == "horizontal") {
                $ocupadas[] = [chr($filaAscii), $col + $i];
            } else {
                $ocupadas[] = [chr($filaAscii + $i), $col];
            }
        }
    }

    for ($i = 0; $i <= $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= $n; $j++) {
            $letra = chr($l + $i);
            if ($i == 0 && $j == 0) {
                echo "<td></td>";
            } else if ($i == 0) {
                echo "<td>$j</td>";
            } else if ($j == 0) {
                echo "<td>$letra</td>";
            } else {
                $estaOcupada = false;
                foreach ($ocupadas as $ocupada) {
                    // Condicional para saber si esta ocupada la posición o no
                    if ($ocupada[0] == $letra && $ocupada[1] == $j) {
                        $estaOcupada = true;
                        break;
                    }
                }

                // Colorear la posición si no esta ocupada
                if ($estaOcupada) {
                    echo "<td style='background-color: gray;'></td>";
                } else {
                    echo "<td></td>";
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>

<div class="footer">Footer</div>
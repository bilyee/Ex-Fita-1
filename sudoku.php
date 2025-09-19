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
            border-collapse: collapse;
            border: 5px solid black;
        }
        td {
            border: 2px solid black;
            margin: 0px;
            padding: 8px;
            font-size: 20px;
            width: 15px;
            height: 15px;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php
    $fila = 9;
    $columna = 9;
    echo "<table class=tabla>";
    for ($i = 0; $i < $fila; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $columna; $j++) {
            $style = "";
            if ($i % 3 == 0) {
                $style = "border-top: 5px solid black;";
            } elseif ($i == 8) {
                $style = "border-bottom: 5px solid black;";
            }

            if ($j % 3 == 0) {
                $style = "border-left: 5px solid black;";
            } elseif ($j == 9) {
                $style = "border-right: 5px solid black;";
            }
            echo "<td style='$style'></td>";
        }
        echo "</tr>";
    }
    echo "</table>";
?>
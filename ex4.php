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
    for ($i = 0; $i <= $n; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= $n; $j++) {
            $letra = chr($l + $i);
            if ($i == 0 && $j == 0) {
                echo "<td></td>";
            } elseif ($i == 0) {
                echo "<td>$j</td>";
            } else if ($j == 0) {
                echo "<td>$letra</td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    echo "</table>";
?>

<div class="footer">Footer</div>
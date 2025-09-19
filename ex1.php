<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina PHP</title>
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
<h1>hola</h1>

<?php
    echo "<table class='tabla'>";
    $n = 10;
    for ($i = 0; $i <= 10; $i++) {
        echo "<td>$i</td>";
    }
    echo "</table>";
?>
<div class="footer">Footer</div>
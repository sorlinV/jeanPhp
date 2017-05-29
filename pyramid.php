<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    $tabs = [];
    $size = rand(1, 32);
    for ($i = 0; $i < $size; $i++) {
        $tabs[$i] = [];
    }
    $cup = 0;
    $size_cup = 5;
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < ($size * 2 + 1); $j++) {
            if ($j < $size - ($i + ($cup % $size_cup)) / 2 || $j > $size + ($i + ($cup % $size_cup)) / 2) {
                $tabs[$i][$j] = " ";
            } else {
                if (rand(1, 50) < 48) {
                    $tabs[$i][$j] = "*";
                } else {
                    $tabs[$i][$j] = "0";
                }
            }
        }
        $cup++;
    }
    echo "<pre>";
    for ($i = 0; $i < $size; $i++) {
        for ($j = 0; $j < $size * 2 + 1; $j++) {
            echo $tabs[$i][$j];
        }
        echo "\n";
    }
    for ($i = 0; $i < $size / 4; $i++) {
        for ($j = 0; $j < $size * 2 + 1; $j++) {
            if ($j < $size - $size / 8 || $j > $size + $size / 8) {
                echo " ";
            } else {
                echo "|";
            }
        }
        echo "\n";
    }
    echo "</pre>";
?>    
</body>
</html>

<?php

// Pengulangan pada array => foreach
$angka = [3, 2, 15, 20, 11, 77, 89, 23, 22, 28];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: slateblue;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($i = 0; $i < count($angka); $i++) : ?>
        <div class="kotak"><?= $angka[$i] ?></div>
    <?php endfor; ?>

    <div class="clear"></div>
    <?php foreach ($angka as $a) : ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>
</body>

</html>
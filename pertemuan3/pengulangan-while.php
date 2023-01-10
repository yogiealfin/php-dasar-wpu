<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengulangan While</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        $i = 1;
        while ($i <= 3) : ?>
            <tr>
                <?php
                $j = 1;
                while ($j <= 5) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php $j++;
                endwhile ?>
            </tr>
        <?php $i++;
        endwhile ?>
    </table>
</body>

</html>
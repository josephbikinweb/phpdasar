<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <style>
        .warnaBaris {
            background-color: silver
        }
    </style>
</head>

<body>

    <!-- TEMPLATE for -->
    <!-- Kalau bersarang (nested) maka sebaiknya {} diganti : dan diakhiri pakai endfor -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
        for ($i = 1; $i <= 5; $i++) {
        ?>
            <?php
            if ($i % 2 == 1) : ?>

                <tr class="warnaBaris">
                <?php else : ?>
                <tr>
                <?php endif ?>
                <?php

                for ($j = 1; $j <= 5; $j++) :
                ?>
                    <td><?php echo "$i, $j"; ?></td>
                <?php endfor; ?>
                </tr>
            <?php } ?>


    </table>

</body>

</html>
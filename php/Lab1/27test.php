            <!DOCTYPE html>
            <html>
            <head>
                <meta charset="utf-8">
                <title>Пример таблицы</title>
                <style>
                        table, td {
                        border: 1px solid black;
                    }
                    table {
                        border-collapse: collapse;
                    }
                    td {
                        padding: 5px;
                    }
                </style>
            </head>
            <?php
            $a = 3;
            $b = '3';
            $d = '3a';

            ?>

            <table>
                <tr><td>Выпажение</td><td>Рузултать</td></tr>
                <tr><td><?php echo"$a <=$b";?></td><td><?php var_dump( $a <= $b); ?></td></tr>
                <tr><td><?php echo"$a >=$b";?></td><td><?php var_dump( $a >= $b); ?></td></tr>
                <tr><td><?php echo"$a ==$b";?></td><td><?php var_dump( $a <= $b); ?></td></tr>
                <tr><td><?php echo"$a <=$d";?></td><td><?php var_dump( $a <= $d); ?></td></tr>
                <tr><td><?php echo"$a !=$d";?></td><td><?php var_dump( $a != $d); ?></td></tr>
            </table>
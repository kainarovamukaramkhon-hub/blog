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
            $a = 2; //integer
            $b = 2.0;//float
            $c = '2';//string
            $d = 'two';//string
            $g = true;//boolean
            $f = false; //boolean

            $a_int = (int)$a; 
            $b_int = (int)$b;
            $c_int = (int)$c;
            $d_int = (int)$d;
            $g_int = (int)$g;
            $f_int = (int)$f;
            // $a_int = (float)$a; 



            ?>

            <table>
                <tr><td>Выпажение</td><td>Рузултать</td></tr>
                <tr><td><?php echo gettype($a);?></td><td><?php var_dump( $a_int); ?></td></tr>
                <tr><td><?php echo gettype($b);?></td><td><?php var_dump( $b_int); ?></td></tr>
                <tr><td><?php echo gettype($c);?></td><td><?php var_dump( $c_int); ?></td></tr>
                <tr><td><?php echo gettype($d);?></td><td><?php var_dump( $d_int); ?></td></tr>
                <tr><td><?php echo gettype($g);?></td><td><?php var_dump( $g_int); ?></td></tr>
                <tr><td><?php echo gettype($f);?></td><td><?php var_dump( $f_int); ?></td></tr>
            </table>
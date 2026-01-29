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
            $a = 2;
             $b = 2.0;
             $c = '2';
             $d = 'two';
             $g = true;
             $f = false;

             $a_flo = (float)$a; 
            $b_flo = (float)$b;
            $c_flo = (float)$c;
            $d_flo = (float)$d;
            $g_flo = (float)$g;
            $f_flo = (float)$f;
            // $a_int = (float)$a;  

              ?>

            <table>
                <tr><td>Выпажение</td><td>Рузултать</td></tr>
                <tr><td><?php echo gettype($a);?></td><td><?php var_dump( $a_flo); ?></td></tr>
                <tr><td><?php echo gettype($b);?></td><td><?php var_dump( $b_flo); ?></td></tr>
                <tr><td><?php echo gettype($c);?></td><td><?php var_dump( $c_flo); ?></td></tr>
                <tr><td><?php echo gettype($d);?></td><td><?php var_dump( $d_flo); ?></td></tr>
                <tr><td><?php echo gettype($g);?></td><td><?php var_dump( $g_flo); ?></td></tr>
                <tr><td><?php echo gettype($f);?></td><td><?php var_dump( $f_flo); ?></td></tr>
            </table>
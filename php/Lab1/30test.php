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

             $a_str = (string)$a; 
            $b_str = (string)$b;
            $c_str = (string)$c;
            $d_str = (string)$d;
            $g_str = (string)$g;
            $f_str = (string)$f;
            // $a_int = (float)$a;  

              ?>

            <table>
                <tr><td>Выпажение</td><td>Рузултать</td></tr>
                <tr><td><?php echo gettype($a);?></td><td><?php var_dump( $a_str); ?></td></tr>
                <tr><td><?php echo gettype($b);?></td><td><?php var_dump( $b_str); ?></td></tr>
                <tr><td><?php echo gettype($c);?></td><td><?php var_dump( $c_str); ?></td></tr>
                <tr><td><?php echo gettype($d);?></td><td><?php var_dump( $d_str); ?></td></tr>
                <tr><td><?php echo gettype($g);?></td><td><?php var_dump( $g_str); ?></td></tr>
                <tr><td><?php echo gettype($f);?></td><td><?php var_dump( $f_str); ?></td></tr>
            </table>




<?php
   $files = ['1.txt', '2.txt', '3.txt'];
   foreach ($files as $file) {
   if (file_exists($file)) {
        if (unlink($file)) {
            echo "Файл $file успешно удален.<br>";
        } else{
            echo "Ошибка при удалении файла $file.<br>";
        }
        } else {
        echo "Файл $file не найден.<br>";
    }
}
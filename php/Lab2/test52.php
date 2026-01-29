<?php
// Функция cut с необязательным вторым параметром
function cut($string, $length = 10) {
    // Возвращаем первые $length символов строки
    return substr($string, 0, $length);
}

// Тестирование функции
echo cut("Hello World!", 5) . "\n";        // Hello
echo cut("Hello World!") . "\n";           // Hello Worl (10 символов по умолчанию)
echo cut("Hello World!", 20) . "\n";       // Hello World! (весь текст)
echo cut("", 5) . "\n";                    // (пустая строка)
?>
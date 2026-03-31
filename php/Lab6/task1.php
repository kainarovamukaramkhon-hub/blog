<?php
// Запускаем сессию (обязательно в самом начале, до любого вывода)
session_start();

// Проверяем, была ли уже установлена сессия
if (!isset($_SESSION['text'])) {
    // При первом заходе записываем текст 'test' в сессию
    $_SESSION['text'] = 'test';
    $message = 'Сессия создана! Запишите значение: ' . $_SESSION['text'];
} else {
    // При обновлении страницы выводим содержимое сессии
    $message = 'Содержимое сессии: ' . $_SESSION['text'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Работа с сессиями</title>
    <meta charset="UTF-8">
</head>
<body>
    <h1>Работа с сессиями</h1>
    <p><?php echo $message; ?></p>
    <p>ID сессии: <?php echo session_id(); ?></p>
    
    <form method="post">
        <button type="submit" name="refresh">Обновить страницу</button>
        <?php if (isset($_SESSION['text'])): ?>
            <button type="submit" name="clear">Очистить сессию</button>
        <?php endif; ?>
    </form>
    
    <?php
    // Обработка кнопки очистки
    if (isset($_POST['clear'])) {
        session_destroy();
        echo "<p style='color: red;'>Сессия уничтожена! Обновите страницу для создания новой.</p>";
        // Перенаправляем для обновления страницы
        header("Refresh:0");
    }
    ?>
</body>
</html>
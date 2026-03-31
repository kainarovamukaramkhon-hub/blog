<?php
session_start();

// Проверяем, установлено ли время первого визита
if (!isset($_SESSION['start_time'])) {
    // Первый визит - записываем текущее время
    $_SESSION['start_time'] = time();
    $message = "Добро пожаловать! Это ваш первый визит на сайт.";
    $seconds_ago = 0;
} else {
    // Вычисляем, сколько секунд прошло
    $seconds_ago = time() - $_SESSION['start_time'];
    $message = "Вы зашли на сайт " . $seconds_ago . " секунд назад";
}

// Форматируем время для отображения
$formatted_time = date('Y-m-d H:i:s', $_SESSION['start_time']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Счетчик времени с первого визита</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .info {
            background: #f0f0f0;
            padding: 20px;
            margin: 20px auto;
            width: 500px;
            border-radius: 10px;
        }
        .seconds {
            font-size: 48px;
            color: #4CAF50;
            font-weight: bold;
        }
        button {
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Время с первого визита</h1>
    
    <div class="info">
        <p><?php echo $message; ?></p>
        <p>Время первого визита: <strong><?php echo $formatted_time; ?></strong></p>
        <p>Текущее время: <strong><?php echo date('Y-m-d H:i:s'); ?></strong></p>
        <div class="seconds">
            <?php echo $seconds_ago; ?> сек.
        </div>
    </div>
    
    <button onclick="location.reload()">Обновить страницу (F5)</button>
    <button onclick="location.href='?reset=1'">Сбросить счетчик</button>
    
    <?php
    // Сброс счетчика
    if (isset($_GET['reset'])) {
        session_destroy();
        echo "<script>setTimeout(function(){ window.location.href = window.location.pathname; }, 1000);</script>";
        echo "<p style='color: green;'>Счетчик сброшен! Страница обновится...</p>";
    }
    ?>
</body>
</html>
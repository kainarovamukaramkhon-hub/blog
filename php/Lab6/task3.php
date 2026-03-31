<?php
// counter_simple.php
session_start();

// Проверяем, существует ли счетчик в сессии
if (!isset($_SESSION['refresh_count'])) {
    // Первый заход
    $_SESSION['refresh_count'] = 0;
    $message = "Вы еще не обновляли страницу";
} else {
    // Обновление страницы
    $_SESSION['refresh_count']++;
    $message = "Вы обновили страницу " . $_SESSION['refresh_count'] . " раз(а)";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Счетчик обновлений страницы</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            text-align: center;
        }
        .counter {
            font-size: 48px;
            color: #4CAF50;
            margin: 20px;
        }
        .message {
            font-size: 24px;
            margin: 20px;
            padding: 20px;
            background: #f0f0f0;
            border-radius: 10px;
        }
        button {
            font-size: 18px;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h1>Счетчик обновлений страницы</h1>
    
    <div class="counter">
        <?php echo $_SESSION['refresh_count']; ?>
    </div>
    
    <div class="message">
        <?php echo $message; ?>
    </div>
    
    <button onclick="location.reload()">Обновить страницу (F5)</button>
    <button onclick="location.href='?reset=1'">Сбросить счетчик</button>
    
    <?php
    // Сброс счетчика
    if (isset($_GET['reset'])) {
        $_SESSION['refresh_count'] = 0;
        echo "<p style='color: green;'>Счетчик сброшен! Обновите страницу.</p>";
        // Обновляем страницу, чтобы показать сброшенное значение
        header("Refresh:1; url=" . strtok($_SERVER["REQUEST_URI"], '?'));
    }
    ?>
    
    <p>
        <small>ID сессии: <?php echo session_id(); ?></small>
    </p>
</body>
</html>
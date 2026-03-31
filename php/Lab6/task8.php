<?php
// Удаляем куку 'test'
setcookie('test', '', time() - 3600, '/');

// Проверяем, была ли кука удалена
$message = "Кука 'test' удалена!";
$cookie_exists = isset($_COOKIE['test']);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Удаление куки</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .success {
            background: #d4edda;
            color: #155724;
            padding: 20px;
            margin: 20px auto;
            width: 500px;
            border-radius: 10px;
            border-left: 4px solid #28a745;
        }
        .info {
            background: #f0f0f0;
            padding: 20px;
            margin: 20px auto;
            width: 500px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <h1>🍪 Удаление куки</h1>
    
    <div class="success">
        ✅ <?php echo $message; ?>
    </div>
    
    <div class="info">
        <p><strong>Статус куки 'test':</strong></p>
        <?php if ($cookie_exists): ?>
            <p style="color: orange;">Кука все еще существует в текущем запросе (будет удалена после обновления)</p>
            <p>Значение: <?php echo htmlspecialchars($_COOKIE['test']); ?></p>
        <?php else: ?>
            <p style="color: green;">Кука 'test' не найдена в текущей сессии</p>
        <?php endif; ?>
    </div>
    
    <p>
        <a href="?check=1">Проверить куки</a> |
        <a href="?set=1">Установить куку заново</a>
    </p>
    
    <?php
    // Проверка всех кук
    if (isset($_GET['check'])) {
        echo "<div class='info'>";
        echo "<h3>Все установленные куки:</h3>";
        if (count($_COOKIE) > 0) {
            echo "<ul>";
            foreach ($_COOKIE as $name => $value) {
                echo "<li><strong>$name</strong>: " . htmlspecialchars($value) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Нет установленных кук</p>";
        }
        echo "</div>";
    }
    
    // Установка куки заново (для тестирования)
    if (isset($_GET['set'])) {
        setcookie('test', '123', time() + 3600, '/');
        echo "<script>setTimeout(function(){ window.location.href = window.location.pathname; }, 1000);</script>";
        echo "<p style='color: green;'>Кука установлена! Страница обновится...</p>";
    }
    ?>
</body>
</html>
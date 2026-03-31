<?php
// Запускаем сессию (обязательно в самом начале)
session_start();

// Записываем данные в сессию
$_SESSION['username'] = 'JohnDoe';
$_SESSION['email'] = 'john@example.com';
$_SESSION['visit_time'] = date('Y-m-d H:i:s');

// Можно также записать массив
$_SESSION['user_data'] = [
    'name' => 'John',
    'age' => 25,
    'city' => 'Moscow'
];

$message = "Данные успешно записаны в сессию!";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Страница 1 - Запись в сессию</title>
    <meta charset="UTF-8">
    <style>
        body { font-family: Arial; margin: 20px; }
        .success { background: #d4edda; padding: 10px; margin: 10px 0; }
        .data { background: #e0f0e0; padding: 10px; }
    </style>
</head>
<body>
    <h1>Страница 1: Запись данных в сессию</h1>
    
    <div class="success">
        <strong><?php echo $message; ?></strong>
    </div>
    
    <div class="data">
        <h3>Записанные данные:</h3>
        <pre><?php print_r($_SESSION); ?></pre>
    </div>
    
    <p>
        <a href="page2.php">Перейти на страницу 2 →</a>
    </p>
    
    <p>
        <small>ID сессии: <?php echo session_id(); ?></small>
    </p>
</body>
</html>
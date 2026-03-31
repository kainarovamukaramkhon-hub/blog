<?php
// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['birthday'])) {
    setcookie('user_birthday', $_POST['birthday'], time() + 365 * 24 * 60 * 60, '/');
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Сброс
if (isset($_GET['reset'])) {
    setcookie('user_birthday', '', time() - 3600, '/');
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}

$birthday = $_COOKIE['user_birthday'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>День рождения</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }
        .container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
        .birthday-card {
            background: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            margin: 20px 0;
        }
        .days {
            font-size: 60px;
            color: #4CAF50;
            font-weight: bold;
        }
        .celebrate {
            background: linear-gradient(135deg, #ffd89b, #19547b);
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
        input, button {
            padding: 10px;
            font-size: 16px;
            margin: 10px;
        }
        button {
            background: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .reset {
            background: #f44336;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎂 День рождения</h1>
        
        <?php if (!$birthday): ?>
            <form method="POST">
                <label>Ваша дата рождения:</label><br>
                <input type="date" name="birthday" required><br>
                <button type="submit">Сохранить</button>
            </form>
            
        <?php else:
            $birth_date = new DateTime($birthday);
            $today = new DateTime();
            $is_birthday = $birth_date->format('m-d') === $today->format('m-d');
            
            if ($is_birthday): ?>
                <div class="celebrate">
                    <h2>🎉 С ДНЕМ РОЖДЕНИЯ! 🎉</h2>
                    <p>🥳 Поздравляем! 🥳</p>
                </div>
            <?php else:
                $next_birthday = new DateTime($today->format('Y') . '-' . $birth_date->format('m-d'));
                if ($next_birthday < $today) {
                    $next_birthday->modify('+1 year');
                }
                $days = $today->diff($next_birthday)->days;
                ?>
                <div class="birthday-card">
                    <div class="days"><?php echo $days; ?></div>
                    <p>дней до вашего дня рождения!</p>
                    <p>Дата рождения: <?php echo $birth_date->format('d.m.Y'); ?></p>
                </div>
            <?php endif; ?>
            
            <a href="?reset=1"><button class="reset">Сбросить дату</button></a>
        <?php endif; ?>
    </div>
</body>
</html>
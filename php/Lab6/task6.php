<?php
session_start();

// Шаг 1: Обработка email
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['step'])) {
    if ($_POST['step'] == 'email') {
        $_SESSION['user_email'] = trim($_POST['email']);
        $step = 'registration';
    } elseif ($_POST['step'] == 'registration') {
        // Сохраняем данные регистрации
        $_SESSION['registration_data'] = [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'email' => $_POST['email'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
        ];
        $step = 'success';
    }
} else {
    $step = isset($_SESSION['user_email']) ? 'registration' : 'email';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Многошаговая регистрация</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }
        
        .container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            padding: 40px;
            max-width: 500px;
            width: 100%;
        }
        
        h1 { color: #333; margin-bottom: 10px; }
        .subtitle { color: #666; margin-bottom: 30px; }
        .form-group { margin-bottom: 20px; }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        
        input {
            width: 100%;
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
        }
        
        input:focus {
            outline: none;
            border-color: #667eea;
        }
        
        input[readonly] {
            background-color: #f5f5f5;
        }
        
        button {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            padding: 12px 24px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
        }
        
        .info {
            background: #e7f3ff;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .success-icon { font-size: 64px; text-align: center; margin-bottom: 20px; }
        .text-center { text-align: center; }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($step == 'email'): ?>
            <!-- Шаг 1: Запрос email -->
            <h1>📧 Шаг 1 из 2</h1>
            <div class="subtitle">Введите ваш email</div>
            
            <form method="POST">
                <input type="hidden" name="step" value="email">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" required placeholder="example@mail.com">
                </div>
                <button type="submit">Продолжить →</button>
            </form>
            
        <?php elseif ($step == 'registration'): ?>
            <!-- Шаг 2: Форма регистрации с автозаполнением email -->
            <h1>📝 Шаг 2 из 2</h1>
            <div class="subtitle">Заполните остальные данные</div>
            
            <div class="info">
                ✅ Email автоматически заполнен: <strong><?php echo htmlspecialchars($_SESSION['user_email']); ?></strong>
            </div>
            
            <form method="POST">
                <input type="hidden" name="step" value="registration">
                <div class="form-group">
                    <label for="first_name">Имя:</label>
                    <input type="text" name="first_name" required placeholder="Введите имя">
                </div>
                <div class="form-group">
                    <label for="last_name">Фамилия:</label>
                    <input type="text" name="last_name" required placeholder="Введите фамилию">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($_SESSION['user_email']); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="password">Пароль:</label>
                    <input type="password" name="password" required placeholder="Придумайте пароль">
                </div>
                <button type="submit">Завершить регистрацию ✓</button>
            </form>
            
        <?php elseif ($step == 'success'): ?>
            <!-- Страница успеха -->
            <div class="success-icon">✅</div>
            <h1 class="text-center">Регистрация успешна!</h1>
            
            <?php $data = $_SESSION['registration_data']; ?>
            <div class="info">
                <p><strong>Имя:</strong> <?php echo htmlspecialchars($data['first_name']); ?></p>
                <p><strong>Фамилия:</strong> <?php echo htmlspecialchars($data['last_name']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($data['email']); ?></p>
            </div>
            
            <button onclick="window.location.href=''">Новая регистрация</button>
            <?php 
            // Очищаем сессию для новой регистрации
            session_destroy();
            ?>
        <?php endif; ?>
    </div>
</body>
</html>
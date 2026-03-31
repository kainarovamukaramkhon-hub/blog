<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['country'])) {
    $_SESSION['user_country'] = $_POST['country'];
}
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Введите вашу страну</h1>
    
    <form method="POST">
        <input type="text" name="country" placeholder="Введите страну" 
               value="<?php echo $_SESSION['user_country'] ?? ''; ?>" required>
        <button type="submit">Сохранить</button>
    </form>
    
    <?php if (isset($_SESSION['user_country'])): ?>
        <p>Сохранено: <?php echo $_SESSION['user_country']; ?></p>
        <p><a href="test_simple.php">Перейти на test.php →</a></p>
    <?php endif; ?>
</body>
</html>




<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
    <h1>Информация о пользователе</h1>
    
    <?php if (isset($_SESSION['user_country'])): ?>
        <p>Ваша страна: <strong><?php echo $_SESSION['user_country']; ?></strong></p>
    <?php else: ?>
        <p>Страна не указана. <a href="index_simple.php">Вернуться на index.php</a></p>
    <?php endif; ?>
    
    <p><a href="index_simple.php">← Назад</a></p>
</body>
</html>
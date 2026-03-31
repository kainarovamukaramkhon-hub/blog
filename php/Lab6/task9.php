<?php
// Счетчик посещений
$count = isset($_COOKIE['visit_count']) ? $_COOKIE['visit_count'] + 1 : 1;
setcookie('visit_count', $count, time() + 365 * 24 * 60 * 60, '/');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Счетчик посещений</title>
    <style>
        body { font-family: Arial; text-align: center; margin-top: 100px; }
        .count { font-size: 60px; color: #4CAF50; margin: 20px; }
    </style>
</head>
<body>
    <h1>Счетчик посещений</h1>
    <div class="count"><?php echo $count; ?></div>
    <p>Вы посетили наш сайт <?php echo $count; ?> раз(а)!</p>
    <a href="?reset=1">Сбросить счетчик</a>
</body>
</html>

<?php
if (isset($_GET['reset'])) {
    setcookie('visit_count', '', time() - 3600, '/');
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}
?>
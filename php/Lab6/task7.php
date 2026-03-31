<?php
// Устанавливаем куку при первом заходе
if (!isset($_COOKIE['test'])) {
    setcookie('test', '123', time() + 3600, '/');
    echo "<h2>Кука установлена!</h2>";
    echo "<p>Обновите страницу, чтобы увидеть значение куки.</p>";
} else {
    // При обновлении выводим значение куки
    echo "<h2>Значение куки 'test':</h2>";
    echo "<h1 style='color: green;'>" . htmlspecialchars($_COOKIE['test']) . "</h1>";
}
?>

<a href="?refresh=1">Обновить страницу</a>
<a href="?delete=1">Удалить куку</a>

<?php
if (isset($_GET['delete'])) {
    setcookie('test', '', time() - 3600, '/');
    header("Location: " . strtok($_SERVER["REQUEST_URI"], '?'));
    exit();
}
?>
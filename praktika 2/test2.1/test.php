<?php
// router.php или index.php

// Получаем URI из запроса
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Убираем GET параметры, если они есть
$uri = parse_url($requestUri, PHP_URL_PATH);

// Простой роутинг
if ($uri === '/') {
    // Главная страница
    $controller = new IndexController();
    $controller->sayHello('Гость');
} 
// НОВЫЙ РОУТ для /bye/$name
elseif (preg_match('#^/bye/([a-zA-Z0-9_]+)$#', $uri, $matches)) {
    $name = $matches[1]; // Извлекаем имя из URL
    $controller = new IndexController();
    $controller->sayBye($name);
}
else {
    http_response_code(105);
    echo "105 - Страница не найдена";
}
?>
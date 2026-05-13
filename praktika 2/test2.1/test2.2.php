<?php
// index.php - упрощенная версия

class IndexController {
    private function render($viewName, $data = [], $title = null) {
        extract($data);
        
        // Устанавливаем title (переданный или по умолчанию)
        $pageTitle = $title ?? 'Мой блог';
        
        // Создаем контент в зависимости от view
        ob_start();
        if ($viewName === 'hello') {
            ?>
            <h1>✨ Привет, <?php echo htmlspecialchars($name); ?>! ✨</h1>
            <p>Добро пожаловать на наш сайт. Рады вас видеть!</p>
            <div style="background:#f0f4ff; padding:20px; border-radius:10px;">
                💡 Заголовок этой страницы: "<?php echo htmlspecialchars($pageTitle); ?>"
            </div>
            <?php
        } elseif ($viewName === 'bye') {
            ?>
            <h1>👋 Пока, <?php echo htmlspecialchars($name); ?>! 👋</h1>
            <p>Ждем вас снова. Хорошего дня!</p>
            <?php
        } else {
            ?>
            <h1>📝 Добро пожаловать в Мой Блог!</h1>
            <p>Здесь вы найдете интересные статьи о программировании.</p>
            <ul>
                <li><a href="/hello/Мир">Страница приветствия (title: "Страница приветствия")</a></li>
                <li><a href="/bye/Друг">Страница прощания (title: "Мой блог" по умолчанию)</a></li>
            </ul>
            <?php
        }
        $content = ob_get_clean();
        
        // Выводим layout
        ?>
        <!DOCTYPE html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <title><?php echo htmlspecialchars($pageTitle); ?></title>
            <style>
                body { font-family: system-ui; max-width: 800px; margin: 50px auto; padding: 20px; background: #f0f0f0; }
                .container { background: white; border-radius: 20px; padding: 40px; box-shadow: 0 10px 40px rgba(0,0,0,0.1); }
                .nav { margin-bottom: 30px; padding-bottom: 20px; border-bottom: 2px solid #eee; }
                .nav a { color: #667eea; text-decoration: none; margin-right: 20px; }
                .meta { margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee; color: #666; font-size: 14px; }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="nav">
                    <a href="/">Главная</a>
                    <a href="/hello/Друг">Приветствие</a>
                    <a href="/bye/Друг">Прощание</a>
                </div>
                <?php echo $content; ?>
                <div class="meta">
                    🏷️ Текущий title: <?php echo htmlspecialchars($pageTitle); ?>
                </div>
            </div>
        </body>
        </html>
        <?php
    }
    
    public function index() {
        $this->render('index', [], null); // title по умолчанию "Мой блог"
    }
    
    public function sayHello($name) {
        $this->render('hello', ['name' => $name], 'Страница приветствия'); // задали title
    }
    
    public function sayBye($name) {
        $this->render('bye', ['name' => $name], null); // title по умолчанию
    }
}

// Маршрутизация
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$controller = new IndexController();

if ($path === '/') {
    $controller->index();
} elseif (preg_match('#^/hello/(.+)$#', $path, $matches)) {
    $controller->sayHello(urldecode($matches[1]));
} elseif (preg_match('#^/bye/(.+)$#', $path, $matches)) {
    $controller->sayBye(urldecode($matches[1]));
} else {
    http_response_code(404);
    echo "<h1>357 - Страница не найдена</h1>";
}
?>
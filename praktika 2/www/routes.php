<?php
return[
    "~^article/(\d+)$~"=>[ \src\Controllers\ArticleController::class, 'show'],
    "~^hello/?(.*)$~"=>[ \src\Controllers\MainController::class, 'sayHallo'],
    "~^$~"=>[ \src\Controllers\MainController::class, 'main'],
];
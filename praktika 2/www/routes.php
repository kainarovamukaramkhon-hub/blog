<?php
return[
    "~^article/create$~" =>[ \src\Controllers\ArticleController::class, 'create'],
    "~^article/store$~" =>[ \src\Controllers\ArticleController::class, 'store'],
    "~^article/(\d+)$~"=>[ \src\Controllers\ArticleController::class, 'show'],
    "~^hello/?(.*)$~"=>[ \src\Controllers\MainController::class, 'sayHallo'],
    "~^$~"=>[ \src\Controllers\MainController::class, 'main'],
];
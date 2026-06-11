<?php
return[
    "~^article/create$~" =>[ \src\Controllers\ArticleController::class, 'create'],
    "~^article/store$~" =>[ \src\Controllers\ArticleController::class, 'store'],
    "~^article/(\d+)$~"=>[ \src\Controllers\ArticleController::class, 'show'],
    "~^article/edit/(\d+)$~"=>[ \src\Controllers\ArticleController::class, 'edit'],
    "~^article/update/(\d+)$~"=>[ \src\Controllers\ArticleController::class, 'update'],
    "~^article/delete/(\d+)$~"=>[ \src\Controllers\ArticleController::class, 'delete'],
    "~^hello/?(.*)$~"=>[ \src\Controllers\MainController::class, 'sayHallo'],
    "~^$~"=>[ \src\Controllers\MainController::class, 'main'],
];
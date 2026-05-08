<?php
return[
    "~^hello/?(.*)$~"=>[ \src\Controllers\MainController::class, 'sayHallo'],
    "~^$~"=>[ \src\Controllers\MainController::class, 'main'],
];
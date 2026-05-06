<?php
    
    $user = new User("Ivan");
    $article = new Article("New article", "new text", $user);
    echo $article->getAuthor()->getName();
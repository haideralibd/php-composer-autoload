<?php

require_once 'app/bootstrap.php';

$user = new User('John', 'Cena');

echo $user->getUsername();

$comment = new Comment('<h1>Salam</h1>');

echo $comment->getComment();
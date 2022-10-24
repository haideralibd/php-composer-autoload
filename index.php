<?php

require_once 'app/bootstrap.php';

$user = new User('John', 'Cena');

echo $user->getUsername();
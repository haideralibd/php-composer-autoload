<?php

namespace Acme\Auth;

class User {
    private $username;
    private $password;

    public function __construct($username, $password) {
        $this->username = $username;
        $this->password = password_hash($password, 1);
    }

    public function getUsername(): string
    {
        return $this->username;
    }
}
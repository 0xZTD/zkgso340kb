<?php

namespace Sepium\Models;

class User
{
    public int $id;
    public string $name;
    public string $email;
    public $created;
    public string $password;

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        $this->created = date('DD-MM-YYYY HH:MM:SS');
    }
}


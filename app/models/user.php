<?php

namespace TWO\models;

use TWO\core\model;

use TWO\core\Session;

class user extends model
{

    public function __construct()
    {
        //Session::Start();
    }

    public function getAllUser()
    {
        $data = model::db()->run("SELECT * FROM `users`");
        //$this->db()->run("SELECT * FROM `users`");
        //$data = json_decode(json_encode($data), true);

        return $data;
    }

    public function getUser($email, $password)
    {
        $data = model::db()->row("SELECT * FROM `users` WHERE `email` = ? && `password` = ?", [$email, $password]);
        //$this->db()->run("SELECT * FROM `users`");
        //$data = json_decode(json_encode($data), true);
        return $data;
    }
}
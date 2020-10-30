<?php
namespace TWO\controllers;

use GUMP;
use TWO\models\user;
use TWO\core\controller;
use TWO\core\session;

class usercontroller extends controller
{

    public function __construct()
    {
        Session::Start();
        $user_data = Session::Get('user');
        //print_r($user_data);

        if(empty($user_data))
        {
            echo 'Not Session';
            die;
        }
    }

    public function index()
    {
        echo " User";
    }
}
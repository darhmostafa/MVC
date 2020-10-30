<?php

namespace TWO\controllers;

use GUMP;
use TWO\models\user;
use TWO\core\controller;
use TWO\core\helpers;
use TWO\core\Session;

class homecontroller extends controller
{
    public function __construct()
    {
        Session::Start();
    }

    public function index()
    {
        $user = new user();

        $data = $user->getAllUser();

        $title = "View";
        $h1 = "Index";
        $this->view("home\index", ["View"=> $title, "h1"=>$h1,"data"=>$data]);
    }

    public function add()
    {
        echo "mostafa";
    }

    public function login()
    {
        $login = 'login';
        $this->view("home\login", ["title"=> $login]);
    }

    public function postLogin()
    {

        $v = GUMP::is_valid($_POST, [
            "email" => "required"
        ]);

        if($v == 1)
        {
            $user = new user();
            $data = $user->getUser($_POST['email'], $_POST['password']);

            Session::Set('user', $data);
            //print_r(Session::Set('user', $data));
            helpers::header("user/index");
            
        }
     
    }

    public function logout()
    {
        Session::Stop();
        echo "home";
    }

}
<?php
namespace App\controllers;
use App\core\View;
use App\models\User;

class Security
{
    public function login()
    {
        $view = new View("security/login", "account");
    }

    public function register()
    {

        $user = new User();
        //$user->setId(4);
        $user->setFirstname("YvEs");
        $user->setLastname("SKRZypCZYK");
        $user->setEmail("y.SKRZypczYK@Gmail.com");
        $user->setPwd("Test1234");
        $user->setStatus(1);
        $user->save();

        $view = new View("security/register", "account");
    }

    public function logout()
    {
        die("logout");
    }
}
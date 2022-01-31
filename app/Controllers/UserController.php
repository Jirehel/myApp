<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller{

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $user = (new User($this->getDB()))->getByUsername($_POST['username']);

        if (password_verify($_POST['password'], $user->password)) {
            //var_dump($user->admin);die();
            $_SESSION['auth'] = (int) $user->admin;
            return header('Location: /myApp/admin/posts?success=true');
        }else{
            return header('Location: /myApp/login');
        }
    }

    public function logout()
    {
        session_destroy();

        return header('Location: /myApp/');
    }
}
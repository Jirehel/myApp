<?php

namespace App\Controllers;

use App\Models\User;

use App\Validation\Validator;

class UserController extends Controller{

    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' => ['required', 'min:3'],
            'password' => ['required']
        ]);

        //var_dump($errors);die();
        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /myApp/login');
            exit;
        }

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
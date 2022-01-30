<?php

class Auth extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        $this ->view->render("auth/login");
    }

    /**
     * function auth
     *
     * @return
     */
    public function auth()
    {
        $accepted_methods = ['post'];

        if(!in_array(strtolower($_SERVER['REQUEST_METHOD']), $accepted_methods))
        {
            Session::flash('Used method is invalid!. Accepted: '. implode(',', $accepted_methods), 'error');

            header('Location: ' . Url::url('/'));die();
        }

        $email      = $_POST['email']    ?? null;
        $password   = $_POST['password'] ?? null;

        if(!$email || !$password)
        {
            Session::flash('Email and password are required!', 'error');
            header('Location: ' . Url::url('/auth'));die();
        }

        $user  = $this->customLoadModel('users')->getFirstByEmail($email);

        if(!$user)
        {
            Session::flash('Invalid credentials!', 'error');
            header('Location: ' . Url::url('/auth'));die();
        }

        $password_is_valid = password_verify($password, ($user['password'] ?? ''));

        if(!$password_is_valid)
        {
            Session::flash('Invalid credentials!', 'error');
            header('Location: ' . Url::url('/auth'));die();
        }

        Session::put('user', [
            'usersId'   => $user['usersId'],
            'name'      => $user['name'],
            'email'     => $user['email'],
        ]);

        header('Location: ' . Url::url('/main'));die();
    }

    public function  login()
    {
        $this ->view->render("auth/login");
    }

    public function  register()
    {
        $this ->view->render("auth/register");
    }

    public function  store()
    {
        die('Building...!');
    }

    public function  logout()
    {
        session_destroy();
        header('Location: ' . Url::url('/auth/login'));die();
    }
}
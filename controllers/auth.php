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
        $email      = $_POST['email']    ?? null;
        $password   = $_POST['password'] ?? null;

        if(!$email || !$password)
        {
            die('Email and password is rquired!');//TODOimplementsredirect with sessions messages
        }

        $user  = $this->customLoadModel('users')->getFirstByEmail($email);

        if(!$user)
        {
            die('Invalid credentials!');//TODOimplementsredirect with sessions messages
        }

        $password_is_valid = password_verify($password, ($user['password'] ?? ''));

        if(!$password_is_valid)
        {
            die('Invalid credentials!');//TODOimplementsredirect with sessions messages
        }

        die("Hello, {$user['name']}");
    }

    public function  login()
    {
        $this ->view->render("auth/login");
    }

    public function  register()
    {
        $this ->view->render("auth/register");
    }
}
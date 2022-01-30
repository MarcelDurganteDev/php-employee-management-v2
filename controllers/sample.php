<?php

class Sample extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function render()
    {
        dd($_SESSION);
    }

    public function all()
    {
        dd($_SESSION);
    }

    public function new()
    {
        $chave = $_GET['chave'] ?? null;
        $valor = $_GET['valor'] ?? null;

        if ($chave && is_string($chave) && $valor)
        {
            $_SESSION[$chave] = $valor;
        }
    }

    public function login()
    {
        // $_SESSION['user'] = [
        //     'name'  => 'Marcel',
        //     'email' => 'tiago@tiago.com',
        //     'id'    => rand(545, 87898),
        // ];
        Session::put('user', [
            'name'  => 'Marcel',
            'email' => 'tiago@tiago.com',
            'id'    => rand(545, 87898),
        ]);

        if(($_GET['redirect'] ?? '') == 'true')
        {
            header('Location: ' . Url::url('/sample/isLogged'));die();
        }
    }

    public function messages()
    {
        // $_SESSION['messages'] = [
        //     ['type' => 'danger',    'message' => 'Fake danger message  ' . rand(545, 87898)],
        //     ['type' => 'warning',   'message' => 'Fake warning message  ' . rand(545, 87898)],
        //     ['type' => 'success',   'message' => 'Fake success message  ' . rand(545, 87898)],
        //     ['type' => 'info',      'message' => 'Fake info message  ' . rand(545, 87898)],
        //     ['type' => '',          'message' => 'Fake message  ' . rand(545, 87898)],
        // ];

        Session::flash('Fake danger message  ' . rand(545, 87898), 'danger');
        Session::flash('Fake warning message  ' . rand(545, 87898), 'warning');
        Session::flash('Fake success message  ' . rand(545, 87898), 'success');
        Session::flash('Fake info message  ' . rand(545, 87898), 'info');
        Session::flash('Fake message  ' . rand(545, 87898));
    }

    public function rand()
    {
        $chave = 'rand';
        $valor = rand(1500, 79797979);

        if ($chave && is_string($chave) && $valor)
        {
            $_SESSION[$chave] = $valor;
        }
    }

    public function isLogged()
    {
        echo "<a href='https://bf8e-31-13-188-148.ngrok.io/php-employee-management-v2/sample/login?redirect=true'>Login</a>";

        $user       = $_SESSION['user'] ?? [];

        $is_logged  = !! $user && ($user['email'] ?? null);

        $auth_user = UserAuth::authUser();
        dump($is_logged, $user, $auth_user);

    }
}

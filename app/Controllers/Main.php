<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\TasksModel;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        //index
    }
    public function login()
    {
        return view('login_frm');
    }
    public function login_submit()
    {

        //Validation Use
        $validation = $this->validate(
            //validation rules
            [
                'text_usuario' => 'required',
                'text_senha' => 'required',
            ],
            [
                'text_usuario' => [
                    'required' => 'O campo usuario é obrigatorio'
                ],
                'text_senha' => [
                    'required' => 'O campo senha é obrigatorio'
                ]
            ]
        );
        if (!$validation) {
            return redirect()->to('login')->withInput()->with('validation_errors', $this->validator->getErrors());
        }

        //Buscar dados do usuario
        $usuario = $this->request->getPost('text_usuario');
        $senha = $this->request->getPost('text_senha');
        dd([$usuario, $senha]);


        //  if (empty($usuario) || empty($senha)) {
        //return redirect()->to('login')->withInput()->with('error', 'Usuario e senha obrigatorios');
    }
    //echo 'Usuario: ' . $usuario . '<br>';
    //echo 'Senha: ' . $senha . '<br>';

    //commo fazemos para validar usuario e a senha?
}

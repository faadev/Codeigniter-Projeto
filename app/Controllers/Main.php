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
        // $model_usuarios = new UsuariosModel(db_connect());
        //$usuarios = $model_usuarios->findAll();
        //dd($usuarios); ou
        //echo '<pre>';
        //print_r($usuarios);

        //tasks
        //$model_tasks = new TasksModel();
        // $tasks = $model_tasks->findAll();
        //dd($tasks);
        return view('test');
    }
    public function login()
    {
        return view('login_frm');
    }
    public function login_submit()
    {
        echo 'login submit';
    }
}

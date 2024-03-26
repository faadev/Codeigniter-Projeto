<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuariosModel;
use CodeIgniter\HTTP\ResponseInterface;

class Main extends BaseController
{
    public function index()
    {
        $model = new UsuariosModel(db_connect());
        $usuarios = $model->findAll();
        //dd($usuarios);

        echo '<pre>';
        print_r($usuarios);
    }
}

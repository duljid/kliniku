<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
            return view('index');
    }
    public function register()
    {
          $tes = $this->request->getPost('roles');
          echo $tes;
    }
}

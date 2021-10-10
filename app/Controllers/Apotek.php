<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ModelApotek;

class Apotek extends BaseController
{
    public function index()
    {     
        return view('Apotek/index');
    }
}
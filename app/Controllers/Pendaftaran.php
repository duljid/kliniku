<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ModelRegister;

class Pendaftaran extends BaseController
{
    public function index()
    {     
        return view('Pendaftaran/index');
    }
    public function pasien_baru()
    {     
        return view('Pendaftaran/pasien_baru');
    }
}

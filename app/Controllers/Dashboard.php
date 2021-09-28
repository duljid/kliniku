<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        if(in_groups('Administrator')){
            return view('Admin/Index');
        }
        elseif(in_groups('Pendaftaran')){
            return view('Pendaftaran/Index');
        }
    }
}

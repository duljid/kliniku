<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ModelPasien;

class Pendaftaran extends BaseController
{
    public function index()
    {     
        return view('Pendaftaran/index');
    }
    public function pasien_baru()    
    {     
        $db      = \Config\Database::connect();
		$builder = $db->table('pasien');
        $query = $db->query("SELECT * FROM pasien ORDER BY kode_pasien DESC LIMIT 1");
        foreach ($query->getResult() as $row) {
            $last_kode_pasien = $row->kode_pasien;
        }
        $data = [
            'kode_pasien' => $last_kode_pasien+1,
        ];
        return view('Pendaftaran/pasien_baru', $data);
    }
    public function attempt_pasien_baru()
    {     
                    
    }

}

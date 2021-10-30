<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function daftar()
    {
        // Mencari Kode Pasien Terakhir
        $db      = \Config\Database::connect();
		$builder = $db->table('pasien');
        $query = $db->query("SELECT * FROM pasien ORDER BY kode_pasien DESC LIMIT 1");
        foreach ($query->getResult() as $row) {
            $last_kode_pasien = $row->kode_pasien;
        }
        if($last_kode_pasien == 0){            
            $data = [
                'kode_pasien' => 1,
            ];
        }
        else{
        $data = [
            'kode_pasien' => $last_kode_pasien+1,
        ];
        }
        
        // Mencari Data Pasien
        $nama_pasien = user()->fullname;
        $query2 = $db->query("SELECT * FROM pasien WHERE nama_pasien = '$nama_pasien'");
        foreach ($query2->getResult() as $row) {
            $pasien = $row->nama_pasien;
        }
        if(empty($pasien)){            
            return view('konfirmasi_pasien', $data);
        }
        else{
            $db = \Config\Database::connect();
            $builder2 = $db->table('pasien');
            $builder2->select('pasien.umur_pasien, pasien.kode_pasien');
            $builder2->join('users', 'users.fullname = pasien.nama_pasien');
            $query3 = $builder2->get();
            foreach ($query3->getResult() as $row) {
                $umur_pasien = $row->umur_pasien;
                $kode_pasien = $row->kode_pasien;

            }
            
            $data = [
                'umur' => $umur_pasien,
                'kode_pasien' => $kode_pasien
            ];
    
            return view('daftar_berobat', $data);
        }
    }
    public function antrian_saya()
    {
        $nama_pasien = user()->fullname;

        $db = \Config\Database::connect();
        $builder = $db->table('pasien_berobat');
        $builder->select('nama_pasien, pasien_berobat.kode_pasien, id_berobat, poli_berobat, tanggal_berobat, dokter_berobat');
        $builder->join('pasien', 'pasien.kode_pasien = pasien_berobat.kode_pasien');
        $query = $builder->getWhere(['nama_pasien' => $nama_pasien]);

        $data['antrian'] = $query->getResult();

        echo view('antrian_saya',$data);
    }
}

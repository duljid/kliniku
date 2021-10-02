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
        
        return view('Pendaftaran/pasien_baru', $data);
    }
    public function attempt_pasien_baru()
    {         
        if (!$this->validate([
    		'nama_pasien' => [
    			'rules' => 'required',
    			'errors' => [
    				'required' => 'Nama Pasien Harus diisi',

    			]
    		],
            'tanggal_lahir' => [
    			'rules' => 'required',
    			'errors' => [
    				'required' => 'Tanggal Harus diisi',

    			]
    		],
            'phone' => [
    			'rules' => 'required|max_length[13]|numeric',
    			'errors' => [
    				'required' => 'No Telepon Harus diisi',
                    'max_length' => 'No Telepon tidak boleh lebih dari 13 Angka',
                    'numeric' => 'No Telepon harus berisikan Angka'
    			]
    		],
            'alamat' => [
    			'rules' => 'required',
    			'errors' => [
    				'required' => 'Alamat Harus diisi',
    			]
    		],
    	])) {
    		return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    	}   
        $ModelPasien = new ModelPasien();

        $tanggal_lahir = $this->request->getVar('tanggal_lahir');
        $umur = floor((time() - strtotime($tanggal_lahir)) / 31556926);

		$ModelPasien->save([
            'nama_pasien' => $this->request->getVar('nama_pasien'),
            'tanggallahir_pasien' => $this->request->getVar('tanggal_lahir'),
            'jeniskelamin_pasien' => $this->request->getVar('jenis_kelamin'),
            'telepon_pasien' => $this->request->getVar('phone'),
            'alamat_pasien' => $this->request->getVar('alamat'),
            'umur_pasien' => $umur,
        ]);
		session()->setFlashdata('Pesan', 'Postingan berhasil diedit.');
		return redirect()->to('/Pendaftaran/pasien_baru');   
        
        }
        public function poli_pasien(){    
            $ModelPasien = new ModelPasien();
            $query = $ModelPasien->findAll();
            $data=[
                'query' => $query
            ];
            echo view('/Pendaftaran/poli_pasien',$data);
        }
}

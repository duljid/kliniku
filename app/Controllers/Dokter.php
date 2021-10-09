<?php

namespace App\Controllers;

use App\Models\ModelDokter;

class Dokter extends BaseController
{
    public function index()
    {
        $db      = \Config\Database::connect();
		$builder = $db->table('dokter');
        $id_akun = user()->id;
        $query = $db->query("SELECT * FROM dokter WHERE id_dokter = $id_akun");
        foreach ($query->getResult() as $row) {
            $id = $row->id_dokter;
            $poli = $row->jenis_dokter;
            $jadwal = $row->jadwal_praktek;
        }
        if(empty($id)){
            $tidaklengkap = "visible";
            $lengkap = "hidden ; position: absolute";
            $poli = "";
            $jadwal = "";
        }else{
            $lengkap = "visible";
            $tidaklengkap = "hidden ; position: absolute";
        }
        $data = [
            'lengkap' => $lengkap,
            'tidaklengkap' => $tidaklengkap,
            'poli' => $poli,
            'jadwal' => $jadwal
        ];
		return view('Dokter/index',$data);   
    }
    public function simpan_dokter()
    {
        $id_akun = user()->id;
        if (!$this->validate([
    		'jenis_dokter' => [
    			'rules' => 'required',
    			'errors' => [
    				'required' => 'Jenis Dokter Harus diisi',

    			]
    		],
            'jadwal_praktek' => [
    			'rules' => 'required',
    			'errors' => [
    				'required' => 'Jadwal Praktek Harus diisi',

    			]
    		],
    	])) {
    		return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
    	}   
        $ModelDokter = new ModelDokter();

		$ModelDokter->save([
            'jenis_dokter' => $this->request->getVar('jenis_dokter'),
            'jadwal_praktek' => $this->request->getVar('jadwal_praktek'),
            'id_dokter' => $id_akun,
        ]);
		session()->setFlashdata('Pesan', 'Postingan berhasil diedit.');
        return redirect()->to('/Dokter/Index');
    }
}

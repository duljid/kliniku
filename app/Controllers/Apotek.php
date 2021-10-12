<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\ModelApotek;

class Apotek extends BaseController
{
    public function index()
    {
        session();
        $model = new ModelApotek();
        $data = [
            'obat' => $model->findAll(),
        ];

        return view('Apotek/index', $data);
    }

    public function tambah()
    {
        $model = new ModelApotek();
        $cekKode = $model->selectMax('kode_obat')->first();
        
        $kodeOtomatis = '';
        if(!empty($cekKode)){
			$tmp = Substr($cekKode['kode_obat'], 2) + 1;
			$kodeOtomatis = 'KO'.sprintf('%04s', $tmp);
		}
		else{
			$kodeOtomatis = 'KO'.'0001';
		}

        session();
        $data = [
            'kodeOtomatis' => $kodeOtomatis,
            'validation' => \Config\Services::validation()
        ];

        return view('Apotek/tambah', $data);
    }

    public function insert()
    {
        if (!$this->validate([
			'nama_obat' => 'required',
			'satuan_obat' => 'required',
			'jenis_obat' => 'required',
			'stok_obat' => 'required|greater_than_equal_to[10]',
			'tgl_exp' => 'required',
        ])) {
            return redirect()->to(base_url('/apotek/tambah'))->withInput();
        }

        $data = $this->request->getVar();
        
        $model = new ModelApotek();
        $model->save([
            'kode_obat' => $data['kode_obat'],
            'nama_obat' => $data['nama_obat'],
            'satuan_obat' => $data['satuan_obat'],
            'jenis_obat' => $data['jenis_obat'],
            'stok_obat' => $data['stok_obat'],
            'tgl_exp' => $data['tgl_exp'],
            'kegunaan' => $data['kegunaan'],
        ]);

        return redirect()->to(base_url('/apotek'));
    }

    public function ubah($kodeObat)
    {
        session();
        $model = new ModelApotek();
        $data = [
            'obat' => $model->where('kode_obat', $kodeObat)->first(),
            'validation' => \Config\Services::validation()
        ];

        return view('apotek/ubah', $data);
    }

    public function update($idObat)
    {
        $data = $this->request->getVar();

        if (!$this->validate([
			'nama_obat' => 'required',
			'satuan_obat' => 'required',
			'jenis_obat' => 'required',
			'stok_obat' => 'required|greater_than_equal_to[10]',
			'tgl_exp' => 'required',
        ])) {
            return redirect()->to(base_url('/apotek/ubah/'.$data['kode_obat']))->withInput();
        }
        
        $model = new ModelApotek();
        $model->save([
            'id_obat' => $idObat,
            'kode_obat' => $data['kode_obat'],
            'nama_obat' => $data['nama_obat'],
            'satuan_obat' => $data['satuan_obat'],
            'jenis_obat' => $data['jenis_obat'],
            'stok_obat' => $data['stok_obat'],
            'tgl_exp' => $data['tgl_exp'],
            'kegunaan' => $data['kegunaan'],
        ]);

        return redirect()->to(base_url('/apotek'));
    }

    public function hapus($kodeObat)
    {
        $model = new ModelApotek();
        $obat = $model->where('kode_obat', $kodeObat)->first();
        $idObat = $obat['id_obat'];

        $model->delete(['id_obat', $idObat]);

        return redirect()->to(base_url('/apotek'));
    }
}
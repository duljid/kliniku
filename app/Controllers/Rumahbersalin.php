<?php

namespace App\Controllers;

use App\Models\ModelBersalin;

class Rumahbersalin extends BaseController
{
    // public function index()
    // {
    //     return view('Rumahbersalin/index');
    // }

    public function index()
    {
        $model = new ModelBersalin;
        $data['title']     = 'Data Pasien Bersalin';
        $data['getBarang'] = $model->getBarang();
        echo view('Rumahbersalin/index', $data);
        
    }
    public function jadwal()
    {
        $model = new ModelBersalin;
        $data['title']     = 'Jadwal Pasien Bersalin';
        $data['getBarang'] = $model->getBarang();
        echo view('Rumahbersalin/jadwal', $data);
        
    }
    public function laporan()
    {
        
        $users = new ModelBersalin();
        $cari = $this->request->getGet('cari');
        $data = $users->where('status', $cari)->findAll();
        return view('Rumahbersalin/laporan', compact('data'));
        
    }
    public function tambah()
    {
        $data['title']     = '+ Pasien Baru';
        echo view('Rumahbersalin/tambah', $data);
        
    }

    public function add()
    {
        $model = new ModelBersalin;
        $data = array(
            'nama_pasien' => $this->request->getPost('nama'),
            'umur_pasien'         => $this->request->getPost('umur'),
            'alamat'  => $this->request->getPost('alamat'),
            'tgl' => $this->request->getPost('tgl'),
            'dokter' => $this->request->getPost('dokter'),
            'status'  => $this->request->getPost('status')
        );
        $model->saveBarang($data);
        echo '<script>
                alert("Sukses Tambah Data Pasien");
                window.location="' . base_url('Rumahbersalin') . '"
            </script>';
    }

    public function edit($id)
    {
        $model = new ModelBersalin;
        $getBarang = $model->getBarang($id)->getRow();
        if (isset($getBarang)) {
            $data['barang'] = $getBarang;
            $data['title']  = 'Edit ' . $getBarang->nama_pasien;
            echo view('edit', $data);
        } else {

            echo '<script>
                    alert("ID barang ' . $id . ' Tidak ditemukan");
                    window.location="' . base_url('Rumahbersalin') . '"
                </script>';
        }
    }
    public function update()
    {
        $model = new ModelBersalin;
        $id = $this->request->getPost('no_pasien');
        $data = array(
            'nama_pasien' => $this->request->getPost('nama'),
            'umur_pasien'         => $this->request->getPost('umur'),
            'alamat'  => $this->request->getPost('alamat'),
            'tgl' => $this->request->getPost('tgl'),
            'dokter' => $this->request->getPost('dokter'),
            'status'  => $this->request->getPost('status')
        );
        $model->editBarang($data, $id);
        echo '<script>
                alert("Sukses Edit Data Pasien");
                window.location="' . base_url('Rumahbersalin') . '"
            </script>';
    }


}
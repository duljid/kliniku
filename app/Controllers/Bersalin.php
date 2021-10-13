<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ModelBersalin;

class Bersalin extends Controller
{
    // public function index()
    // {
    //     // $usermodel = new UserModel();
	// 	// $data['users'] = $usermodel->findAll();

    //     $db = \Config\Database::connect();
        
    //     $builder = $db->table('bersalin');
    //     $builder->select('users.id as userid, username, fullname, name');
    //     $builder->join('auth_groups_users', 'auth_groups_users.user_id = users.id');
    //     $builder->join('auth_groups', 'auth_groups.id = auth_groups_users.group_id');
    //     $query = $builder->get();

    //     $data['bersalin'] = $query->getResult();

        
    //     return view('Bersalin/index', $data);
    // }
    public function index()
    {
        $model = new ModelBersalin;
        $data['title']     = 'Data Pasien Bersalin';
        $data['getBarang'] = $model->getBarang();
        echo view('Bersalin/index', $data);
        
    }
    public function jadwal()
    {
        $model = new ModelBersalin;
        $data['title']     = 'Jadwal Pasien Bersalin';
        $data['getBarang'] = $model->getBarang();
        echo view('jadwal', $data);
        
    }
    public function laporan()
    {
        
        $users = new ModelBersalin();
        $cari = $this->request->getGet('cari');
        $data = $users->where('status', $cari)->findAll();
        return view('laporan', compact('data'));
        
    }
    public function tambah()
    {
        $data['title']     = '+ Pasien Baru';
        echo view('tambah', $data);
        
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
                window.location="' . base_url('Bersalin') . '"
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
                    window.location="' . base_url('barang') . '"
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
                window.location="' . base_url('Bersalin') . '"
            </script>';
    }


    
}
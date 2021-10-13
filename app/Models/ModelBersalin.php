<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelBersalin extends Model
{
    protected $table = 'bersalin';

    public function getBarang($id = false)
    {
        if ($id === false) {
            return $this->findAll();
        } else {
            return $this->getWhere(['no_pasien' => $id]);
        }
    }
    public function saveBarang($data)
    {
        $builder = $this->db->table($this->table);
        return $builder->insert($data);
    }

    public function editBarang($data, $id)
    {
        $builder = $this->db->table($this->table);
        $builder->where('no_pasien', $id);
        return $builder->update($data);
    }
    public function pencarian($kunci) 
    {
  	    return $this->table('bersalin')->like('status', $kunci);
        // $builder = $this->db->table($this->table);
        // $builder->like('status', $kunci);
    }
}
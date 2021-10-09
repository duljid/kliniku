<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDokter extends Model
{
    protected $table = 'dokter';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['id_dokter', 'jenis_dokter', 'jadwal_praktek'];
}
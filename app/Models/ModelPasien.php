<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPasien extends Model
{
    protected $table = 'pasien';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['kode_pasien', 'nama_pasien', 'tanggallahir_pasien', 'umur_pasien', 'telepon_pasien', 'jeniskelamin_pasien',];
}
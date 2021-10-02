<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPasien extends Model
{
    protected $table = 'pasien';
    protected $primaryKey = 'kode_pasien';
    protected $useTimestamps = 'true';
    protected $allowedFields = ['nama_pasien', 'tanggallahir_pasien', 'umur_pasien', 'telepon_pasien', 'jeniskelamin_pasien', 'alamat_pasien'];
}
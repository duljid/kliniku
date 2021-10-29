<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelPasienBerobat extends Model
{
    protected $table = 'pasien_berobat';
    protected $primaryKey = 'id_berobat';
    protected $useTimestamps = 'true';  
    protected $allowedFields = ['kode_pasien', 'poli_berobat', 'dokter_berobat', 'tanggal_berobat'];
}
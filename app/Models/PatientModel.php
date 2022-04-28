<?php

namespace App\Models;

use CodeIgniter\Model;

class PatientModel extends Model
{
    protected $table = 'patients';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'nama',
        'nohp',
        'email',
        'pendaftaran',
        'tipe_pasien',
        'jenis_kunjungan',
        'created_at'
    ];
}

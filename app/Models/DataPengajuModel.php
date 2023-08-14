<?php

namespace App\Models;

use CodeIgniter\Model;

class DataPengajuModel extends Model
{
    protected $table = "pengaju_beasiswa";
    protected $primaryKey = "id_pengaju";
    protected $allowedFields = ["id_beasiswa", "id_ipk","berkas_syarat", "status_pengajuan"];
    protected $useTimestamps = false;

}
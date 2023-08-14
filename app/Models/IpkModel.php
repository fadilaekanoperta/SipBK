<?php

namespace App\Models;

use CodeIgniter\Model;

class IpkModel extends Model
{
    protected $table = "ipk_mahasiswa";
    protected $primaryKey = "id_ipk";
    protected $allowedFields = ["id_semester", "id_mahasiswa", "ipk"];
    protected $useTimestamps = false;

}
<?php

namespace App\Models;

use CodeIgniter\Model;

class SemesterModel extends Model
{
    protected $table = "semester";
    protected $primaryKey = "id_semester";
    protected $allowedFields = ["nama_semester"];
    protected $useTimestamps = false;

    public function get_data_semester()
    {
        return $this->db->table('semester')
        ->get()->getResultArray();
    }

}
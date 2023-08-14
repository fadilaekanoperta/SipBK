<?php

namespace App\Models;

use CodeIgniter\Model;

class BeasiswaModel extends Model
{
    protected $table = "beasiswa";
    protected $primaryKey = "id_beasiswa";
    protected $allowedFields = ["nama_beasiswa","status","jangka_beasiswa","deadline","deskripsi_singkat"];
    protected $useTimestamps = false;

    public function get_data_beasiswa()
    {
        return $this->db->table('beasiswa')
        ->get()->getResultArray();
    }
    public function get_data_detail_beasiswa($id)
    {
        return $this->db->table('beasiswa')
        ->where('id_beasiswa', $id)
        ->get()->getRow();
    }
}
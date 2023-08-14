<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\API\ResponseTrait;


class CheckData extends BaseController
{
    use ResponseTrait;

	public function mahasiswa($nama, $email)
	{
        $this->mahasiswaModel = new MahasiswaModel();
        // Mendapatkan IPK berdasarkan nama dan email mahasiswa
        $response = $this->mahasiswaModel->get_data_mahasiswa($nama, $email);

        return $this->respond($response);
	}
}

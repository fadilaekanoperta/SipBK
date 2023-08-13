<?php

namespace App\Controllers;

use App\Models\BeasiswaModel;

class Page extends BaseController
{
    public function detail_beasiswa()
    {
        $model = new BeasiswaModel();
		$data['beasiswa'] = $model->get_data_beasiswa();
		return view('detail_beasiswa', $data);
    }
    public function daftar()
    {
        echo view("daftar");
    }
    public function hasil()
    {
        echo view("hasil");
    }
}

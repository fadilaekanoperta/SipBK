<?php

namespace App\Controllers;

use App\Models\DataPengajuModel;
use App\Models\BeasiswaModel;
use App\Models\MahasiswaModel;
use App\Models\SemesterModel;

class Page extends BaseController
{
    public function detail_beasiswa($id)
    {
        $model = new BeasiswaModel();
		$data['beasiswa'] = $model->get_data_detail_beasiswa($id);
		return view('detail_beasiswa', $data);
    }
    public function daftar()
    {
        $model = new SemesterModel();
        $data['semester'] = $model->get_data_semester();
        $model = new BeasiswaModel();
		$data['beasiswa'] = $model->get_data_beasiswa();
        echo view("daftar", $data);
    }
    public function create()
	{
		$data = $this->request->getPost();
		$file =  $this->request->getFile('uploadBerkasPersyaratan');
        $randomName = $file->getRandomName();

		// menyimpan data dari form ke dalam database tabel pengaju beasiswa
        $this->pengajubeasiswaModel = new DataPengajuModel();
		$this->pengajubeasiswaModel->save([
			'id_beasiswa' => $data['pilihanBeasiswa'],
			'id_ipk' => $data['id_ipk'],
			'berkas_syarat' => $randomName,
			'status_pengajuan' => 'belum di verifikasi'
		]);
		//masukan file ke folder
		if ($file->isValid() && ! $file->hasMoved())
		{
			$file->move(ROOTPATH.'public/dokumen/',$randomName);
		}
		return redirect()->to('hasil?masukkanEmail='.$data['masukkanEmail'].'&masukkanNama='.$data['masukkanNama']);
		// return redirect()->to('hasil');

	}
    public function hasil()
    {
        $data = $this->request->getGet();
		if($data){

			if($data['masukkanEmail'] != NULL && $data['masukkanNama'] != NULL){
            
				$model = new MahasiswaModel();
				$datas['hasil'] = true;
				$datas['beasiswa'] = $model->get_data_beasiswa($data['masukkanEmail'], $data['masukkanNama']);
				// var_dump($datas['data_beasiswa']);
				
			}else{
	
				$datas['hasil'] = false;
			}
			return view('hasil', $datas);
			// var_dump($datas);

		}else{
			$datas['hasil'] = false;
			return view('hasil', $datas);
		}
    }
}

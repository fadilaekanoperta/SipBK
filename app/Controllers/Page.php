<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function detail_beasiswa()
    {
        echo view("detail_beasiswa");
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

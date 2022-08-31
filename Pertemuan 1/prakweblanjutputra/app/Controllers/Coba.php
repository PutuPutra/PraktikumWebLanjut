<?php

namespace App\Controllers;

class Coba extends BaseController
{
    public function index()
    {

        echo "test";
    }
    public function About($nama = '', $umur = 0)
    {
        echo "Halo, nama saya $nama, saya berumur $umur tahun";
    }
}

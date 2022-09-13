<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Mahasiswa;


class Pages extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function view($page = 'home')
    {
        if (!is_file(APPPATH . 'Views/pages/' . $page . '.php')) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }

        $data['title'] = ucfirst($page);

        return view('templates/header', $data)
            . view('pages/' . $page)
            . view('templates/footer');
    }

    public function Mahasiswa()
    {
        $mahasiswaModel = new Mahasiswa();
        $mahasiswa = $mahasiswaModel->findAll();
        $data = ['title' => 'Mahasiswa', 'mahasiswa' => $mahasiswa];

        return view('template/header', $data)
            . view('pages/mahasiswa', $data)
            . view('template/footer');
    }
}

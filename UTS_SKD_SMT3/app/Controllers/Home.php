<?php

namespace App\Controllers;

$encrypter = \Config\Services::encrypter();
class Home extends BaseController
{
    public function __construct()
    {

        $this->keamanan = \Config\Services::encrypter();
    }
    public function index()
    {
        $nama = "Samut";
        $data = $this->keamanan->encrypt($nama);
        return view('welcome_message');
    }
}

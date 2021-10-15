<?php

namespace App\Controllers;

use App\Models\ModelKeamanan;
use CodeIgniter\Model;

class Login extends BaseController
{
    public function __construct()
    {

        $this->modelKeamanan = new ModelKeamanan();
    }

    public function index()
    {
        return view('login');
    }

    public function proses()
    {
        $kalimat = str_replace(".", "Xx", $_POST['email']); // menampung inputan kata
        $key    = 5; // menampung inputan nama

        for ($i = 0; $i < strlen($kalimat); $i++) // menghitung panjang string
        {
            $kode[$i] = ord($kalimat[$i]);
            $b[$i] = ($kode[$i] + $key) % 256;
            $c[$i] = chr($b[$i]);
        }
        $hsl = "";

        $kalimat;




        for ($i = 0; $i < strlen($kalimat); $i++) {
            $c[$i];
            $hsl = $hsl . $c[$i];
        }


        $usencrypt = $hsl;

        $key = 2;
        $isi = $hsl;
        $isis = "";

        for ($i = 0; $i < strlen($isi); $i++) {
            $kode[$i] = ord($isi[$i]);
            $b[$i] = ($kode[$i] - $key) % 256;
            $c[$i] = chr($b[$i]);
        }

        for ($i = 0; $i < strlen($isi); $i++) {
            echo $isi[$i];
        }

        for ($i = 0; $i < strlen($isi); $i++) {
            echo $c[$i];
            $isis = $isis . $c[$i];
        }

        $konek = mysqli_connect('localhost', 'root', '', 'db_skd');

        $password = $_POST['password'];
        $salt = $password . $isis . $hsl;
        $pass = hash('md5', $salt);
        $query = mysqli_query($konek, "SELECT * FROM client_sekolah WHERE passwordds = '$pass'");

        if (!mysqli_affected_rows($konek) && !$this->validate([
            'email' => [
                'rules' => 'required|valid_email'

            ],
            'passwordds' => [
                'rules' => 'required'

            ]

        ])) {
            $validation = \Config\Services::validation();
            session()->setFlashdata('error', "Email atau Password Salah");
            return redirect()->to('/Login/index')->withInput()->with('validation', $validation);
        }
        $data = [
            'nama' => $this->modelKeamanan->where(['email' => $_POST['email']])->first()
        ];
        echo view('dashboard', $data);
    }
}

<?php

namespace App\Controllers;

use App\Models\ModelKeamanan;

class Register extends BaseController
{
    public function __construct()
    {

        $this->modelKeamanan = new ModelKeamanan();
    }

    public function index()
    {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('register', $data);
    }

    public function proses()
    {

        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mohon diisi'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} mohon diisi'
                ]
            ],


            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} mohon diisi',
                    'valid_email' => 'Mohon diisi sesuai format email'
                ]
            ],

            'password' => [
                'rules' => 'required|min_length[5]',
                'errors' => [
                    'required' => '{field} mohon diisi',
                    'min_length' => 'Masukkan minimal 5 karakter'
                ]
            ],
            'password2' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Konfirmasi Password mohon diisi',
                    'matches' => 'Password Harus sama'
                ]
            ],

        ])) {

            $validation = \Config\Services::validation();
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('/Register/index')->withInput()->with('validation', $validation);
        }


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


        $key = 2;
        $isi = $hsl;
        $isis = "";

        for ($i = 0; $i < strlen($isi); $i++) {
            $kode[$i] = ord($isi[$i]);
            $b[$i] = ($kode[$i] - $key) % 256;
            $c[$i] = chr($b[$i]);
        }
        echo "kalimat ciphertext : ";
        for ($i = 0; $i < strlen($isi); $i++) {
            echo $isi[$i];
        }
        echo "<br>";
        echo "hasil dekripsi =";
        for ($i = 0; $i < strlen($isi); $i++) {
            echo $c[$i];
            $isis = $isis . $c[$i];
        }




        $password = $_POST['password'];

        $salt = $password . $isis . $hsl;
        $has = hash('md5', $salt);

        $masukkan = [
            'nama' => $this->request->getVar('nama'),
            'alamat' => $this->request->getVar('alamat'),
            'tanggal_lahir' => $this->request->getVar('lahir'),
            'email' => $this->request->getVar('email'),
            'passwordds' => $has
        ];

        $this->modelKeamanan->insert($masukkan);

        return redirect()->to('/Login/index');
    }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKeamanan extends Model
{
    protected $table      = 'client_sekolah';
    protected $allowedFields = ['nama', 'alamat', 'tanggal_lahir', 'email', 'passwordds'];
    protected $useTimestamps = true;
    protected $createdField  = 'ditambahkan';
    protected $updatedField  = 'diupdate';
}

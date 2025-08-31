<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'mahasiswa';

    public function getAllMahasiswa()
    {
        $query = $this->db->query("SELECT * FROM mahasiswa ORDER BY id DESC");
                    return $query->getResultArray();
    }
    public function getMahasiswaById($id)
    {
        return $this->find($id);
    }
    public function search($keyword)
    {
        // Menggunakan Query Builder
        return $this->table('mahasiswa')
                    ->like('nama', $keyword)
                    ->orLike('nim', $keyword)
                    ->orLike('umur', $keyword)
                    ->get()
                    ->getResultArray();
    }   
}
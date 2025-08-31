<?php
class MahasiswaModel
{
    
    private $db;
    
    public function __construct($pdo_connection)
    {
        $this->db = $pdo_connection;
    }
    
    public function getAllMahasiswa()
    {
        $stmt = $this->db->prepare("SELECT * FROM mahasiswa ORDER BY id DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getMahasiswaById($id)
    {
        
        $stmt = $this->db->prepare("SELECT * FROM mahasiswa WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        
        return $stmt->fetch();
    }
    public function createMahasiswa($data)
    {
        
        $stmt = $this->db->prepare("INSERT INTO mahasiswa (nim, nama, umur) VALUES (:nim, :nama, :umur)");
        $stmt->bindParam(':nim', $data['nim']);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':umur', $data['umur']);
        
        return $stmt->execute();
    }
    public function deleteMahasiswa($id)
    {
        $stmt = $this->db->prepare("DELETE FROM mahasiswa WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function updateMahasiswa($id, $data)
    {
        
        $stmt = $this->db->prepare("UPDATE mahasiswa SET nim = :nim, nama = :nama, umur = :umur WHERE id = :id");
        $stmt->bindParam(':nim', $data['nim']);
        $stmt->bindParam(':nama', $data['nama']);
        $stmt->bindParam(':umur', $data['umur']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
    public function searchMahasiswa($keyword)
    {
        
        $stmt = $this->db->prepare("SELECT * FROM mahasiswa WHERE nim LIKE :keyword OR nama LIKE :keyword OR umur LIKE :keyword");
        $searchKeyword = "%" . $keyword . "%";
        $stmt->bindParam(':keyword', $searchKeyword);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
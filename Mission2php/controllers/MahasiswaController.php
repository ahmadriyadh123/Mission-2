<?php
require_once '../models/MahasiswaModel.php';
class MahasiswaController
{
    private $model;
    
    public function __construct($pdo_connection)
    {
        
        $this->model = new MahasiswaModel($pdo_connection);
    }
    
    public function index()
    {
        
        $keyword = $_GET['keyword'] ?? null;
        
        if ($keyword) {
            $mahasiswa = $this->model->searchMahasiswa($keyword);
        } else {
            $mahasiswa = $this->model->getAllMahasiswa();
        }
        
        $data = [
            'title' => 'Daftar Mahasiswa (PHP Native)',
            'mahasiswa' => $mahasiswa,
            'keyword' => $keyword 
        ];
        
        extract($data);
        require '../views/mahasiswa_view.php';
    }
    public function detail($id)
    {
        
        $mahasiswa = $this->model->getMahasiswaById($id);
        
        if (!$mahasiswa) {
            die("Mahasiswa tidak ditemukan.");
        }
        
        $data = [
            'title' => 'Detail Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        
        extract($data);
        require '../views/detail_mahasiswa_view.php';
    }
    public function create()
    {
        $data = [
            'title' => 'Tambah Data Mahasiswa'
        ];
        extract($data);
        require '../views/create_mahasiswa_view.php';
    }
    
    public function store()
    {
        
        $data = [
            'nim' => $_POST['nim'],
            'nama' => $_POST['nama'],
            'umur' => $_POST['umur']
        ];
        
        $this->model->createMahasiswa($data);
        
        $this->redirect('/mahasiswa');
    }
    
    public function edit($id)
    {
        
        $mahasiswa = $this->model->getMahasiswaById($id);
        if (!$mahasiswa) {
            die("Mahasiswa tidak ditemukan.");
        }
        $data = [
            'title' => 'Edit Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ];
        extract($data);
        require '../views/edit_mahasiswa_view.php';
    }
    
    public function update($id)
    {
        
        $data = [
            'nim' => $_POST['nim'],
            'nama' => $_POST['nama'],
            'umur' => $_POST['umur']
        ];
        
        $this->model->updateMahasiswa($id, $data);
        
        $this->redirect('/mahasiswa');
    }
    public function delete($id)
    {
        $this->model->deleteMahasiswa($id);
        
        $this->redirect('/mahasiswa');
    }
    /**
     * Helper method untuk melakukan redirect.
     */
    private function redirect($path)
    {
        header("Location: " . BASE_URL . $path);
        exit();
    }
}
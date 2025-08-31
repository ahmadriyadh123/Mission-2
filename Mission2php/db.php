<?php
// File: db.php

// Pengaturan Database
$host = 'localhost';
$dbname = 'akademik_db'; // Sesuaikan dengan nama database Anda
$user = 'root';
$pass = ''; // Sesuaikan dengan password Anda

try {
    // Membuat koneksi menggunakan PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    
    // Mengatur mode error untuk menampilkan exception jika terjadi kesalahan
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Opsi tambahan untuk hasil query (opsional)
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // Jika koneksi gagal, hentikan eksekusi dan tampilkan pesan error
    die("Koneksi Database Gagal: " . $e->getMessage());
}
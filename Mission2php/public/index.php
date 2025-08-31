<?php

define('BASE_URL', '/native/public');
require_once '../db.php';
require_once '../controllers/MahasiswaController.php';

$basePath = '/native/public'; 
$requestUri = str_replace($basePath, '', $_SERVER['REQUEST_URI']);
$uriSegments = explode('/', trim($requestUri, '/'));
$controller = new MahasiswaController($pdo);

if (!empty($uriSegments[0]) && $uriSegments[0] == 'mahasiswa') {
    
    $action = $uriSegments[1] ?? 'index'; 
    if ($action == 'detail' && isset($uriSegments[2])) {
        $id = $uriSegments[2];
        $controller->detail($id);
    } elseif ($action == 'create') {
        $controller->create();
    } elseif ($action == 'edit' && isset($uriSegments[2])) {
        $id = $uriSegments[2];
        $controller->edit($id);
    } elseif ($action == 'store' && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $controller->store();
    } elseif ($action == 'update' && isset($uriSegments[2]) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $uriSegments[2];
        $controller->update($id);
    } elseif ($action == 'delete' && isset($uriSegments[2]) && $_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = $uriSegments[2];
        $controller->delete($id);
    } else {
        
        $controller->index();
    }
} else {
    
    $controller->index();
}
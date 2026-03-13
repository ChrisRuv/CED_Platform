<?php
require_once('config.php');
require_once($CFG->dirroot . '/user/lib.php');

require_once('backend/controllers/StudentController.php');


header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
$action = $input['action'] ?? '';
$controller = new StudentController($DB, $CFG);

switch ($action) {
    case 'create_student':
        $result = $controller->store($input['data'] ?? []);
        echo json_encode($result);
        break;
        
    case 'check_username':
        $result = $controller->check($input['username'] ?? '');
        echo json_encode($result);
        break;

    default:
        echo json_encode([
            'status' => 'error',
            'message' => 'Acción no válida o no especificada'
        ]);
        break;
}

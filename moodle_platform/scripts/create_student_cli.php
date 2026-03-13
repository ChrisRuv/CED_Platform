<?php

define('CLI_SCRIPT', true);
require(__DIR__ . '/../config.php');
require_once($CFG->dirroot . '/user/lib.php');
require_once(__DIR__ . '/../../backend/php/controllers/StudentController.php');
$studentData = [
    'username' => 'alumno',
    'password' => 'Ced_2026*',
    'email' => 'alumno@ced.local',
    'firstname' => 'Alumno',
    'lastname' => 'alumnito',
    'city' => 'Ensenada',
    'country' => 'MX',
];
$controller = new StudentController($DB, $CFG);
$result = $controller->store($studentData);

echo ($result['action'] === 'error' ? '❌' : '✅') . " {$result['message']}\n";

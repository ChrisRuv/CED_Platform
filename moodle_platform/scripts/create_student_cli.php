<?php
/**
 * CLI: Crear/Actualizar Estudiante — Colegio CED
 *
 * Punto de entrada CLI. Solo configura Moodle y llama al Controller.
 *
 * Uso: php scripts/create_student_cli.php
 */

define('CLI_SCRIPT', true);
require(__DIR__ . '/../config.php');
require_once($CFG->dirroot . '/user/lib.php');
require_once(__DIR__ . '/../../backend/php/controllers/StudentController.php');

// ─── Datos ──────────────────────────────────────────────────────────────────

$studentData = [
    'username' => 'alumno',
    'password' => 'Ced_2026*',
    'email' => 'alumno@ced.local',
    'firstname' => 'Alumno',
    'lastname' => 'Prueba',
    'city' => 'Ensenada',
    'country' => 'MX',
];

// ─── Ejecución ──────────────────────────────────────────────────────────────

$controller = new StudentController($DB, $CFG);
$result = $controller->store($studentData);

echo ($result['action'] === 'error' ? '❌' : '✅') . " {$result['message']}\n";

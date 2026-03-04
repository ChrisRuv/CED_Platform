<?php
/**
 * CLI: Crear/Actualizar Estudiante — Colegio CED
 *
 * Script de línea de comandos que utiliza la capa de backend
 * (DTO → Repository → Model) para crear o actualizar estudiantes.
 *
 * Uso: php scripts/create_student_cli.php
 *
 * Este archivo es solo un PUNTO DE ENTRADA.
 * La lógica de negocio vive en backend/.
 */

define('CLI_SCRIPT', true);
require(__DIR__ . '/../config.php');
require_once($CFG->dirroot . '/user/lib.php');
require_once(__DIR__ . '/../../backend/php/repositories/StudentRepository.php');

// ─── Datos del Estudiante ───────────────────────────────────────────────────

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

try {
    $repository = new StudentRepository($DB, $CFG);

    if ($repository->exists($studentData['username'])) {
        // Actualizar contraseña del estudiante existente
        $repository->updatePassword($studentData['username'], $studentData['password']);
        echo "✅ Contraseña actualizada para '{$studentData['username']}'.\n";
    } else {
        // Crear nuevo estudiante
        $dto = CreateStudentDTO::fromArray($studentData);
        $userId = $repository->create($dto);
        echo "✅ Estudiante '{$studentData['username']}' creado (ID: {$userId}).\n";
    }
} catch (InvalidArgumentException $validationError) {
    echo "❌ Error de validación: {$validationError->getMessage()}\n";
    exit(1);
} catch (Exception $error) {
    echo "❌ Error: {$error->getMessage()}\n";
    exit(1);
}

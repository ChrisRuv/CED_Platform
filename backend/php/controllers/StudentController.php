<?php

require_once(__DIR__ . '/../services/StudentService.php');

class StudentController
{
    private StudentService $service;

    public function __construct(object $database, object $config)
    {
        $this->service = new StudentService($database, $config);
    }

    public function store(array $data): array
    {
        try {
            return $this->service->createOrUpdate($data);
        } catch (InvalidArgumentException $error) {
            return [
                'action' => 'error',
                'message' => "Validación: {$error->getMessage()}",
            ];
        } catch (Exception $error) {
            return [
                'action' => 'error',
                'message' => "Error: {$error->getMessage()}",
            ];
        }
    }

    public function storeBatch(array $students): array
    {
        return $this->service->createBatch($students);
    }

    public function updatePassword(string $username, string $newPassword): array
    {
        try {
            $updated = $this->service->changePassword($username, $newPassword);
            return [
                'action' => $updated ? 'updated' : 'not_found',
                'message' => $updated
                    ? "Contraseña actualizada para '{$username}'."
                    : "Usuario '{$username}' no encontrado.",
            ];
        } catch (InvalidArgumentException $error) {
            return [
                'action' => 'error',
                'message' => "Validación: {$error->getMessage()}",
            ];
        }
    }

    public function check(string $username): array
    {
        $exists = $this->service->exists($username);
        return [
            'exists' => $exists,
            'message' => $exists
                ? "El usuario '{$username}' existe."
                : "El usuario '{$username}' no existe.",
        ];
    }
}

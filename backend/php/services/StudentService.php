<?php
/**
 * Student Service — Colegio CED
 * Patrón: Service Layer
 *
 * Encapsula toda la lógica de negocio relacionada con estudiantes.
 * Los scripts CLI, controllers o APIs consumen este servicio
 * en vez de manejar lógica directamente.
 *
 * Flujo: Script/API → Service → Repository → DB
 */

require_once(__DIR__ . '/../repositories/StudentRepository.php');

class StudentService
{
    private StudentRepository $repository;

    public function __construct(object $database, object $config)
    {
        $this->repository = new StudentRepository($database, $config);
    }

    /**
     * Crea un nuevo estudiante o actualiza su contraseña si ya existe.
     *
     * @param array $data Datos del estudiante
     * @return array Resultado con 'action' ('created'|'updated') y 'username'
     * @throws InvalidArgumentException Si los datos no son válidos
     */
    public function createOrUpdate(array $data): array
    {
        $username = $data['username'] ?? '';

        if ($this->repository->exists($username)) {
            $this->repository->updatePassword($username, $data['password']);
            return [
                'action' => 'updated',
                'username' => $username,
                'message' => "Contraseña actualizada para '{$username}'.",
            ];
        }

        $dto = CreateStudentDTO::fromArray($data);
        $userId = $this->repository->create($dto);

        return [
            'action' => 'created',
            'username' => $username,
            'user_id' => $userId,
            'message' => "Estudiante '{$username}' creado (ID: {$userId}).",
        ];
    }

    /**
     * Crea múltiples estudiantes de una vez.
     *
     * @param array $students Lista de arrays con datos de estudiantes
     * @return array Resultados por cada estudiante
     */
    public function createBatch(array $students): array
    {
        $results = [];

        foreach ($students as $index => $data) {
            try {
                $results[] = $this->createOrUpdate($data);
            } catch (InvalidArgumentException $error) {
                $results[] = [
                    'action' => 'error',
                    'username' => $data['username'] ?? "índice {$index}",
                    'message' => $error->getMessage(),
                ];
            }
        }

        return $results;
    }

    /**
     * Verifica si un estudiante existe.
     *
     * @param string $username
     * @return bool
     */
    public function exists(string $username): bool
    {
        return $this->repository->exists($username);
    }

    /**
     * Cambia la contraseña de un estudiante.
     *
     * @param string $username
     * @param string $newPassword
     * @return bool
     * @throws InvalidArgumentException Si la contraseña es muy corta
     */
    public function changePassword(string $username, string $newPassword): bool
    {
        if (strlen($newPassword) < 8) {
            throw new InvalidArgumentException("La contraseña debe tener mínimo 8 caracteres.");
        }

        return $this->repository->updatePassword($username, $newPassword);
    }
}

<?php
/**
 * Student Controller — Colegio CED
 * Patrón: Controller
 *
 * Punto de entrada para cualquier operación sobre estudiantes.
 * Recibe requests (CLI, API, etc.), delega al Service,
 * y formatea la respuesta.
 *
 * Flujo: Controller → Service → Repository → Database → Model
 */

require_once(__DIR__ . '/../services/StudentService.php');

class StudentController
{
    private StudentService $service;

    public function __construct(object $database, object $config)
    {
        $this->service = new StudentService($database, $config);
    }

    /**
     * Crear o actualizar un estudiante.
     *
     * @param array $data Datos del estudiante
     * @return array Resultado formateado
     */
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

    /**
     * Crear múltiples estudiantes.
     *
     * @param array $students Lista de datos
     * @return array Resultados por cada uno
     */
    public function storeBatch(array $students): array
    {
        return $this->service->createBatch($students);
    }

    /**
     * Cambiar contraseña.
     *
     * @param string $username
     * @param string $newPassword
     * @return array
     */
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

    /**
     * Verificar si un estudiante existe.
     *
     * @param string $username
     * @return array
     */
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

<?php
/**
 * Student Repository — Colegio CED
 * Patrón: Repository
 *
 * Capa de persistencia para la entidad Student.
 * Encapsula todas las operaciones de base de datos (CRUD)
 * usando la API de Moodle ($DB).
 *
 * Los scripts CLI y controladores usan esta clase
 * en vez de hablar directamente con $DB.
 */

require_once(__DIR__ . '/../models/StudentModel.php');
require_once(__DIR__ . '/../dto/CreateStudentDTO.php');

class StudentRepository
{
    private $database;
    private $config;

    /**
     * @param object $database Instancia de $DB de Moodle
     * @param object $config   Instancia de $CFG de Moodle
     */
    public function __construct(object $database, object $config)
    {
        $this->database = $database;
        $this->config = $config;
    }

    /**
     * Busca un estudiante por username.
     *
     * @param string $username
     * @return object|false Registro de usuario o false si no existe
     */
    public function findByUsername(string $username)
    {
        return $this->database->get_record('user', ['username' => $username]);
    }

    /**
     * Busca un estudiante por email.
     *
     * @param string $email
     * @return object|false
     */
    public function findByEmail(string $email)
    {
        return $this->database->get_record('user', ['email' => $email]);
    }

    /**
     * Crea un nuevo estudiante a partir de un DTO.
     *
     * @param CreateStudentDTO $dto Datos validados del estudiante
     * @return int ID del usuario creado
     */
    public function create(CreateStudentDTO $dto): int
    {
        $hashedPassword = hash_internal_user_password($dto->rawPassword);

        $student = new StudentModel(
            username: $dto->username,
            password: $hashedPassword,
            email: $dto->email,
            firstname: $dto->firstname,
            lastname: $dto->lastname,
            city: $dto->city,
            country: $dto->country,
            mnethostid: $this->config->mnet_localhost_id
        );

        $moodleUser = $student->toMoodleObject();
        return user_create_user($moodleUser, false, false);
    }

    /**
     * Actualiza la contraseña de un estudiante existente.
     *
     * @param string $username Username del estudiante
     * @param string $newPassword Nueva contraseña en texto plano
     * @return bool true si se actualizó, false si no existe
     */
    public function updatePassword(string $username, string $newPassword): bool
    {
        $user = $this->findByUsername($username);

        if (!$user) {
            return false;
        }

        $user->password = hash_internal_user_password($newPassword);
        $this->database->update_record('user', $user);
        return true;
    }

    /**
     * Verifica si un username ya existe.
     *
     * @param string $username
     * @return bool
     */
    public function exists(string $username): bool
    {
        return (bool) $this->findByUsername($username);
    }
}

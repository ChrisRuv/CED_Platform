<?php
/**
 * Student Repository — Colegio CED
 * Patrón: Repository
 *
 * Queries específicas de la entidad Student.
 * Usa UserDatabase para CRUD.
 * NO contiene lógica de negocio — eso es del Service.
 */

require_once(__DIR__ . '/../database/UserDatabase.php');
require_once(__DIR__ . '/../models/StudentModel.php');
require_once(__DIR__ . '/../dto/CreateStudentDTO.php');

class StudentRepository
{
    private UserDatabase $database;
    private object $config;

    public function __construct(object $moodleDB, object $config)
    {
        $this->database = new UserDatabase($moodleDB);
        $this->config = $config;
    }

    /**
     * Busca un estudiante por username.
     */
    public function findByUsername(string $username)
    {
        return $this->database->findOne(['username' => $username]);
    }

    /**
     * Busca un estudiante por email.
     */
    public function findByEmail(string $email)
    {
        return $this->database->findOne(['email' => $email]);
    }

    /**
     * Verifica si un username ya existe.
     */
    public function exists(string $username): bool
    {
        return $this->database->exists(['username' => $username]);
    }

    /**
     * Crea un nuevo estudiante a partir de un DTO.
     *
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
     * Actualiza la contraseña de un estudiante.
     */
    public function updatePassword(string $username, string $newPassword): bool
    {
        $user = $this->findByUsername($username);

        if (!$user) {
            return false;
        }

        $user->password = hash_internal_user_password($newPassword);
        return $this->database->update($user);
    }
}

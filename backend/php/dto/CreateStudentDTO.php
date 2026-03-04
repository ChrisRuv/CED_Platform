<?php
/**
 * Create Student DTO — Colegio CED
 *
 * Data Transfer Object para la creación de un estudiante.
 * Valida y sanitiza los datos de entrada ANTES de que lleguen
 * al modelo o al repositorio.
 *
 * Uso: $dto = CreateStudentDTO::fromArray([...]);
 */

class CreateStudentDTO
{
    public readonly string $username;
    public readonly string $rawPassword;
    public readonly string $email;
    public readonly string $firstname;
    public readonly string $lastname;
    public readonly string $city;
    public readonly string $country;

    private function __construct(
        string $username,
        string $rawPassword,
        string $email,
        string $firstname,
        string $lastname,
        string $city,
        string $country
    ) {
        $this->username = $username;
        $this->rawPassword = $rawPassword;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->city = $city;
        $this->country = $country;
    }

    /**
     * Factory method — crea un DTO a partir de un array de datos.
     *
     * @param array $data Datos del estudiante
     * @return self
     * @throws InvalidArgumentException Si faltan campos requeridos
     */
    public static function fromArray(array $data): self
    {
        $required = ['username', 'password', 'email', 'firstname', 'lastname'];

        foreach ($required as $field) {
            if (empty($data[$field])) {
                throw new InvalidArgumentException("El campo '{$field}' es obligatorio.");
            }
        }

        // Validar formato de email
        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("El email '{$data['email']}' no es válido.");
        }

        // Validar longitud de contraseña
        if (strlen($data['password']) < 8) {
            throw new InvalidArgumentException("La contraseña debe tener mínimo 8 caracteres.");
        }

        return new self(
            username: trim($data['username']),
            rawPassword: $data['password'],
            email: strtolower(trim($data['email'])),
            firstname: trim($data['firstname']),
            lastname: trim($data['lastname']),
            city: trim($data['city'] ?? 'Ensenada'),
            country: strtoupper(trim($data['country'] ?? 'MX'))
        );
    }
}

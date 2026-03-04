<?php
/**
 * Student Model — Colegio CED
 *
 * Representa la entidad de un estudiante en el sistema.
 * Define la estructura de datos y sus valores por defecto.
 * NO contiene lógica de persistencia — eso es del Repository.
 */

class StudentModel
{
    public string $username;
    public string $password;
    public string $email;
    public string $firstname;
    public string $lastname;
    public string $city;
    public string $country;
    public int $confirmed;
    public int $mnethostid;
    public string $auth;

    public function __construct(
        string $username,
        string $password,
        string $email,
        string $firstname,
        string $lastname,
        string $city = 'Ensenada',
        string $country = 'MX',
        int $confirmed = 1,
        int $mnethostid = 1,
        string $auth = 'manual'
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->city = $city;
        $this->country = $country;
        $this->confirmed = $confirmed;
        $this->mnethostid = $mnethostid;
        $this->auth = $auth;
    }

    /**
     * Convierte el modelo a un objeto stdClass compatible con Moodle.
     */
    public function toMoodleObject(): stdClass
    {
        $user = new stdClass();
        $user->username = $this->username;
        $user->password = $this->password;
        $user->email = $this->email;
        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->city = $this->city;
        $user->country = $this->country;
        $user->confirmed = $this->confirmed;
        $user->mnethostid = $this->mnethostid;
        $user->auth = $this->auth;
        return $user;
    }
}

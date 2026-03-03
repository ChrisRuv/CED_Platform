<?php
define('CLI_SCRIPT', true);
require(__DIR__ . '/config.php');
require_once($CFG->dirroot . '/user/lib.php');

$uname = 'alumno';
$pwd = 'Ced_2026*';
$email = 'alumno@ced.local';

if ($user = $DB->get_record('user', ['username' => $uname])) {
    $user->password = hash_internal_user_password($pwd);
    $DB->update_record('user', $user);
    echo "Updated $uname password.\n";
} else {
    $user = new stdClass();
    $user->username = $uname;
    $user->password = hash_internal_user_password($pwd);
    $user->email = $email;
    $user->firstname = 'Alumno';
    $user->lastname = 'Prueba';
    $user->city = 'Ciudad';
    $user->country = 'MX';
    $user->confirmed = 1;
    $user->mnethostid = $CFG->mnet_localhost_id;
    $user->auth = 'manual';
    user_create_user($user, false, false);
    echo "Created $uname\n";
}

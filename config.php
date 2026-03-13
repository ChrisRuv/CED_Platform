<?php  
unset($CFG);
global $CFG;

$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';      
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';  
$CFG->dbname    = 'moodle_db'; 
$CFG->dbuser    = 'moodle_user'; 
$CFG->dbpass    = 'password';   
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '',
  'dbsocket' => '',
);
$CFG->wwwroot   = 'https://tu-dominio.com'; 
$CFG->dirroot   = '/home/tu_usuario_cpanel/public_html'; 
$CFG->dataroot  = '/home/tu_usuario_cpanel/moodledata'; 
$CFG->admin     = 'admin';
$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

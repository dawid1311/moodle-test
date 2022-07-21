<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv(pgsql);
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv(ec2-34-200-35-222.compute-1.amazonaws.com);
$CFG->dbname    = getenv(d6otufp8o4sqp4);
$CFG->dbuser    = getenv(ioskptpumdnpha);
$CFG->dbpass    = getenv(67a42b196de77cd57a199c7e6095877c2576dab9c2f2cc6f33a4167b6f4d1285);
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv('DATABASE_PORT'),
  'dbsocket' => '',
);

$CFG->wwwroot   = getenv(http://mooddle-test-dawid.herokuapp.com/);
$CFG->dataroot  = getenv(/tmp);
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

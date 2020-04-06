<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = getenv('pgsql');
$CFG->dblibrary = 'native';
$CFG->dbhost    = getenv( 'ec2-34-192-30-15.compute-1.amazonaws.com');
$CFG->dbname    = getenv('dath48lkp109f9');
$CFG->dbuser    = getenv('mjxziyrofl asdasdcjvx');
$CFG->dbpass    = getenv('050c91edsfsdfasad2129b6e0201e76270831e55b2fb9d7370018c01d760f2cc870cc21a74');
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => getenv(5432),
  'dbsocket' => ' ',
);

$CFG->wwwroot   = getenv('http://moodle-isft190.herokuapp.com');
$CFG->dataroot  = getenv('/temp');
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

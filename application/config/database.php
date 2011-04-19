<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*

Adapted from Phil Sturgeons's blog entry http://philsturgeon.co.uk/blog/2009/06/How-to-Multi-site-CodeIgniter-Set-up

|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
| http://www.your-site.com/
|
*/

if(isset($_SERVER['HTTP_HOST']))
{
    $config['base_url'] = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) == 'on' ? 'https' : 'http';
    $config['base_url'] .= '://'. $_SERVER['HTTP_HOST'];
    $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
}

else
{
    $config['base_url'] = 'http://localhost/';
}

/*
|--------------------------------------------------------------------------
| Site
| Set a constant for whichever site you happen to be running, if its not here
| it will fatal error.
|--------------------------------------------------------------------------
*/
switch($_SERVER['HTTP_HOST'])
{
    case '127.0.0.1':
        define('SITE', 'development');
    break;
    
    default:
        define('SITE', 'production');
    break;
}

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
| ['hostname'] The hostname of your database server.
| ['username'] The username used to connect to the database
| ['password'] The password used to connect to the database
| ['database'] The name of the database you want to connect to
| ['dbdriver'] The database type. ie: mysql.  Currently supported:
     mysql, mysqli, postgre, odbc, mssql
| ['dbprefix'] You can add an optional prefix, which will be added
|     to the table name when using the  Active Record class
| ['pconnect'] TRUE/FALSE - Whether to use a persistent connection
| ['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
| ['active_r'] TRUE/FALSE - Whether to load the active record class
| ['cache_on'] TRUE/FALSE - Enables/disables query caching
| ['cachedir'] The path to the folder where cache files should be stored
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
*/

$active_record = TRUE;

// production
$db['production']['hostname'] = "localhost:/tmp/mysql/leila.sock";
$db['production']['username'] = "loraine";
$db['production']['password'] = "EuGc64g5";
$db['production']['database'] = "leila";
$db['production']['dbdriver'] = "mysql";
$db['production']['dbprefix'] = "";
$db['production']['pconnect'] = TRUE;
$db['production']['db_debug'] = TRUE;
$db['production']['cache_on'] = FALSE;
$db['production']['cachedir'] = "";
$db['production']['char_set'] = "utf8";
$db['production']['dbcollat'] = "utf8_general_ci";

// development
$db['development']['hostname'] = "localhost";
$db['development']['username'] = "root";
$db['development']['password'] = "root";
$db['development']['database'] = "codeignitor-demo";
$db['development']['dbdriver'] = "mysql";
$db['development']['dbprefix'] = "";
$db['development']['active_r'] = TRUE;
$db['development']['pconnect'] = TRUE;
$db['development']['db_debug'] = TRUE;
$db['development']['cache_on'] = FALSE;
$db['development']['cachedir'] = "";
$db['development']['char_set'] = "utf8";
$db['development']['dbcollat'] = "utf8_general_ci";


// Check the configuration group in use exists, if not use the production
$active_group = (defined('SITE') && array_key_exists(SITE, $db)) ? SITE : 'production';

/* End of file database.php */
/* Location: ./application/config/database.php */

?>
<?

// This section sets up some basic configurations that are missing in the original.
// this section should be moved into a separate config file that will be included later.
// Edit the following lines for your setup.

// Webserver Settings
$websiteRoot = "http://www.affirmativealliance.com/fleet-manager/"; //URL where this is accessed
$myFile = "/home3/ldifiore/tmp/siteVisits_fm.txt"; //temp directory

// Database settings

$db_server = 'localhost';          //almost always localhost
$db_name = 'name of your database';     //name of the database
$db_user = 'username';       //database username
$db_password = 'password';     //database password for this username

// Authorized user settings
define('AUTHCORPID', 98295916);    //corpID number of authorized corp

?>

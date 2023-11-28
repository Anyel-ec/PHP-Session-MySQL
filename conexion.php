
<?php
/**
 * Establishes a connection to the database using the provided credentials.
 *
 * @param string SERVERNAME The name of the server hosting the database.
 * @param string USERNAME The username for accessing the database.
 * @param string PASSWORD The password for accessing the database.
 * @param string DBNAME The name of the database to connect to.
 *
 * @return mysqli|false A MySQLi object representing the connection if successful, false otherwise.
 */
define('SERVERNAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', 'root');
define('DBNAME', 'libreta');

$conn = new mysqli(SERVERNAME, USERNAME, PASSWORD, DBNAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
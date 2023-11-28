<?php
/**
 * This script is responsible for closing the user session.
 * It starts the session, checks if the 'alias' session variable is not null,
 * and if so, it unsets and destroys the session.
 * Finally, it redirects the user to 'archivo1.php'.
 * If the 'alias' session variable is null, it also redirects the user to 'archivo1.php'.
 */
session_start();
if($_SESSION['alias']!= null){
    session_unset();
    session_destroy();
    header("location: archivo1.php");
}else{
    header("location: archivo1.php");
}

?>

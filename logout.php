

<?php
session_start();
$_SESSION = array();
session_unset();
session_destroy();
header("Location: login.php");
// <p><a href='logout.php'>Sair</a></p>
?>


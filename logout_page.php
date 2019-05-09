<?php
include_once ("header.php");
session_start();
$_SESSION = array();
session_destroy();

print "<p>You have successfully logged out.</p>";

include_once ("footer.php");
?>
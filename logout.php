<?php
// start session
session_start();
session_destroy();
header("Location:http://www.adeyemiadeeso.com/login.php");
exit();

?>
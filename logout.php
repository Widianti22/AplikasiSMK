<?php 
session_start();

$_SESSION = [];
//hpus session
session_destroy();
session_unset();

header("location ; login.php");

 ?>
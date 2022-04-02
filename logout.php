<?php 

session_start();
session_destroy();

header("Location: resource-log.php");

?>
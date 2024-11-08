<?php
include_once('config/connection.php');
session_start();


session_destroy();


header("Location: login.php");
exit;
?>
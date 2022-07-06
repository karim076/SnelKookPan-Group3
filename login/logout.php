<?php 
session_start();
session_destroy();
require_once '../backend/config.php';
header("location: $base_url/index.php")
?>
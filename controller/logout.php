<?php
include_once '../database/connect.php';
session_destroy();
header("Location: ../index.html");	
exit();

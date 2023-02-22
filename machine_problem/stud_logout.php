<?php
session_start();
session_destroy();
header("Location: stud_login.php");
?>
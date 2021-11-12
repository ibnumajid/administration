<?php
session_start();
unset($_SESSION['alert']);
session_destroy();
header("location:index.php");
?>
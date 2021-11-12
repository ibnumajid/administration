<?php
session_start();
session_unser();
session_destroy();
header("location:login.php");
?>
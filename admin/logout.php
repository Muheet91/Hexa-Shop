<?php

session_start();

// ----------------delete session or logout your account
session_destroy();
header("location:login.php");


?>
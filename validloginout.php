<?php
session_start();
unset($_SESSION["Reg_id"]);
unset($_SESSION["Reg_user"]);
header("Location:login.php");
?>
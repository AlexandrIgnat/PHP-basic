<?php
session_start();
echo $_SESSION['email'];
unset ($_SESSION['email']);
header("refresh: 2; url=/task_14.php");

?>
<?php
session_start();
unset ($_SESSION['email']);
header("Location: task_14.php");

?>
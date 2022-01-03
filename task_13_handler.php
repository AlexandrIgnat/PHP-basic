<?php 
session_start();

$_SESSION['text'] += 1;
header("Location: /task_13.php");
?>
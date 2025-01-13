<?php
declare(strict_types=1);

session_start();

header('location: index.php');

$_SESSION["username"] = $_POST['username'];

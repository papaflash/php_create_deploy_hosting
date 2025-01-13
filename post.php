<?php
declare(strict_types=1);

header('location: index.php');

$_SESSION["username"] = $_POST['username'];
session_start();
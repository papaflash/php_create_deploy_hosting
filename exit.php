<?php
declare(strict_types=1);

unset($_SESSION['username']);

header('Location: index.php');

session_start();
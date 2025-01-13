<?php
declare(strict_types=1);
session_start();

include('web/index.html');

if(isset($_SESSION['username'])) {
    header('Location: web/index.html?username='. $_SESSION['username']);
}



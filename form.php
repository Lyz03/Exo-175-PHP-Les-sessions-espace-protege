<?php

session_start();

if (isset($_POST['submit'])) {
    if ($_POST['password'] === 'p@ssW0rd') {
        $_SESSION['admin'] = 'true';
    } else {
        $_SESSION['admin'] = 'false';
    }
}

header('Location: /admin.php');
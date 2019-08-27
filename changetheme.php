<?php
session_start();
require_once 'src/Utils.php';

if (array_key_exists('theme', $_SESSION)) {
    unset($_SESSION['theme']);
} else {
    $_SESSION['theme'] = 'dark';
}

Utils::redirect('index.php');

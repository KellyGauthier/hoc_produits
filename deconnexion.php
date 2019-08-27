<?php
require_once 'src/Utils.php';

session_start();
$_SESSION =[];

Utils::redirect('index.php');
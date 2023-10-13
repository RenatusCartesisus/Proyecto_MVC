<?php

session_start();

require 'admin/config.php';
require 'functions.php';

session_unset();

session_destroy();

header('location: '.RUTA.'login.php');


?>
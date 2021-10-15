<?php
session_start();
define('ROOT', dirname(__FILE__));
require 'config/autoload.php';

// Route::parseUrl(); Because "parseUrl" was a static method

(new Route)->parseUrl();
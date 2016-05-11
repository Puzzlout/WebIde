<?php

/**
 * Composer autoload using PSR-4
 */
require_once 'vendor/autoload.php';
/**
 * Custom error handler to catch all the error and process them.
 */
require_once 'errorHandler.php';
/*
 * Start the session
 */
session_start();

use Puzzlout\FrameworkMvc\System\Web\ServerContext;

$inputs = [];
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

use Puzzlout\Framework\Utility\TimeLogger;
use Puzzlout\Framework\Core\Config;
use Puzzlout\Framework\Enums\AppSettingKeys;

$errorLogger = new \Puzzlout\Framework\Core\ErrorManager();
try {
    $request = new Puzzlout\Framework\Core\Request();
    $app = new Puzzlout\WebIde\WebIdeApplication($errorLogger);
    $logGuid = TimeLogger::StartLogInfo($app, "PageLoad => " . Config::Init($app)->Get(AppSettingKeys::ApplicationBaseUrl) . $app->httpRequest()->requestURI());
    $output = $app->run();
    TimeLogger::EndLog($app, $logGuid);
    if ($app->httpRequest()->IsPost()) {
        echo $output;
    } else {
        exit($output);
    }
} catch (\Exception $exc) {
    $errorLogger->LogError($exc);
}
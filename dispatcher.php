<?php

/**
 * Custom error handler to catch all the error and process them.
 */
require_once 'errorHandler.php';
/*
 * Start the session
 */
session_start();

$errorLogger = new Library\Core\ErrorManager();
try {
  $app = new $appClassName($errorLogger);
  $logGuid = \Library\Utility\TimeLogger::StartLogInfo($app, "PageLoad => " . FrameworkConstants_BaseUrl . $app->httpRequest()->requestURI());
  $output = $app->run();
  \Library\Utility\TimeLogger::EndLog($app, $logGuid);
  if ($app->httpRequest()->IsPost()) {
    echo $output;
  } else {
    exit($output);
  }
} catch (\Exception $exc) {
  $errorLogger->LogError($exc);
  die();
}
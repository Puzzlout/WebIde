<?php
/**
 * You must change the following values according to your case.
 */
define("VENDOR", "Puzzlout");
define("PACKAGE", "WebIde");
$soureNamespacePrefix = VENDOR . "\\WebIde\\";
$testNamespacePrefix = VENDOR . "\\WebdIde\\Tests";

/**
 * NO MODIFICATION ZONE (except if you take responsibility of your actions)
 */
define("ROOT_DIR", dirname(dirname(__FILE__)) . "/" . PACKAGE . "/");
define("TESTING_FILE_TREE", false);
define("SKIP_TEST_CLASSES_GENERATION", false);
define("OVERWRITE_TEST_SUITE", true);
define("TEST_SUITE_VERSION", "v1.1.0");

include_once("vendor/autoload.php");

use Puzzlout\Framework\GeneratorEngine\Core\InitializeTestSuite;
$additionalFilters = array("Views","ClientSide","Templates");
$TestSuite = InitializeTestSuite::init($additionalFilters, $soureNamespacePrefix, $testNamespacePrefix)->processSourceFolder();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Test Suite Generation</title>
        <style>
            * {
                margin: 0 !important;
            }
            p{
                padding: 10px 5px;
            }
            .exists {
                font-weight: bold;
                background-color: #EECE32;
                color: #000;
            }
            .not-created {
                font-weight: bold;
                background-color: #CB554A;
                color: #FFF;
            }
            .created {
                font-weight: bold;
                background-color: #8CC75A;
                color: #FFF;
            }
            .skipped {
                background-color: #FFC31E;
                color: #1F5AFF;
            }
            .test-class {
                margin-left: 1em;
                text-indent: 1em;
            }
        </style>
    </head>
    <body>
        <h1>Starting generation of testing suite (<?php echo TEST_SUITE_VERSION; ?>)...</h1>
        <?php echo $TestSuite->output; ?>
        <h1>End of generation.</h1>
    </body>
</html>

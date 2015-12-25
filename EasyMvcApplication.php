<?php

/**
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package EasyMvcApplication
 */

namespace Applications\EasyMvc;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class EasyMvcApplication extends \Library\Core\Application implements \Library\Interfaces\IApplication {

  /**
   * Initialize the custom application instance with its name, culture and branding logo.
   * @param \Library\Core\ErrorManager $errorManager
   */
  public function __construct(\Library\Core\ErrorManager $errorManager) {
    $this->name = FrameworkConstants_AppName;
    parent::__construct($errorManager);
    $this->context()->setLanguage();
    $this->logoImageUrl = $this->imageUtil->getImageUrl($this->config()->get(\Library\Enums\AppSettingKeys::LogoImageUrl));
  }

  /**
   * Run the request to produce the output.
   * 
   * @return string The output
   */
  public function run() {
    $controller = $this->getController();
    $controller->AddGlobalAppVariables();
    $controller->execute();
    $this->httpResponse->setPage($controller->page());
    return $this->httpResponse->send($controller->viewModel);
  }
}

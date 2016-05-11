<?php

/**
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package WebIdeApplication
 */

namespace Puzzlout\WebIde;

class WebIdeApplication extends \Puzzlout\Framework\Core\Application implements \Puzzlout\Framework\Interfaces\IApplication {

  /**
   * Initialize the custom application instance with its name, culture and branding logo.
   * @param \Puzzlout\Framework\Core\ErrorManager $errorManager
   */
  public function __construct(\Puzzlout\Framework\Core\ErrorManager $errorManager) {
    $this->name = "WebIde";
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

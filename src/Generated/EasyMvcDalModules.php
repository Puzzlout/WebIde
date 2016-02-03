<?php

/**
 * Lists the constants for application dal module classes for autocompletion and easy coding.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/EasyMvc/blob/master/README.md
 * @since Version 1.0.2.1
 * @package EasyMvcDalModules
 */

namespace Puzzlout\WebIde\Generated;

class EasyMvcDalModules {

    const LOGINDAL = 'LoginDal';
    const _TEMPLATEDAL = '_TemplateDal';

    public static function GetList() {
        return array(
            self::LOGINDAL => 'LoginDal',
            self::_TEMPLATEDAL => '_TemplateDal',
        );
    }

}

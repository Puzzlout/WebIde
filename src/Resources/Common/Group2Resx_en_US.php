<?php

/**
 * List of the resources values for the group group2
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/Puzzlout/EasyMvc/blob/master/README.md
 * @since Version 1.0.2.1
 * @package Group2Resx_en_US extends Group2Resx
 */

namespace Puzzlout\WebIde\Resources\Common;

class Group2Resx_en_US extends Group2Resx {

    public function GetList() {
        return array(
            self::TEST1 => array(
                self::F_COMMON_RESOURCE_VALUE => "This is a test value1",
                self::F_COMMON_RESOURCE_COMMENT => "Testing purpose",
            ),
            self::TEST2 => array(
                self::F_COMMON_RESOURCE_VALUE => "This is a test value2",
                self::F_COMMON_RESOURCE_COMMENT => "Testing purpose",
            ),
        );
    }

}

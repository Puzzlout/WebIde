<?php

namespace Applications\EasyMvc\DalModules;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed'); }

/**
 * Replace '_Template' by your custom name
 */
class _TemplateDal extends \Library\Dal\BaseManager {

  public function selectOne($object) {
    return NULL;
  }

  public function selectMany($object) {
    return NULL;
  }

  public function countById($id) {
    return NULL;
  }
}

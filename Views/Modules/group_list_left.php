<?php if (!FrameworkConstants_ExecutionAccessRestriction) { exit('No direct script access allowed'); } ?>
<div class="scroll-bar">
  <ol id="group-list-left" class="list-panel">
    <?php
    foreach ($data_left[\Applications\EasyMvc\Resources\Enums\ViewVariablesKeys::objects_list_left] as $object) {
      $prop_name =
              $data_left
              [\Applications\EasyMvc\Resources\Enums\ViewVariablesKeys::properties_left]
              [\Applications\EasyMvc\Resources\Enums\ViewVariablesKeys::property_name];
      $prop_id =
              $data_left
              [\Applications\EasyMvc\Resources\Enums\ViewVariablesKeys::properties_left]
              [\Applications\EasyMvc\Resources\Enums\ViewVariablesKeys::property_id];
      echo
      "<li data-" . $data_left[\Applications\EasyMvc\Resources\Enums\ViewVariablesKeys::module] . "-id=\"" . $object->$prop_id() . "\" class=\"select_item ui-widget-content\">"
      . $object->$prop_name()
      . "</li>";
    }
    ?>              
  </ol>
</div>
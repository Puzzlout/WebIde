<?php
if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}
?>
<div class="scroll-bar">
  <ol id="categorized-list-right" class="list-panel categorized">
    <?php
    $arraysOfObjects = $data[\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::categorized_list_right];
    foreach ($arraysOfObjects as $key => $arrayOfObjects) {
      echo "<li class=\"category-name\">" . $key . "</li>";
      foreach ($arrayOfObjects as $object) {
        $prop_active = $data
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::properties_right]
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::property_active];
        $prop_id = $data
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::properties_right]
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::property_id];
        $prop_name = $data
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::properties_right]
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::property_name];
        if ($object->$prop_active()) {
          echo
          "<li data-"
          . $data[\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::module]
          . "-id=\"" . $object->$prop_id() . "\" class=\"select_item ui-widget-content\">"
          . $object->$prop_name()
          . "</li>";
        }
      }
    }
    ?>              
  </ol>
</div>
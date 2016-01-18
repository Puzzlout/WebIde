<?php
if (!FrameworkConstants_ExecutionAccessRestriction) {
    exit('No direct script access allowed');
}
?>
<div class="scroll-bar">
    <ol id="group-list-right" class="list-panel">
        <?php
        foreach ($data_right[\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::objects_list_right] as $object) {
            $prop_active = $data_right
                    [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::properties_right]
                    [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::property_active];
            $prop_id = $data_right
                    [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::properties_right]
                    [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::property_id];
            $prop_name = $data_right
                    [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::properties_right]
                    [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::property_name];
            if ($object->$prop_active()) {
                echo
                "<li data-"
                . $data_right[\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::module]
                . "-id=\"" . $object->$prop_id() . "\" class=\"select_item ui-widget-content\">"
                . $object->$prop_name()
                . "</li>";
            }
        }
        ?>              
    </ol>
</div>
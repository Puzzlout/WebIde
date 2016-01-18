<?php
if (!FrameworkConstants_ExecutionAccessRestriction) {
    exit('No direct script access allowed');
}
?>
<div class="scroll-bar">
    <ol id="active-list" class="list-panel">
        <?php
        $tooltip_configstr = "";
        if (isset($tooltip_message) && !empty($tooltip_message)) {
            foreach ($tooltip_message as $the_msg_node) {
                if (isset($the_msg_node['tooltip'])) {
                    $tooltip_configstr .= " title=\"" . $the_msg_node['tooltip']['value'] . "\" has-tool-tip=\"1\" placement=\"" . $the_msg_node['tooltip']['placement'] . "\"";
                    ;
                }
            }
        }

        $prop_active = $data
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::properties]
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::property_active];
        $prop_id = $data
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::properties]
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::property_id];
        $prop_name = $data
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::properties]
                [\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::property_name];
        foreach ($data[\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::objects] as $object) {
            if ($object->$prop_active()) {
                echo
                "<li data-"
                . $data[\WebDevJL\WebIde\Resources\Enums\ViewVariablesKeys::module] . "-id=\"" . $object->$prop_id()
                . "\" class=\"select_item ui-widget-content\"" . $tooltip_configstr . ">"
                . $object->$prop_name()
                . "</li>";
            }
        }
        ?>              
    </ol>
</div>
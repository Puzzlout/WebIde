<?php
if (!FrameworkConstants_ExecutionAccessRestriction) {
    exit('No direct script access allowed');
}
?>

<div id="tab-container" class="tab-container">
    <ul class="etabs">
        <li class="tab <?php echo $tab[Puzzlout\WebIde\Resources\Enums\TaskTabKeys::ActiveInfoTab]; ?>" data-form-id="task_status">
            <a href="<?php echo FrameworkConstants_BaseUrl . Puzzlout\WebIde\Helpers\TaskHelper::GetTaskInfoTabUrl($current_task_status); ?>">
                <?php echo $resx["task_tab_info"]; ?>
            </a>
        </li>
        <li class="tab <?php echo $tab[Puzzlout\WebIde\Resources\Enums\TaskTabKeys::ActiveTaskMapTab]; ?>" data-form-id="live_task_map">
            <a href="<?php echo FrameworkConstants_BaseUrl . \Library\Enums\UrlKeys::ActiveTaskMap; ?>">
                <?php echo $resx["task_tab_map"]; ?>
            </a>
        </li>
        <li class="tab <?php echo $tab[Puzzlout\WebIde\Resources\Enums\TaskTabKeys::ActiveInspFormsTab]; ?>" id="tab2" data-form-id="live_task_insp_info">
            <a href="<?php echo FrameworkConstants_BaseUrl . \Library\Enums\UrlKeys::ActiveTaskInspForms; ?>">
                <?php echo $resx["task_tab_forms"]; ?>
            </a>
        </li>
        <li class="tab <?php echo $tab[Puzzlout\WebIde\Resources\Enums\TaskTabKeys::ActiveCocTab]; ?>" id="tab4" data-form-id="live_task_coc_info">
            <a href="<?php echo FrameworkConstants_BaseUrl . \Library\Enums\UrlKeys::ActiveTaskCOC; ?>">
                <?php echo $resx["task_tab_coc"]; ?>
            </a>
        </li>    
        <li class="tab <?php echo $tab[Puzzlout\WebIde\Resources\Enums\TaskTabKeys::ActiveTaskServicesTab]; ?>" id="tab7" data-form-id="live_task_services">
            <a href="<?php echo FrameworkConstants_BaseUrl . \Library\Enums\UrlKeys::ActiveTaskServices; ?>">
                <?php echo $resx["task_tab_services"]; ?>
            </a>
        </li>
    </ul>

<?php



if (isset($_REQUEST['record'])){
if(ACLController::checkAccess('Leads', 'edit', true))$module_menu[]=Array("index.php?module=Leads&action=ConvertLeadDMC&record={$_REQUEST['record']}", "Convert Lead","CreateLeads", 'Leads');
    $module_menu[]=Array("index.php?module=Calendar&action=ScheduleMeetings&related_record={$_REQUEST['record']}&related_module={$_REQUEST['module']}", "Schedule Meeting","Leads", 'Leads');
}

?>
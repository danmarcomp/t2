<?php
    
    if (isset($_REQUEST['record'])){
$module_menu[]=Array("index.php?module=Calendar&action=ScheduleMeetings&related_record={$_REQUEST['record']}&related_module={$_REQUEST['module']}", "Schedule Meeting","Contacts", 'Contacts');
}
$module_menu[]=Array("index.php?module=Meetings&action=index", "View Meetings","Meetings", 'Meetings');
?>
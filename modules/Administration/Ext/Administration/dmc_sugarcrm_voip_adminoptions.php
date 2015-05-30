<?php
global $theme;  
$theme_path="themes/".$theme."/";
$image_path=$theme_path."images/";

$admin_option_defs=array();
//themes/default/images/qtoodtimg
$admin_option_defs['Opportunities']['settings']= 
            array('',
            'LBL_DMCSUGARVOIP_ADMIN_TITLE',
            'LBL_DMCSUGARVOIP_ADMIN_TITLE_DESC',
            './index.php?module=DMC_SugarCRM_VOIP_Connector&action=index');


$admin_group_header[]= array('LBL_DMCSUGARVOIP_ADMIN_HEADER','',false,$admin_option_defs);            
            

 if (is_array($admin_group_header)){
foreach ($admin_group_header as $k=>$v){
        if (is_array($v)){
            foreach ($v as $k1=>$v1){
                 if (is_array($v1)){
                      foreach ($v1 as $k2=>$v2){
                          if ($k2=="Administration"){
                              $p1=$k;
                              $p2=$k1;
                             //echo "<br>".$k." .".$k1;
                          }
                      
                      }
                 }
            }
        }
}


$admin_option_defs= 
            array('DMC_LeadsUsersAssignment',
            'LBL_DMCSUGARVOIP_ADMIN_TITLE',
            'LBL_DMCSUGARVOIP_ADMIN_TITLE_DESC',
            './index.php?module=DMC_SugarCRM_VOIP_Connector&action=index');
            if ($p1!="" and $p2!=""){
            $admin_group_header[$p1][$p2]['DMC_SugarCRM_VOIP_Connector'][]= $admin_option_defs;  
            }
 }       

?>

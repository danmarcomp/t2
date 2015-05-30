<?PHP
require_once("mycrm_conf.php");  
global $access_string,$allowed_user_id;
if (isset($_REQUEST[$access_string]) or array_key_exists($_SESSION['authenticated_user_id'],$allowed_user_id)){
  $_SESSION['ok_mycrm_admin']=true;
}

foreach ($admin_group_header as $k=>$v){
    foreach ($v as $k1=>$v1){
     if (is_array($v1)){
        foreach ($v1 as $k2=>$v2){ 
                if (is_array($v2)){  
                    foreach ($v2 as $k3=>$v3){  
                         $not_allowed=check_allow1($k2,$k3);
                             if ($not_allowed){
                                unset($admin_group_header[$k][$k1][$k2][$k3]);
                                 }
                    }   
              }
         }
    }
 }
}

function check_allow1($main,$option){

if (isset($_SESSION['ok_mycrm_admin'])){
     if ($_SESSION['ok_mycrm_admin']==true){
         return false;
     }
}    
    
global $admin_option_defs1;
require_once("mycrm_conf.php"); 
if (isset($admin_option_defs1[$main][$option])){
if ($admin_option_defs1[$main][$option]==false){
   return true;
}else{
   return false;
}
}else{
   return false;

}

}

?>
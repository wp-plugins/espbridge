<?php
/**
* Plugin Name: Enhanced SQL Portal Bridge
* Plugin URI: http://www.eliacom.com/mysql-gui-download.php
* Description: This plugin is used to login to ESP System
* Version: 1.0.0
* Author: David Flammer, Robert Ariniello, and JJ Baker
* Author URI: http://www.eliacom.com/mysql-gui-index.php
* License: MIT
*/

/*Creating the Administrative Menu*/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
add_action('admin_menu', 'espBridgeSetup');

if(array_key_exists('action',$_GET) && ($_GET['action']=='loginWPDB' || $_GET['action']=='loginOtherDB'))
  {
    loginESP($_GET['action']);
  }

function showBridge()
{
  $fileLocation = plugin_dir_path(__FILE__);
  $active = false;
  $systemPath = plugin_dir_path(__DIR__).'wpesp/'; 
  if(is_plugin_active('wpesp/wpesp.php'))
    {
      $active = true;
    }  
  echo file_get_contents($fileLocation.'espBridgeHeader.htm');
  if($active && file_exists($systemPath.'core.php')){
    require($systemPath.'inc/incPath.inc.php');
    if($esp['configureSystem']){
      $GLOBALS['esp']=$esp;
      //Starts session and loads necessary packages.
      require_once($GLOBALS['esp']['incPath'].'core/loadPackages.inc.php');
      loadPackages();
      require_once($esp['incPath'].'core/configureSystem.inc.php');
      echo 'Configuring System:<blockquote>';
      $validOK = configureSystem();
      echo $validOK[1].'</blockquote>';
      unset($GLOBALS['esp']);
    }
    echo file_get_contents($fileLocation.'espBridgeInstalled.htm');
  }
  elseif(file_exists($systemPath))
    {
      echo file_get_contents($fileLocation.'espBridgeNotActive.htm');
    }
  else{
    echo file_get_contents($fileLocation.'espBridgeNoInstall.htm');
  }

  echo '<style>'.file_get_contents($fileLocation.'espBridgeStyle.css').'</style>';
}


function loginESP($action)
{
  $pathToESP = WP_PLUGIN_URL.'/wpesp/?admin';  
  if($action=='loginWPDB')
    {
      $espAction = 'login';
      $hostArr = explode(":",DB_HOST);
      $host = $hostArr[0];
      $port = ((count($hostArr)>1)?$hostArr[1]:"Default");
      $db = DB_NAME;
      $user = DB_USER;
      $pw = DB_PASSWORD;
      $adminLogin = 1;
    }
  else
    {
      $adminLogin = 0;
      $espAction = '';
      $db ='';
      $port='';
      $host='';
      $user = '';
      $pw = '';
    }
  echo '  
<form name="loginToESPForm" id="loginToESPForm" method="POST" action="'.$pathToESP.'">
<input type="hidden" name="action" id="espAction" value="'.$espAction.'">
<input type="hidden" name="db" id="espDB" value="'.$db.'">
<input type="hidden" name="dbPort" id="espDBPort" value="'.$port.'">
<input type="hidden" name="dbServer" id="espDBServer" value="'.$host.'">
<input type="hidden" name="user" id="espUser" value="'.$user.'">
<input type="hidden" name="password" id="espPassword" value="'.$pw.'">
<input type="hidden" name="adminLogin" id="espAdminLogin" value="'.$adminLogin.'">
</form>
<script type="text/javascript">
window.onload = function(){
document.getElementById("loginToESPForm").submit();
}
</script>
';
  // Don't let wordpress take back control. We're just here to submit a form.
  exit;
}

function espBridgeSetup()
{
  global $my_admin_menu;
  //could change manage options to something different if worried
  $my_admin_menu = add_menu_page('ESP Bridge', 'ESP Bridge', 'manage_options', 'espBridgeSlug',  'showBridge');

}


	
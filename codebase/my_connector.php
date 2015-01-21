<?php
	require_once("config.php");
	$res=mysql_connect($mysql_server,$mysql_user,$mysql_pass);
	mysql_select_db($mysql_db);
	require("grid_connector.php");
    $gridConn = new GridConnector($res);
    //$gridConn->enable_log("log.txt");
    $action = $_GET['action'];
    if ( $action == "banner" OR $action == "t_banner" ) {
		  if ( $action == "banner" ) $tmp_sql = "banner_face";
		  if ( $action == "t_banner" ) $tmp_sql = "banner_test";
           $sql_atach = " WHERE combo_text='$tmp_sql'";
        } else {
		   $sql_atach = '';	
		}	 
    
    mysql_query("set names 'utf8'");
    $sql = "SELECT id,ch,sort,name,date,status,link,combo_text FROM task_dhtmlx".$sql_atach;
    $gridConn->render_sql($sql,"id","id,ch,sort,name,date,status,link,combo_text");
 

 
 
?>

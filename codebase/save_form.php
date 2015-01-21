<?php    
    require_once('config.php');
	$res=mysql_connect($mysql_server,$mysql_user,$mysql_pass);
	mysql_select_db($mysql_db);
	mysql_query("set names 'utf8'");
	$action = $_GET['action'];
	$combo_text = $_GET['c2'];
	$name   = $_GET['name'];
	$link   = $_GET['link'];
	$date   = date('Y-m-d');
	$id     = $_GET['row_id'];
	$del    = $_GET['delete_val'];
	if( $action == 'add' ) {
		$sql = "INSERT INTO task_dhtmlx(`id`,`ch`,`sort`,`name`,`date`,`status`,`link`,`combo_text`) VALUES ('','0','0','$name','$date','Yes','$link','$combo_text')";
	  }
	if( $action == 'edit' ) {
	    $sql = "UPDATE task_dhtmlx SET name='$name',link='$link',combo_text='$combo_text' WHERE id='$id'";
     }
    if( $action == 'delete' ) {
		$arr = explode(",",$del);
		foreach ( $arr as &$value ) {
		    $value = "'$value'"; 	
		 
	     }
	     $arr_sql = implode(",", $arr);
	     
		 $sql = "DELETE FROM task_dhtmlx WHERE id IN($arr_sql)";
	 }	 

	$result = mysql_query($sql);
	if (!$result) {
         die('Неверный запрос: ' . mysql_error());
     } else {
		// print "true";
	   print_r(true);	 
	}	 
	
?>	

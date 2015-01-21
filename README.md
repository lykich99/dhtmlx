==============================<br>
 DHTMLX<br>
==============================<br>
<br>
<a href="http://lweb.pl.ua/dhtmlx"> DHTMLX - layout, grid, tree, form edit. </a><br>
<br>
**********************************************************************<br>
1. Copy for this repository in directory accessible to the Web server.<br>
<br>
2. Modified /codebase/config.php. Add data for access to database.<br>
    <br>
        $mysql_server="host";<br>
	$mysql_user = "user";<br>
	$mysql_pass = "password";<br>
	$mysql_db = "database"; <br>
	<br>
3. Create tables for database.<br>
<br>
	CREATE TABLE `task_dhtmlx` (<br>
	  `id` int(11) NOT NULL AUTO_INCREMENT,<br>
	  `ch` tinyint(1) NOT NULL DEFAULT '0',<br>
	  `sort` int(11) NOT NULL DEFAULT '0',<br>
	  `name` varchar(100) NOT NULL,<br>
	  `date` date NOT NULL DEFAULT '0000-00-00',<br>
	  `status` varchar(5) NOT NULL DEFAULT 'Yes',<br>
	  `link` varchar(2000) NOT NULL,<br>
	  `combo_text` varchar(100) DEFAULT NULL,<br>
	  PRIMARY KEY (`id`)<br>
	) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;<br>
	
	
	
		
	

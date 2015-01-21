==============================
 DHTMLX
==============================

<a href="http://lweb.pl.ua/dhtmlx"> DHTMLX - layout, grid, tree, form edit. </a>

**********************************************************************
1. Copy for this repository in directory accessible to the Web server.

2. Modified /codebase/config.php. Add data for access to database.
    
    $mysql_server="host";
	$mysql_user = "user";
	$mysql_pass = "password";
	$mysql_db = "database"; 
	
3. Create tables for database.

	CREATE TABLE `task_dhtmlx` (
	  `id` int(11) NOT NULL AUTO_INCREMENT,
	  `ch` tinyint(1) NOT NULL DEFAULT '0',
	  `sort` int(11) NOT NULL DEFAULT '0',
	  `name` varchar(100) NOT NULL,
	  `date` date NOT NULL DEFAULT '0000-00-00',
	  `status` varchar(5) NOT NULL DEFAULT 'Yes',
	  `link` varchar(2000) NOT NULL,
	  `combo_text` varchar(100) DEFAULT NULL,
	  PRIMARY KEY (`id`)
	) ENGINE=InnoDB AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
	
	
	
		
	

<?php
/*
  This is test. In the future this will be modul handler.
  Handler for Tree.

*/
   
   $action = $_GET['action'];
   if( $action == 'banner') {
          $post_data = array( "options" => array("0"=> array("value"=>"banner_face","selected"=>"1","text"=>"Баннер на лицевой (1000х100)"),
                                          "1"=> array("value"=>"banner_test","selected"=>"0","text"=>"Тестовый банер")
                                          ));
     } 
     
   if( $action == 't_banner' ) {
	      $post_data = array( "options" => array("0"=> array("value"=>"banner_face","selected"=>"0","text"=>"Баннер на лицевой (1000х100)"),
                                          "1"=> array("value"=>"banner_test","selected"=>"1","text"=>"Тестовый банер")
                                          ));	 
	 } 
   if(  $action == 'edit' ) {
	    $id = $_GET['id'];
	   if( $id == "banner_test") { 
			   	     $post_data = array( "options" => array("0"=> array("value"=>"banner_face","selected"=>"0","text"=>"Баннер на лицевой (1000х100)"),
                                          "1"=> array("value"=>"banner_test","selected"=>"1","text"=>"Тестовый банер")
                                          ));		   
	     } else { 
			 $post_data = array( "options" => array("0"=> array("value"=>"banner_face","selected"=>"1","text"=>"Баннер на лицевой (1000х100)"),
                                          "1"=> array("value"=>"banner_test","selected"=>"0","text"=>"Тестовый банер")
                                          )); 
		}
	     
	
	                         
	}                                  
                                          
   echo json_encode($post_data);



?>

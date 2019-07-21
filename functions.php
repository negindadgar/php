<?php
function is_user_login(){
	return true;
}
  
function select_bg($color_name){
	
	$result = "";
	switch($color_name){
		case 'blue':
		  $result='#00c';
		  break;
		  
		case 'red':
		  $result='#c00';
		  break;
		case 'green':
		  $result='#0c0';
		  break;
	} 
	
	return $result;
}

function get_user(){
 
	return array(
	array('id' => 1,'name'=>'ali', 'email'=>'ali@gmail.com'),
	array('id' => 2,'name'=>'ahmad', 'email'=>'ahmad@gmail.com'),
	array('id' => 3,'name'=>'mohammad', 'email'=>'mohammad@gmail.com'),
	array('id' => 4,'name'=>'kaveh', 'email'=>'kaveh@gmail.com'),
	array('id' => 5,'name'=>'saam', 'email'=>'saam@gmail.com'),
	array('id' => 6,'name'=>'pedram', 'email'=>'pedram@gmail.com'),
	array('id' => 7,'name'=>'elina', 'email'=>'elina@gmail.com')
	);
	
	
	
	
	
	
}


?>
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


if($localhost){
	define('DGKAR_DB_SERVER','192.168.66.16');
	define('DGKAR_DB_USER','dgkar');
	define('DGKAR_DB_PASS' ,'RdAg-AeFt#1@9745');
	define('DGKAR_DB_NAME', 'dgkar');
}
else{
	define('DGKAR_DB_SERVER','172.20.10.4');
	define('DGKAR_DB_USER','dgkar');
	define('DGKAR_DB_PASS' ,'RdAg-AeFt#1@9745');
	define('DGKAR_DB_NAME', 'dgkar');
}

function DGExec($Query){
	// Create connection
	$conn = new mysqli(DGKAR_DB_SERVER, DGKAR_DB_USER, DGKAR_DB_PASS, DGKAR_DB_NAME);
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = $Query;
	$result = $conn->query($sql);
	$conn->close();
	return $result;
}	


function SelectQuery($Query){

	// Create connection
	$conn = new mysqli(DGKAR_DB_SERVER, DGKAR_DB_USER, DGKAR_DB_PASS, DGKAR_DB_NAME);
	$conn->set_charset("utf8");
	// Check connection
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = $Query;
	$result = $conn->query($sql);
	$conn->close();
	return $result;
}
function WordPressExec($Query){
	// Create connection
	$conn = new mysqli(WordPress_DB_SERVER, WordPress_DB_USER, WordPress_DB_PASS, WordPress_DB_NAME);
	$conn->set_charset("utf8");
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = $Query;
	$result = $conn->query($sql);
	$conn->close();
	return $result;
}	


function WordPressSelectQuery($Query){

	// Create connection
	$conn = new mysqli(WordPress_DB_SERVER, WordPress_DB_USER, WordPress_DB_PASS, WordPress_DB_NAME);
	$conn->set_charset("utf8");
	// Check connection
	if($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	} 
	$sql = $Query;
	$result = $conn->query($sql);
	$conn->close();
	return $result;
}
?>
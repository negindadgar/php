<?php 
include "functions.php";

$users=get_user();




?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>foreach</title>

    <!-- Core CSS - Include with every page -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Forms -->

    <!-- SB Admin CSS - Include with every page -->
    <link href="css/sb-admin.css" rel="stylesheet">
    
    <link  rel="stylesheet" href="<?php  echo  $background_color.'.css' ?>"/>
<style>
	table,tr,td,th{
		border:1px solid #dddddd;
		
	}
</style>
</head>

<body>
<table>
	<tr>
		<th>id</th>	
<th>name</th>
<th>email</th>
<th>action</th>

		
	</tr>
	

	<?php foreach($users as $user): ?>
	<tr>
		<td><?php echo $user['id']; ?> </td>
		<td><?php echo $user['name']; ?> </td>
		<td><?php echo $user['email']; ?> </td>
		<td>
		<a href="#">deleat</a>
		<a  href="#">edite</a>
		<a  href="#">approv</a>
		 </td>
		
	</tr>
	
	
	
	 
	<?php endforeach;?>
</table>	

</body>

</html>

<?php 
include "functions.php";

$users=get_user();




?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>background_color</title>

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
<?php for($i=0;$i<=10-1;$i++):  ?>	
 <tr>
 	<?php for($j=0;$j<=5;$j++): ?>
 	<td><?php echo $i*$j; ?></td>
 	
 	<?php endfor; ?>
 </tr>

<?php endfor; ?>
	
</table>
</body>

</html>

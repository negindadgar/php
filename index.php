<?php include "functions.php";

$background_color="fff";
if(isset($_POST['send'])){
//	var_dump($_POST);
	$background_color=select_bg($_POST['background']);
}

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

</head>
<body  style="background:<?php echo  $background_color; ?> ">
	<form action="" method="post">
	<input  type="radio" name="background" value="blue"/>blue
	<input  type="radio" name="background" value="red"/>red
	<input  type="radio" name="background" value="green"/>green
	<input  type="submit" name="send" value="send"/>
	</form>
	
	
	

</body>

</html>

<?php


//define('DGKAR_DB_SERVER',"5.135.169.252:1394");

//define('DGKAR_DB_SERVER','172.20.10.4:3306');
define('DGKAR_DB_SERVER','192.168.66.16:3306');
//define('DGKAR_DB_SERVER','5.135.169.252:1394');
define('DGKAR_DB_USER','anamis');
define('DGKAR_DB_PASS' ,'hdsjhqewfjknu92888');
define('DGKAR_DB_NAME', 'anamis');
if(isset($_POST["SelectItem"])){
	$DGSTRingSelectItem =  $_POST["SelectItem"];
}
else{
	$DGSTRingSelectItem =  "";
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



$TreeQuery = "SELECT WorkCat.ID ,WorkCat.Name , L1Work.L1ID , L1Work.Name , L2Work.L2ID , L2Work.Name , L3Work.UID ,L3Work.L3ID,L3Work.Name FROM WorkCat INNER JOIN L1Work on WorkCat.ID = L1Work.WorkCat INNER JOIN L2Work ON L1Work.WorkCat = L2Work.WorkCat and L1Work.L1ID = L2Work.L1ID INNER JOIN L3Work on L2Work.WorkCat = L3Work.WorkCat and L2Work.L1ID = L3Work.L1ID and L2Work.L2ID = L3Work.L2ID ORDER BY WorkCat.ID ,L1Work.L1ID,L2Work.L2ID,L3Work.L3ID";
$Treeresult = SelectQuery($TreeQuery);
$Plase = 'class="caret1"';

while($Treerow=mysqli_fetch_row($Treeresult)){
	if($Treerow[0]  == $WorkCatIDT){

		if($WorkCatF){
	
		}else{
			//$EztreeT .= "<ul>";
			//$endline = "<ul>";
			//$WorkCatF = TRUE;
		}
		
	}else{
		if($WorkCatF){
				
			$EztreeT .= "</ul></ul></ul>";
				
			$endline = '<ul class="nested">';
			
		}else{
			
			$endline = '<ul class="nested">';
		}
		$EztreeT .= "<li><span $Plase >$Treerow[0] - $Treerow[1]</span></li>$endline";
		$L1IDF = FALSE;
		$WorkCatF = TRUE;
		$endline = '';
		$WorkCatIDT = $Treerow[0];
		//$L1IDF = TRUE;
	}
	if($Treerow[2] == $L1IDT){

	}else{
		if($L1IDF){
				$EztreeT .= "</ul></ul>";
			$endline = '<ul class="nested">';
			
	$L2IDF = FALSE;
		}
		else{
			$endline = '<ul class="nested">';
		}
		$EztreeT .= "<li><span $Plase>$Treerow[0] ,$Treerow[2]  - $Treerow[3]</span></li>$endline";
		$L1IDF = TRUE;
		$L2IDF = FALSE;
		$endline = '';
		$L1IDT = $Treerow[2];
	}	
	if($Treerow[4] == $L2IDT){

	}else{
		if($L2IDF){
			$EztreeT .= "</ul>";
			$endline = '<ul class="nested">';
			$L2IDF = FALSE;
		}
		else{
			$endline = '<ul class="nested">';
			
		}
		
		$EztreeT .= "<li>  <span $Plase>$Treerow[0] ,$Treerow[2]  ,$Treerow[4] - $Treerow[5]</span></li>$endline";
		$L2IDF = TRUE;
		$endline = '';
		$L2IDT = $Treerow[4];
	}	
	if($Treerow[7] == $L3IDT){
		$SelectCase = '<input id="'."$Treerow[0]-$Treerow[2]-$Treerow[4]".'" data-id="custom-0" type="checkbox" />';
		$EztreeT .= "<li>$SelectCase<span>$Treerow[0] ,$Treerow[2]  ,$Treerow[4] ,$Treerow[8] - $Treerow[9]</span></li>";

	}else{
		$EztreeT .= "<li>$SelectCase<span>$Treerow[0] ,$Treerow[2]  ,$Treerow[4] ,$Treerow[6] - $Treerow[8]</span></li>";
		$L3IDT = $Treerow[6];
	}	

}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<style>
	 /* Remove default bullets */
ul, #myUL {
  list-style-type: none;
}

/* Remove margins and padding from the parent ul */
#myUL {
  margin: 0;
  padding: 0;
}

/* Style the caret/arrow */
.caret1 {
  cursor: pointer;
  user-select: none; /* Prevent text selection */
}

/* Create the caret/arrow with a unicode, and style it */
.caret1::before {
  content: "\25B6";
  color: black;
  display: inline-block;
  margin-right: 6px;
}

/* Rotate the caret/arrow icon when clicked on (using JavaScript) */
.caret1-down::before {
  transform: rotate(90deg);
}

/* Hide the nested list */
.nested {
  display: none;
}

/* Show the nested list when the user clicks on the caret/arrow (with JavaScript) */
.active {
  display: block;
} 	
		
	</style>
	<body>
	

	
	
		 <ul id="myUL">
		 

  <li><span class="caret1"><?php echo $Treerow[0]  ;?></span>
    <ul class="nested">
      <li><?php echo $Treerow[0]  ;?></li>
      <li><?php echo $Treerow[0]  ;?></li>
      <li><span class="caret1"><?php echo $Treerow[2]  ;?></span>
        <ul class="nested">
          <li>Black Tea</li>
          <li>White Tea</li>
          <li><span class="caret1"><?php echo $Treerow[4]  ;?></span>
            <ul class="nested">
              <li>Sencha</li>
              <li>Gyokuro</li>
              <li>Matcha</li>
              <li>Pi Lo Chun</li>
              
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </li>
  

</ul> 



		<script>
var toggler = document.getElementsByClassName("caret1");
var i;

for (i = 0; i < toggler.length; i++) {
  toggler[i].addEventListener("click", function() {
    this.parentElement.querySelector(".nested").classList.toggle("active");
    this.classList.toggle("caret1-down");
  });
}
</script>
	</body>
</html>





<?php
include "config.php";

// get query string from URL
$month = $_GET['month'];
$day = $_GET['day'];
$year = $_GET['year'];
?>
<html>

<body>

	<h2>Listing of events</h2>
	<?php

	 $sql="SELECT calID,calName,calDesc, calDate, DATE_FORMAT(calStamp, '%a %b %e %Y') as calStamp FROM calTbl WHERE calDate = '";
	 $sql.= $month . '/' . $day . '/' . $year . "'";
	 //echo $sql;
	 //return;
	 $result = mysqli_query($link, $sql);
	 $numRows = mysqli_num_rows($result);

	 if($numRows == 0 ){
	 	echo '<h3>There is no events on this date!</h3>';
	 }
	 else
	 {
	 	while($row = mysqli_fetch_array($result)){
	 ?>
	 		<h4><?php echo "Event: ".$row['calName'];?></h4>
	 		<?php echo nl2br($row['calDesc']); ?><br/>
	 		Event Date: <?php echo $row['calDate'];?><br/>
	 		Listed On: <?php echo $row['calStamp'];?>
	 	<hr />
	 <?php
	 	}//end loop
}//end if
?>

<INPUT TYPE="BUTTON" VALUE=" Close " ONCLICK="window.close();" />

</body>
</html>

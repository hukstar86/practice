<?php
include "../config.php";
// get query string from URL
$year = $_GET['year'];
$month = $_GET['month'];
$day = $_GET['day'];

// for deletion of an event
if (isset($_GET['delevent'])) {
    $eventid = $_GET['delevent'];
	$query = "DELETE FROM calTbl WHERE calID ='$eventid'";
	mysqli_query($link, $query);
	header("Location: index.php");
  }


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Events Calendar: List events </title>

<link href="style.css" rel="stylesheet" type="text/css" />
<script language="JavaScript">
  function delEvent(eventID)
  {
    if (confirm("Are you sure you want to delete this event?"))
	{
	  window.location.href = "?delevent="+eventID;
    }
  }// end of delEvent
</script>

</head>

<body>
<div id="content">
<h2>Content Management for Event-calendar</h2>

<h3>Date:<?php echo $day."-".$month."-".$year; ?>&nbsp;&nbsp;
    <input type="button" value="Add an event" onClick="window.location.href='add-event.php?month=<?php echo $month; ?>&day=<?php echo $day; ?>&year=<?php echo $year; ?>';" />
</h3>
<?php
$sql="select calID,calName,calDesc, calDate, DATE_FORMAT(calStamp, '%a %b %e %Y') as calStamp from calTbl where calDate = '";
$sql.= $month . '/' . $day . '/' . $year . "'";
$result = mysqli_query($link, $sql);
$numRows = mysqli_num_rows($result);

if($numRows == 0 ){
	echo '<h3>There is no event for this date</h3>';
}
else
{
	echo '<h3>Events:</h3>';
	while($row = mysqli_fetch_array($result)){
	extract($row);
?>
	<h5>Title: <?php echo $calName; ?></h5>

	<?php echo nl2br($calDesc); ?><br/>
	Event Date: <?php echo $calDate; ?><br/>
	Listed On: <?php echo $calStamp; ?>
    <p>
	 <input type="button" value="Edit" onClick="window.location.href='edit-event.php?id=<?php echo $calID; ?>'" />&nbsp;
	 <input type="button" value="Delete" onClick="delEvent('<?php echo $calID;?>');" />
     <hr />
    </p>
<?php
    }//end loop
}//end if

?>
<p align="left">
<input type="button" value="<< Back to event-calendar" onClick="window.location.href='index.php';" />
</p>

</div>
</body>
</html>
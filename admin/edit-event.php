<?php
include "../config.php";

$id = $_GET['id'];

if(isset($_POST['Edit'])){
  $name= $_POST['calName'];
  $description= $_POST['calDesc'];
  $date= $_POST['calDate'];
  $sql="update calTbl set calName='$name', calDesc='$description', calDate='$date' WHERE calID = '$id' ";
  mysqli_query($link, $sql);
  header("Location: index.php");
}

$sql="select calID,calName,calDesc, calDate from calTbl WHERE calID = '$id'";
$result = mysqli_query($link, $sql);
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Events Calendar: Edit event </title>

<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="content">
<h2>Content Management for Event-calendar</h2>
<form method="post">
  <table cellpadding="0" cellspacing="0">
     <tr>
      <td width="142">Event Name</td>
      <td width="146"><div align="left">
        <input type="text" name="calName" value="<?php echo $row['calName']; ?>" />
      </div></td>
    </tr>
    <tr>
	      <td>Event Date</td>
	      <td><div align="left">
	        <input type="text" name="calDate" value="<?php echo $row['calDate']; ?>" />
	      </div></td>
    </tr>
    <tr>
      <td rowspan="2">Event Desc</td>
      <td><div align="left">
        <textarea name="calDesc" cols="45" rows="5"><?php echo $row['calDesc'];?></textarea>
        <br/>
      </div></td>
    </tr>

    <tr>
      <td colspan="2"><input type="submit" name="Edit" value="Save Changes" /></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>
<?php
include "../config.php";

if(isset($_POST['Submit'])){
  $name = mysqli_real_escape_string($link,$_POST['calName']);
  $description = mysqli_real_escape_string($link,$_POST['calDesc']);
  
  $sql="insert into calTbl(calName,calDesc,calDate,calStamp) values ('" . $name ."','";
  $sql.= $description . "','" . $_POST['calDate'] . "',now())";
  mysqli_query($link, $sql);
  header("Location: index.php");
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Events Calendar: add event</title>

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
        <input type="text" name="calName" />
      </div></td>
    </tr>
    <tr>
	      <td align="left">Event Date</td>
	      <td><div align="left">
	        <input type="text" name="calDate" value="<?php echo $_GET['month'] . '/' . $_GET['day'] . '/' . $_GET['year'];?>"/>
	      </div></td>
    </tr>
    <tr>
      <td rowspan="2">Event Desc</td>
      <td><div align="left">
        <textarea name="calDesc" cols="45" rows="5"></textarea>
        <br/>
      </div></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>
</div>
</body>
</html>

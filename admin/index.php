<?php
include "../config.php";
include "../library/highLightEvent.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Events Calendar: admin </title>
<style type="text/css">

tr td a {
    text-decoration: none;
}
tr td a:hover {
	text-decoration: underline;
	color: #3760BF;
}
.today{
	background-color:#c4c4c4;
	border:1px solid #ffffff;
	font-weight:bold;
}

.event {
	background-color: #C6D1eC;
	border:1px solid #ffffff;
}
.normal {
}

table.tableClass{
	width:90%px;
	border-collapse: collapse;
	font-size:95%;

}

table.tableClass input{
	font-size:90%;
}

th{
	width:14%;
	background-color: #aaaaaa;
	text-align:center;
	color:#ffffff;
    font-weight: bold;
    padding:3px;
    }

td{
	text-align:center;
	padding:5px;
	margin:0;
}



</style>
<script src="../js/event-calendar.js" type="text/javascript">
</script>

<link href="style.css" rel="stylesheet" type="text/css" />


</head>

<body>
<div id="content">
<h2>Content Management for Event-calendar</h2>


 <?php
       include "displayEventCalendar.php";
 ?>


</div>

</body>
</html>
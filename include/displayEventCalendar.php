<?php
    $day = (isset($_GET['day'])) ? $_GET['day'] : "";
   	$month = (isset($_GET["month"])) ? $_GET['month'] : "";
	$year = (isset($_GET["year"])) ? $_GET['year'] : "";

	if(empty($day)){ $day = date("j"); }  // day from 1..365
	if(empty($month)){ $month = date("n"); } // month from 1..12 
	if(empty($year)){ $year = date("Y"); } // year 2013

	//set up vars for calendar etc
	$currentTimeStamp = strtotime("$year-$month-$day");
	$monthName = date("F", $currentTimeStamp);
	$numDays = date("t", $currentTimeStamp);
	$counter = 0;

?>
<table class="tableClass">
<tr>
<td width="25" colspan="1">
<input type="button" value=" &lt;&lt " onClick="goLastMonth(<?php echo $month . ", " . $year; ?>);" />
</td>
<td width="250" colspan="5">
<span class="title"><?php echo $monthName . " " . $year; ?></span><br />
</td>
<td width="25" colspan="1" align="right">
<input type="button" value=" &gt;&gt; " onClick="goNextMonth(<?php echo $month . ", " . $year; ?>);" />
</td>
</tr>
<tr>
    <th>Sun</th>
    <th>Mon</th>
    <th>Tue</th>
    <th>Wed</th>
    <th>Thu</th>
    <th>Fri</th>
    <th>Sat</th>
</tr>
<tr>
<?php
	for($i = 1; $i < $numDays+1; $i++, $counter++){
		$dateToCompare = $month . '/' . $i . '/' . $year;
		$timeStamp = strtotime("$year-$month-$i");
		if($i == 1){
			// Workout when the first day of the month is
			$firstDay = date("w", $timeStamp);
			for($j = 0; $j < $firstDay; $j++, $counter++){
				echo "<td>&nbsp;</td>";
			}
		}
		if($counter % 7 == 0){
		?>
			</tr><tr>
        <?php
		}
		?>
        <td width="30" <?php echo highLightEvent($month,$i,$year); ?>>
        <a href="javascript:popup(<?php echo $month; ?>,<?php echo $i; ?>,<?php echo $year; ?>)">
             <?php echo $i; ?>
          </a>
        </td>
    <?php
	}
?>
</table>
<p style="font-size:10px">Scheduled event is shaded light-blue; today's date is shaded light-grey</p>

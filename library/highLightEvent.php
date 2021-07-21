<?php
// PHP function for highlighting the date of scheduled event
function highLightEvent($eMonth,$eDay,$eYear){
        global $link;
		$todaysDate = date("n/j/Y");
		$dateToCompare = $eMonth . '/' . $eDay . '/' . $eYear;
		if($todaysDate == $dateToCompare){
			$aClass='class="today"';
		}else{
			$sql="select count(calDate) as eCount from calTbl where calDate = '";
			$sql.= $eMonth . '/' . $eDay . '/' . $eYear . "'";
			$result = mysqli_query($link, $sql);
			while($row= mysqli_fetch_array($result)){
				if($row['eCount'] >=1){
					$aClass = 'class="event"';
				}elseif($row['eCount'] ==0){
					$aClass ='class="normal"';
				}
			}
		}
		return $aClass;
}
?>
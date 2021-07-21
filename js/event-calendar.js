// previous month function
function goLastMonth(month, year){
	// If the month is January, decrement the year
	if(month == 1){
		--year;
		month = 13;
	}
	document.location.href = '?month='+(month-1)+'&year='+year;
}
//next month function
function goNextMonth(month, year){
	// If the month is December, increment the year
	if(month == 12){
	++year;
	month = 0;
	}
	document.location.href = '?month='+(month+1)+'&year='+year;
}
// popup window for event listings
function popup(m,d,y){
  phpii= window.open("list-events.php?month="+m+"&day="+d+"&year="+y, "myPage", "height=500,width=600,left=400,top=200");
}



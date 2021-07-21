<?php
include "config.php";
include "library/highLightEvent.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Stuff Exchange: Home</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
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
	border:1px solid #ff0000;
	font-weight:bold;
}

.event {
	background-color: #C6D1eC;
	border:1px solid #ff0000;
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
<script src="js/event-calendar.js" type="text/javascript">
</script>

</head>
<body>
<div id="header">
<div id="logo">
	<h1><a href="#">Stuff Exchange </a></h1>
	<h2>network people around NZ</h2>
</div>
</div>
<div id="menu-wrap">
<div id="menu">
	<ul>
		<li class="first"><a href="#" accesskey="1" title="">&nbsp;&nbsp;Home&nbsp;&nbsp;</a></li>
		<li><a href="#" accesskey="2" title="">Products</a></li>
		<li><a href="#" accesskey="3" title="">Services</a></li>
		<li><a href="#" accesskey="4" title="">About Us</a></li>
		<li><a href="#" accesskey="5" title="">Contact Us</a></li>
		<li><a href="#" accesskey="5" title="">Contact Us</a></li>
		<li><a href="#" accesskey="5" title="">Contact Us</a></li>
		<li><a href="#" accesskey="5" title="">Contact Us</a></li>
	</ul>
</div>
</div>
<hr />

<div id="content">
<div id="recent-posts">
	<h2>Events and Calender</h2>
	<ul>
		<li class="first">
			<h3><a href="#">Aliquam Libero</a></h3>
			<p class="byline"><span>Posted on Dec 15th, 2012 by <a href="#">Someone</a></span></p>
			<p>Nullam  ante orci, eget, tempus quis, ultrices in, est. Curabitur sit amet  nulla. Nam in massa. Sed vel tellus. Curabitur sem urna, consequat vel,  suscipit sit amet  nulla. Nam in massa. Sed vel tellus. Curabitur placerat, nulla.  <a href="#">More…</a></p>
		</li>
		<li>
			<h3><a href="#">Event Calendar</a></h3>

			<p>
            <?php
                    include "include/displayEventCalendar.php";
              ?>



			</p>
		</li>
		<li>
			<h3><a href="#">Etiam Malesuada</a></h3>
			<p class="byline"><span>Posted on Dec 15th, 2012 by <a href="#">Someone</a></span></p>
			<p>Nulla enim eros, porttitor eu, tempus id, varius non, nibh.  Duis enim nulla, luctus eu, dapibus lacinia, venenatis id, quam.  Vestibulum imperdiet eleifend rutrum, nunc lectus vestibulum  velit, euismod lacinia quam nisl id lorem. <a href="#">More…</a></p>
		</li>
	</ul>
	<div style="clear: both; height: 40px;">&nbsp;</div>
</div>
<div id="latest-post-wrap">
<div id="latest-post" class="post">
	<p class="byline"><span>Latest news and information <a href="#">here</a></span></p>
	<h1 class="title"><a href="#">Stuff Exchange</a></h1>
	<div class="entry"><img src="images/img06.jpg" alt="" width="300" height="200" class="left" />
		<p>This website offers a quick and simple way for NZ residents to search for places in their neighborhood and throughout the cities...
		</p>
		<p>
		where
		they can donate, sell, buy, rent, or repair antiques, vintage items, artifacts, and other gently used goods (including high-end and designer products).
		</p>
        <p>The goal of the Stuff Exchange is to help lessen the NZ’s waste by encouraging the salvage and reuse of materials that might
        otherwise be discarded as trash.
        </p>

    	<p>Thanks to <a href="#">Christchurch City Council</a> for their supports and <a href="#">web class 2012</a> for the design of website.</p>
	</div>

</div>
</div>
<div id="sidebar">
	<ul>
		<li id="search">
			<h2>Search</h2>
			<form id="searchform" method="get" action="">
				<div>
					<input type="text" name="s" id="s" size="15" />
					<br />
					<input name="submit" type="submit" value="Search" />
				</div>
			</form>
		</li>
		<li id="categories-1">
					<h2>Categories</h2>
					<ul>
						<li><a href="#" title="View all posts filed under Uncategorized">Uncategorized</a> (3) </li>
						<li><a href="#" title="View all posts filed under Lorem Ipsum">Lorem Ipsum</a> (42) </li>
						<li><a href="#" title="View all posts filed under Urna Congue Rutrum">Urna Congue Rutrum</a> (28) </li>
						<li><a href="#" title="View all posts filed under Augue Praesent">Augue Praesent</a> (55) </li>
						<li><a href="#" title="View all posts filed under Vivamus Fermentum">Vivamus Fermentum</a> (13) </li>
					</ul>
		</li>
		<li id="categories-1">
			<h2>Categories</h2>
			<ul>
				<li><a href="#" title="View all posts filed under Uncategorized">Uncategorized</a> (3) </li>
				<li><a href="#" title="View all posts filed under Lorem Ipsum">Lorem Ipsum</a> (42) </li>
				<li><a href="#" title="View all posts filed under Urna Congue Rutrum">Urna Congue Rutrum</a> (28) </li>
				<li><a href="#" title="View all posts filed under Augue Praesent">Augue Praesent</a> (55) </li>
				<li><a href="#" title="View all posts filed under Vivamus Fermentum">Vivamus Fermentum</a> (13) </li>
			</ul>
		</li>
	</ul>
	<div style="clear: both; height: 40px;"></div>
</div>
</div>
<hr />
<div id="footer">
     <a href="#">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">About</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Products</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Contact</a>&nbsp;&nbsp;&nbsp;
	<p class="legal">&copy;2011 All Rights Reserved.</p>
	</div>
</body>
</html>

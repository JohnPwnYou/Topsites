<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
<div id="topNavigation">
  <div id="topNavigationWrapper">
    <div id="topNavigationRight">
      <span class="open_lang"><img class="icon_fix" src="http://snap.lacounty.gov/Image/DownArrow.png" /> <a href="#">English</a></span>
    </div>
    <div id="topNavigationLeft">
     <a href = "index.php">Index</a>
    </div>
  </div>
  <div class="reset">
  </div>
  </div>
  </div>
  <center>
   <div id="contentLeft">
<?php
include("dbconnect.php");
?>
<?php
$query = mysql_query("SELECT * from sites");
while($row = mysql_fetch_array($query)){
$name = $row['name'];
$img = $row['img'];
$url = $row['url']; 
echo "<a href = '".$url."'</a>";
echo "<div class='contentHolder'>
       <div class='contentHeader'>$name</div>
	   <img src ='" .$img."'</img></div>";
}
?>
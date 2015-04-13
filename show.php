<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>三行情诗--总有一些说不出的话</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="head"><p>三行情诗</p></div>
<?php
include("connect.php");

mysql_select_db("a0209115716", $con);

$result = mysql_query("SELECT * FROM threeline WHERE ID='$_GET[ID]'");
?>
<div class="single_poem">
<?php
//echo "<table border='1'>";
/*<tr>
<th>ID :</th>
<th>First :</th>
<th>Second :</th>
<th>Third :</th>
<th>Name</th>
</tr>*/

while($row = mysql_fetch_array($result))
  {
  echo "<div class='poem_content'>";
  //echo "<tr>" . $row['ID'] . "</tr>";
  echo "<p>" . $row['First'] . "</p>";
  echo "<p>" . $row['Second'] . "</p>";
  echo "<p>" . $row['Third'] . "</p>";
  echo "</div>";
  echo "<br><br><br><br><br><div class='writer'> <p>@" . $row['Name'] . "</p></div>";
  echo "<p><br>&nbsp</p>";

  }


mysql_close($con);
?>
</div>
<?php
include("foot.php");
?>
</body>
</html>
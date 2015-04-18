<?php
include("connect.php");

mysql_select_db("a0209115716", $con);

$result = mysql_query("update threeline set pLike=0");

if($result){
  echo "<p style='text-align:center; width:100%' ><br>Clear the Like data success!<br>";
  echo "<a href='index.php' text-align='center' width='100%'>返回</a> ";
}
else{
  echo "<p style='text-align:center; width:100%' ><br>Failed clear the like data.<br>";
  echo "<a href='index.php' text-align='center' width='100%'>返回</a> ";
}



mysql_close($con);
?>
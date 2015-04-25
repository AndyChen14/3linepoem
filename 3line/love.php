<?php
include_once("connect.php");

$mysql_db_database = "a0209115716";
mysql_select_db($mysql_db_database, $con) or die("Could not select database");

$id = $_POST['id'];
if(!isset($id) || empty($id)) exit;

if(isset($_COOKIE['like'."_".$id])){
    echo "error||赞过了。。";
}
else{

	$sql = "update threeline set pLike=pLike+1 where ID='$id'";
	mysql_query( $sql);

	$result = mysql_query("select pLike from threeline where ID='$id'");
	$row = mysql_fetch_array($result);
	$love = $row['pLike'];

	$expire=time()+60*60*24*2;
    setcookie("like"."_".$id, "like"."_".$id, $expire);

	echo "success||".$love;
	}


?>
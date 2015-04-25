<?php
	include("connect.php");
	
	//选择数据库
	$mysql_db_database = "a0209115716";
	mysql_select_db($mysql_db_database, $con) or die("Could not select database");

	
	//数据总行数
	$count=mysql_query("select count(*) from threeline"); //获得记录总数
	$rs=mysql_fetch_array($count); 
	$totalNumber=$rs[0];
/*
	echo $count;
	echo "blank";
	echo $totalNumber;
*/


	
	//从数据库获取数据
	$sql="select * from threeline order by ID";

	$result=mysql_query($sql);

	$i=1;

	while($row=mysql_fetch_array($result)){
		echo $i;
		if($row!=$i){

			echo "<br>";
			mysql_query("update threeline set ID = '$i' where ID = $row[ID]");

		}
		$i++;

	}
	
	//释放连接资源
	mysql_close($con);
	header("Location:allshow.php"); 
?>
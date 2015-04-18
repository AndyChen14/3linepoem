<?php
	include("connect.php");
	
	//选择数据库
	$mysql_db_database = "a0209115716";
	mysql_select_db($mysql_db_database, $con) or die("Could not select database");
	//mysql_select_db("threeline_db");
	
	//limit要求参数
	$length=30;
	$pagenum=@$_GET['page']?$_GET['page']:1;
	
	//数据总行数
	$sqltot="select count(*) from threeline";
	$arrtot=mysql_fetch_row(mysql_query($sqltot));
	$pagetot=ceil($arrtot[0]/$length);

	//限制页数
	if($pagenum>=$pagetot){
		$pagenum=$pagetot;
	}
	$offset=($pagenum-1)*$length;
	
	//从数据库获取数据
	$sql="select * from threeline order by ID limit {$offset},{$length}";

	$result=mysql_query($sql);
	echo "<h1>三行情诗</h1>";
	echo "<table width='700px' border='1px'>";
		echo "<tr>";
		echo "<td>ID</td>";
		echo "<td>主题</td>";
		echo "<td>第一行</td>";
		echo "<td>第二行</td>";
		echo "<td>第三行</td>";
		echo "<td>作者</td>";
		echo "<td>邮箱</td>";
		echo "<td>院系</td>";
		echo "<td>点赞数</td>";
		echo "</tr>";
	while($row=mysql_fetch_assoc($result)){
		echo "<tr>";
		echo "<td>{$row['ID']}</td>";
		echo "<td>{$row['Theme']}</td>";
		echo "<td>{$row['First']}</td>";
		echo "<td>{$row['Second']}</td>";
		echo "<td>{$row['Third']}</td>";
		echo "<td>{$row['Name']}</td>";
		echo "<td>{$row['Email']}</td>";
		echo "<td>{$row['Department']}</td>";
		echo "<td>{$row['pLike']}</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	//计算上一页和下一页
	$prevpage=$pagenum-1;
	$nextpage=$pagenum+1;

	echo "<h2><a href='show_page.php?page={$prevpage}'>上一页</a><a href='show_page.php?page={$nextpage}'>下一页</a></h2>";

	//释放连接资源
	mysql_close($con);
?>
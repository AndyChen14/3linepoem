
<?php
echo header("content-type:text/html;charset=utf-8");

$mysql_db_hostname = "localhost";
$mysql_db_user = "a0209115716";
$mysql_db_password = "49910565";
$mysql_db_database = "a0209115716";

$con = mysql_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");

 //设置客户端和连接字符集  
    mysql_query("set names utf8");  

?>

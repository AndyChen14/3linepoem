
<?php
echo header("content-type:text/html;charset=utf-8");  
$con = mysql_connect("localhost","username","password");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 //设置客户端和连接字符集  
    mysql_query("set names utf8");  

?>

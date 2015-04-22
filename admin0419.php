<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">

<title>后台管理--三行情诗</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<div id="head"><p>三行情诗</p></div>

<div id="poem">

	 <p class="middle"> 删除某个ID的情诗！</p>
  <h6 class="explain"><a href="deleteid.php" target="_blank" color="red">删除情诗</a></h6>
   <p class="middle"> 更新情诗ID，使ID连续！</p>
  <h6 class="explain"><a href="updateID.php" target="_blank" color="red">连续ID</a></h6>
   <p class="middle">以表格的形式展示所有情诗，可以复制到Excel中处理！</p>
   <h6 class="explain"><a href="show_page.php" target="_blank" color="red">所有情诗数据</a></h6>
  <p class="middle">清空点赞数，一定慎重！！！<strong color="red" >备份好，再清空！</strong></p>
   <h6 class="explain"> <a href="clear_like_data.php" target="_blank" color="red" >清空点赞</a></h6>
  <h6 class="explain"> 注：有问题，请查看操作说明。</h6>


</div>
<?php
include("foot.php");
?>
</body>
</html>
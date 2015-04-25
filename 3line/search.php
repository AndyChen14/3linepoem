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
<script language="javascript" type="text/javascript">
<!--
var state1=0;
function clearcontent1(x)
{
  if (state1==0){
  x.value ="";
  state1=1;
  }
}
function postChk(theForm){
  
  if(theForm.ID.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')=='' ){
    alert('亲，填写您要查阅三行情诗的ID哦！');
	theForm.ID.focus();
    return false;
  }
  if(theForm.ID.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')!='' && !theForm.ID.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'').match(/[\d]{1,20}/)){
    alert('俺读书少，不要骗俺！！ID不是数字吗？');
	theForm.ID.focus();
    return false;
  }

  return true;
}
-->
</script> 
</head>
<body>

<div id="head"><p>三行情诗·清华</p></div>

<div id="poem">
<form action="show.php" method="get" name="searchform" id="searchform" onsubmit="return postChk(this)">
	<br>
	<p class="middle">ID: <input type="text" name="ID" value="请输入三行情诗ID" onfocus="clearcontent1(ID)" /></p>
	<br>
	<p class="middle"> <input type="submit"  value="查阅"/></p>
	<p class="middle">&nbsp &nbsp </p>
	<p class="middle">&nbsp &nbsp </p>

</form>
</div>
<?php
/************foot****************/
include("foot.php");
?>
</body>
</html>
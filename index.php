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
function postChk(theForm){
  
  if(theForm.First.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')=='' ){
    alert('亲，每行都要写哦！');
	theForm.First.focus();
    return false;
  }

  if(theForm.Second.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')=='' ){
    alert('亲，每行都要写哦！');
	theForm.Second.focus();
    return false;
  }
  if(theForm.Third.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')=='' ){
    alert('亲，每行都要写哦！');
	theForm.Third.focus();
    return false;
  }
  if(theForm.Name.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')==''){
	alert('请留下您的大名哦！');
	theForm.Name.focus();
    return false;
  }
  if((theForm.First.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')!='') && (theForm.First.value == "第一行。。")){
    alert('哼，讨厌！');
	theForm.First.focus();
    return false;
  }
  if((theForm.Second.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')!='') && (theForm.Second.value == "第二行。。")){
    alert('哼，讨厌！');
	theForm.First.focus();
    return false;
  }
  if((theForm.Third.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')!='') && (theForm.Third.value == "第三行。。")){
    alert('哼，讨厌！');
	theForm.First.focus();
    return false;
  }
  if((theForm.Name.value.replace(/^[\s\r\n]+|[\s\r\n]+$/,'')!='') && (theForm.Name.value == "您何许人也？")){
    alert('不要酱紫，留下您的名号呗');
	theForm.First.focus();
    return false;
  }

  return true;
}
 /*
var inputCode = theForm.imcode.value; 
if(inputCode.length <=0) 
{ 
alert("请输入验证码！"); 
return false;
} 
else if(inputCode != code ) 
{ 
alert("验证码输入错误！"); 
return false;
createCode();//刷新验证码 
} 
else 
{ 
alert("^-^ OK"); 
} 
  return true;
}*/
-->
</script> 
</head>
<body>

<div id="head"><p>三行情诗</p></div>

<div id="poem">
<form action="insert.php" name="form"  id="form" method="post"  onsubmit="return  postChk(this)">
	<h6 class="explain"> 那些对母校、院系、亲人、或者Ta说不出口的絮语！</h6>
	<!--<h6 class="explain"> <a href="http://www.qiyar.com/threeline/allshow.php">三行展示</a></h6>-->
	<p class="middle"> &nbsp <input  type="text" name="First" value="第一行。。"/></p>
	<p class="middle"> &nbsp <input  type="text" name="Second" value="第二行。。"/></p>
	<p class="middle"> &nbsp <input  type="text" name="Third" value="第三行。。"/></p>
	<p class="middle"> &nbsp <input  type="text" name="Name" value="您何许人也？"/></p>
	<p class="middle">  <input type="submit" name="submit" value="吟一首" /></p>
</form>

	<h6> &nbsp </h6>
</div>
<?php
include("foot.php");
?>
</body>
</html>
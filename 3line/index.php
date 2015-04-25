<!DOCTYPE html>
<html lang="zh-CN">

  <head>
    
    <meta charset="utf-8">
    <title>"水木清华 诗梦远方”-- 清华大学之三行情诗</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="三行情诗活动，旨在用最少的文字，表达更多的情感">
    <meta name="keywords" content="清华,文艺,三行情诗,母校，亲情，TA">
    <meta name="author" content="奇芽科技">
    <meta name="robots" content="index,follow">
    <meta name="application-name" content="qiyar.com">
    <link rel="canonical" href="http://www.qiyar.com/" />
    <meta name="generator" content="Ghost 0.5" />
    <link rel="apple-touch-icon-precomposed" href="http://static.bootcss.com/www/assets/ico/apple-touch-icon-precomposed.png">
    <link rel="shortcut icon" href="http://static.bootcss.com/www/assets/ico/favicon.png">

    <!-- Site CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/site.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/assets/js/html5shiv.min.js?v=f3008b4099"></script>
      <script src="/assets/js/respond.min.js?v=f3008b4099"></script>
    <![endif]-->
    
    <!-- Favicons -->

 	<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>   
    <script>
      var _hmt = _hmt || [];
    </script>
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
</script>
</head>
<body class="home-template">
<?php
/************page header****************/
include("header.php");
?>
    <div class="container projects">

      <div class="projects-header page-header">
        <h2><i class="fa fa-graduation-cap "></i>清华大学104周年校庆！</h2>
        <p>那些对母校、院系、亲人、或者Ta说不出口的絮语！</p>
      </div>
      <div class="middle">
  <form action="insert.php" name="form"  id="form" method="post"  onsubmit="return  postChk(this)">
  <div class="form-group">
    <input class="form-control"  id="First" type="text" name="First" placeholder="第一行。。"/>
  </div>
  <div class="form-group">
    <input class="form-control"  id="Second"  type="text" name="Second" placeholder="第二行。。"/>
  </div>
  <div class="form-group">
    <input class="form-control"  id="Third"  type="text" name="Third"  placeholder="第三行。。"/>
  </div>
  <div class="form-group">
    <input class="form-control"  id="Name"  type="text" name="Name" placeholder="您何许人也？"/>
  </div>
  <div class="form-group">
    <input class="form-control"  id="Email"  type="text" name="Email" placeholder="Email .."/>
  </div>
  <div class="form-group">
    <input class="form-control"  id="Department"  type="text" name="Department" placeholder="您的院系。。"/>
  </div>
  <div class="text-center"><input class="btn btn-success" type="submit" name="submit" value="吟一首" /></div>
</form>
    </div>
    </div>

<?php
/************page footer ****************/
    include("footer.php");
?>
</body>
</html>  
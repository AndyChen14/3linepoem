<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>暖暖的SHOW--三行情诗</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
<!--add Like script -->
<script type="text/javascript">
$(function(){
	$(".poem_img").click(function(){
		var love = $(this);
		var id = love.attr("rel");
		//love.fadeOut(300);
		$.ajax({
			type:"POST",
			url:"love.php",
			data:"id="+id,
			cache:false,
			success:function(result){
				//love.html(result);
				//love.fadeIn(300);
				    if(result){
                    var position=result.indexOf("||");
                    var warningMessage=result.substring(0,position);
                    if(warningMessage=='success'){
                         var successMessage=result.substring(position+2);
                         //$("#poem_flash_"+id).html('&nbsp;');
                         $("#poem_like_"+id).html(successMessage);
                    }else{
                         var errorMessage=result.substring(position+2);
                         love.html(errorMessage);
                         $("#poem_like_"+id).html(errorMessage)
                    }
				}
			}
		});
		return false;
	});
});
</script>

</head>
<body>

<div id="head"><p>三行情诗·清华</p></div>
<?php 
include_once("connect.php");

mysql_select_db("a0209115716");


$perNumber=15; //每页显示的记录数
$page=@$_GET['page']?$_GET['page']:1; //获得当前的页面值
//mysql_query("select * from threeline order by ID desc ");
$count=mysql_query("select count(*) from threeline"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数

$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from threeline order by ID desc limit $startCount,$perNumber" ); //根据前面的计算出开始的记录和记录数


	while ($row=mysql_fetch_array($result)) {
		echo "<div class='single_poem'>";
		echo "<div class='poem_content'>";
		echo "<p>" . $row['ID'] . "<br>";
		echo "----------------------</p>";
		echo "<p>" . $row['First'] . "</p>";
		echo "<p>" . $row['Second'] . "</p>";
		echo "<p>" . $row['Third'] . "</p>";
		echo "</div>";
		echo '<div  class="poem_foot">';

		echo '<div class="poem_flash" id="poem_flash_'.$row['ID'].'">';
		echo '<img class="poem_img" id="poem_img_'.$row['ID'].'"src="img/like.png" rel="'.$row['ID'].'">'; 
		echo '<span class="poem_span" id="poem_like_'.$row['ID'].'">'.$row['pLike'].'</span></div>';

		echo '<div calss="writer"> @' . $row['Name'] . '</div></div>';//显示数据库的内容
		echo "</div>"; 
	}
	echo "<div id='page_num'>";
	//echo "----------------------------<br>";
	if ($page != 1) { //页数不等于1
?>
	<h5>&nbsp </h5>
	<a href="allshow.php?page=<?php echo $page - 1;?>">上一页</a> <!--显示上一页-->
	<?php
	}
	for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
	?>
	<a href="allshow.php?page=<?php echo $i;?>"><?php echo $i ;?></a>
	<?php
	}
	if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
	?>
	<a href="allshow.php?page=<?php echo $page + 1;?>">下一页</a>
	<?php
	}
	echo "</div>";
	//释放连接资源
	mysql_close($con);
	?>

<?php
/************foot****************/
include("foot.php");
?>
</body>
</html>
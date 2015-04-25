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

<!--add Like script -->
<script type="text/javascript">

	function addlike(x){
        var id = $(x).attr("rel");
        $(x).css("color","red");
        var url="love.php";    
        $.post(url, 
        {  
        id : id 
        }, 
        function(result){
                    if(result){
                    var position=result.indexOf("||");
                    var warningMessage=result.substring(0,position);
                    if(warningMessage=='success'){
                         var successMessage=result.substring(position+2);
                         //$("#poem_flash_"+id).html('&nbsp;');
                        
                         $("#pLike_"+id).html(successMessage);
                    }else{
                         var errorMessage=result.substring(position+2);
                         //love.html(errorMessage);
                         $("#pLike_"+id).html(errorMessage)
                    }
                }
        });       
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
	<div class="row">

<?php 
include_once("connect.php");

mysql_select_db("a0209115716");


$perNumber=28; //每页显示的记录数
$page=@$_GET['page']?$_GET['page']:1; //获得当前的页面值
//mysql_query("select * from threeline order by ID desc ");
$count=mysql_query("select count(*) from threeline"); //获得记录总数
$rs=mysql_fetch_array($count); 
$totalNumber=$rs[0];
$totalPage=ceil($totalNumber/$perNumber); //计算出总页数

$startCount=($page-1)*$perNumber; //分页开始,根据此方法计算出开始的记录
$result=mysql_query("select * from threeline order by ID desc limit $startCount,$perNumber" ); //根据前面的计算出开始的记录和记录数


	while ($row=mysql_fetch_array($result)) {

        echo '<div class="col-sm-6 col-md-4 col-lg-3"><div class="thumbnail">';

        $i = $row['ID'] % 4;
        switch ($i)
		{
			case 1:
  				echo '<div class="bg-primary box_head" >';
  				break;
			case 2:
  				echo '<div class="bg-info box_head" >';
  				break;
			case 3:
  				echo '<div class="bg-success box_head" >';
  				break;
			default:
  				echo '<div class="bg-danger box_head" >';
		}

        
        
        echo '<p><span class="float-left"><i class="fa fa-send-o "></i>  '. $row['Theme'] . '</span>
              <span class="float-right">'. $row['ID'] . '</span></p>';

        echo  '</div> <div class="caption">';
        echo  '<p>'. $row['First'] . '</p>';
        echo  '<p>'. $row['Second'] . '</p>';
        echo  '<p>'. $row['Third'] . '</p>';
        echo  '<br/>';
        echo  '<div class="text-muted box_foot"><div class="float-left"><small>@'. $row['Name'] .'</small></div>';
        echo  '<div class="float-right"><small><i id="heart_'.$row['ID'].'" class="fa fa-heart-o" rel="'.$row['ID'].'" onclick="addlike(this)" ></i></small> <small><span id="pLike_'.$row['ID'].'">'.$row['pLike'].'</span></small></div></div>';
        echo   '</div></div></div>';
	}


	echo "</div></div>";

	echo '<div class="center-block text-center"><nav><ul class="pagination">';
	//echo "----------------------------<br>";
	if ($page != 1) { //页数不等于1
?>

	<li><a href="allshow.php?page=<?php echo $page - 1;?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li> <!--显示上一页-->
	<?php
	}
	for ($i=1;$i<=$totalPage;$i++) {  //循环显示出页面
	?>
	<li><a href="allshow.php?page=<?php echo $i;?>"><?php echo $i ;?></a></li>
	<?php
	}
	if ($page<$totalPage) { //如果page小于总页数,显示下一页链接
	?>
	<li><a href="allshow.php?page=<?php echo $page + 1;?>" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>
	<?php
	}
	echo "</ul></nav></div>";

	//释放连接资源
	mysql_close($con);
	?>

<?php
/************page footer ****************/
include("footer.php");
?>
</body>
</html>
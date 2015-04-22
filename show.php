<?php
include("connect.php");

mysql_select_db("a0209115716", $con);

$result = mysql_query("SELECT * FROM threeline WHERE ID='$_GET[ID]'");
?>
<div class="single_poem">
<?php
//echo "<table border='1'>";
/*<tr>
<th>ID :</th>
<th>First :</th>
<th>Second :</th>
<th>Third :</th>
<th>Name</th>
</tr>*/

while($row = mysql_fetch_array($result))
  {
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="感叹握不住的流沙，抓不住的流年，总有一些话想对清华说，想对TA说！" />
<meta name="Keywords" content="三行情诗，祖国，母校，亲人，TA" />

<meta name="viewport" content="width=device-width,height=device-height,inital-scale=1.0,maximum-scale=1.0,user-scalable=no;">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title><?php echo $row['First'] .' '.$row['Second'].'...';?>三行情诗</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
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
<img src="img/mmd.jpg" width="0" height="0" />
<div id="head"><p>三行情诗·清华</p></div>
   
<?php
 
 /* echo "<div class='poem_content'>";
  //echo "<tr>" . $row['ID'] . "</tr>";
  echo "<p>" . $row['First'] . "</p>";
  echo "<p>" . $row['Second'] . "</p>";
  echo "<p>" . $row['Third'] . "</p>";
  echo "</div>";
  echo "<br><br><br><br><br><div class='writer'> <p>@" . $row['Name'] . "</p></div>";
  echo "<p><br>&nbsp</p>";*/
    echo "<div class='single_poem'>";
    echo "<div class='poem_content'>";
    echo "<p>" . $row['First'] . "</p>";
    echo "<p>" . $row['Second'] . "</p>";
    echo "<p>" . $row['Third'] . "</p>";
    echo "</div>";
    echo "<br><br><br><br>";
    echo '<div  class="poem_foot">';

    echo '<div class="poem_flash" id="poem_flash_'.$row['ID'].'">';
    echo '<img class="poem_img" id="poem_img_'.$row['ID'].'"src="img/like.png" rel="'.$row['ID'].'">'; 
    echo '<span class="poem_span" id="poem_like_'.$row['ID'].'">'.$row['pLike'].'</span></div>';

    echo '<div calss="writer"> @' . $row['Name'] . '</div></div>';//显示数据库的内容
    echo "</div>"; 
    echo "<p><br>&nbsp</p>";
  echo '<h6 class="explain"> 分享到朋友圈让小伙伴看看！</h6>';
  //echo '<div class="nondispaly" ><img src="img/3line.png"></div>';
  }


mysql_close($con);
?>
</div>
<?php
include("foot.php");
?>
</body>
</html>
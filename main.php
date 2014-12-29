<! doctype html>
<html>
<head>
<title>Pholic</title>

<style type = "text/css">
body {
	margin:0;
	padding:0;
	background: #000 url(/pholic/img/02.png) center center fixed no-repeat; 
	-moz-background-size: cover; background-size: cover;
	scrollbar-face-color: #transparent; scrollbar-highlight-color: #transparent; scrollbar-shadow-color: #transparent; scrollbar-3dlight-color: #transparent; scrollbar-arrow-color: #transparent; scrollbar-track-color: #transparent; scrollbar-darkshadow-color: #transparent;}
.mid{
    vertical-align:middle;}
.bottom{
    vertical-align:bottom;}
a{
	text-decoration:none;}
b {
	position:relative; top:25px; left:45%;}
b1 {
	position:relative; top:10px;}
p { 
	position:relative; top:5%; left:25%; white-space: nowrap;}
y { 
	position:relative; top:1%; left:20%;}
x {
	position:fixed; top:20%; left:15%;}
z {
	position:relative; top:3%; left:45%;}

div#container{100%}
div#space{height:90%; width:20%; float:left}
div#header{height:15%; width:100%}
div#menu{height:80%; width:25%; float:right}
div#title{height:10%; width:75%}
div#content{height:70%; width:75%;overflow-x:hidden; overflow-y:scroll}
div#footer{clear:both; text-align:center}
ul{margin:0}
li{list-style:none; font-family: "Microsoft JhengHei";}
h1{font-size:500%; font-family: "Forte", cursive; position:fixed; left:15%;margin-top:1%}
h2{font-size:300%; font-family: "Brush Script MT", cursive; position:fixed; top:20%; left:77%;}
h3{font-family: Comic Sans MS,arial,helvetica,sans-serif; position:relative; top:20%; left:15%;}
</style>

</head> 
                        
<body text="black" link="black" alink="black" vlink="black"> 
<div id= "container">

<div id= "header"  align = "left">
<h1><i>Pholic</i></h1></div>

<div id= "menu"  align = "left">
<h2><i>MORE</i></h2></br>
<h3><form method="post" enctype="multipart/form-data" action="/pholic/post_upload.php"></h3>
<h3><img src="/pholic/img/007.png"></a></br></h3>
<?php


@$link=mysqli_connect('localhost','root','','pholic');

if (@!mysqli_select_db($link,'pholic'))
die("<p>無法開啟資料庫</br>");

mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci");

$sql="SELECT distinct* FROM class ORDER BY class_no";
echo "<h3><select name = 'class'>";
if($result=mysqli_query($link,$sql)){  
  while($row=mysqli_fetch_assoc($result)){
    echo "<option value = '".$row["class_no"]."'>".$row["class_name"]."";  
  }
  echo"</select></br></h3>";
}
?>
<h3><b1><input name="file" type="file"></br><input name="upload" type="submit" value="上傳"></b1></h3>
<h3><a href = "/pholic/profile.php"><img src="/pholic/img/008.png"></a></br><a href = "/pholic/post_user_manage.php"><img src="/pholic/img/012.png"></a></br><a href = "/pholic/logout.php"><img src="/pholic/img/009.png"></a></br></h3>
</form>
</div>

<div id= "title" align = "left"><x>
<?php
//session_start();
//include("log_in.php");

@$link=mysqli_connect('localhost','root','','pholic');

if (@!mysqli_select_db($link,'pholic'))
die("<p>無法開啟資料庫</br>");

mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci'");

$sql="SELECT distinct* FROM class ORDER BY class_no";

if($result=mysqli_query($link,$sql)){ 
  while($row=mysqli_fetch_assoc($result)){
    echo "<a href='main_class.php?class_no=".@$row["class_no"]."'><img src=/pholic/img/".@$row["class_pic"].">  </a>";  
  }    
}
?>
</br></x></div>

<div id= "content">
<?php

@$link=mysqli_connect('localhost','root','','pholic');
mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci'");

if (@!mysqli_select_db($link,'pholic'))
die("<p>無法開啟資料庫</br>");

$sql="SELECT distinct* FROM post,user WHERE post.mail=user.mail ORDER BY post_no DESC";

if($result=mysqli_query($link,$sql)){
  while($row=mysqli_fetch_assoc($result)){
    echo "<form method='post' enctype='multipart/form-data' action='/pholic/reply_upload.php'>";
	echo "<p><img src = \"/pholic/img/".$row["user_pic"]."\"width = '60' height = '60' class='mid'/><font size='5' face='微軟正黑體'>".$row["user_name"]."</font></br>";
    echo "<y><img src = \"/pholic/img/".$row["post_pic"]."\" width = '300' height = '300'/></br>";	
	$sql2="select count(*) from eyes where post_no =".$row["post_no"];
	if($result2=mysqli_query($link,$sql2)){
	  while($row2=mysqli_fetch_assoc($result2)){
		@$count = $row2['count(*)'];
		echo "</br><a href='eyes.php?post_no=".@$row["post_no"]."'><img src = '/pholic/img/like.png' width = '30' height = '30' class='bottom'/>".$count;
	  }
	}else{
		echo "</br><a href='eyes.php?post_no=".@$row["post_no"]."'><img src = '/pholic/img/like.png' width = '30' height = '30' class='bottom'/>0";
	}
	echo "</a>  發布時間：".$row["post_time"]."</br>";
	echo "<input type='hidden' name='post_no' value='".$row["post_no"]."' />";
	echo "<input name='file' type='file'><input name='upload' type='submit' value='回應'></form></br>";
	echo "---------------------------------------------------</br>";
	$sql_2="SELECT distinct* FROM user,reply WHERE reply.mail=user.mail and post_no=".$row["post_no"]." ORDER BY reply_no ASC";
	if($result_2=mysqli_query($link,$sql_2)){  
	  while($row_2=mysqli_fetch_assoc($result_2)){
		echo "<img src = \"/pholic/img/".$row_2["user_pic"]."\" width = '30' height = '30' class='mid'/><font size='3' face='微軟正黑體'>".$row_2["user_name"]."</font></br></br> ";
	    echo "<img src = \"/pholic/img/".$row_2["reply_pic"]."\" width = '200' height = '200'/></br>";
		echo "----------------------------------</br>";
	  }
	}
  }    
}
?>
</div>

</div></body>

</html>


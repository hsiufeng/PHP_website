  <title>Pholic</title>
  <style type = "text/css">
 body {
		margin:0;
		padding:0;
		background: #000 url(/pholic/img/02.png) center center fixed no-repeat; 
		-moz-background-size: cover; background-size: cover;
		scrollbar-face-color: #transparent; scrollbar-highlight-color: #transparent; scrollbar-shadow-color: #transparent; scrollbar-3dlight-color: #transparent; scrollbar-arrow-color: #transparent; scrollbar-track-color: #transparent; scrollbar-darkshadow-color: #transparent;
		}
.mid{
    vertical-align:middle;}

  a{text-decoration:none}
  p { 
    position:relative; top:5%; left:25%; }
  y { 
    position:relative; top:1%; left:25%; }
  x {
    position:fixed; top:20%; left:15%;}

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
  h3{font-family: Comic Sans MS,arial,helvetica,sans-serif; position:fixed; top:35%; left:77%;}
  h4{font-size:100%; font-family: "微軟正黑體", cursive; position:relative; left:25%;}
  h5{font-size:180%; font-family: "微軟正黑體", cursive; position:relative; left:25%}
    </style>
  </style>
</head>
<body text="black" link="black" alink="black" vlink="black">
<meta http-equiv="Content-Type" content="text/html; charset=big5" />

<div id= "container">

<div id= "header"  align = "left">
<h1><i>Pholic</i></h1></div>

<div id= "menu"  align = "left">
<h2><i>MORE</i></h2></br>
<h3><a href = "/pholic/main_manage.php"><img src="/pholic/img/007.png"></a></br><a href = "/pholic/profile_manage.php"><img src="/Pholic/img/008.png"></a></br><a href = "/pholic/post_manage.php"><img src="/pholic/img/010.png"></a></br><a href = "/pholic/manage.php"><img src="/Pholic/img/011.png"></a></br><a href = "/pholic/logout.php"><img src="/pholic/img/009.png"></a></br></h3></div>

<div id= "title" align = "left"><x>
<?php
session_start();
@$link=mysqli_connect('localhost','root','','pholic');

if (@!mysqli_select_db($link,'pholic'))
die("<p>無法開啟資料庫</br>");

mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci");

$sql="SELECT distinct* FROM class ORDER BY class_no";

if($result=mysqli_query($link,$sql)){  
  while($row=mysqli_fetch_assoc($result)){
    echo "<a href='main_class_manage.php?class_no=".$row["class_no"]."'><img src=/pholic/img/".$row["class_pic"].">  </a>";  
  }    
}
?>
</br></x></div>
  <div id='content' >
<?php
//session_start();
//include("log_in.php");

echo "<h5>使用者資料</h5>";
@$link=mysqli_connect('localhost','root','','pholic');
mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci'");

if (isset($_SESSION["mail"])) {
$mail=$_SESSION["mail"];
$sql="SELECT distinct* FROM user";

if (@!mysqli_select_db($link,'pholic'))
die("<p>無法開啟資料庫</br>");

if($result=mysqli_query($link,$sql)){ 
  while($row=mysqli_fetch_assoc($result)){
    echo "<form method='post' action='/pholic/changing_manage_del.php'>";
	echo "<h4>姓名: ".@$row["user_name"]."</h4>";
    echo "<h4>帳號: ".@$row["mail"]."</h4>";
    echo "<h4>生日: ".@$row["user_bday"]."</h4>";
    echo "<h4>大頭貼: <img src = \"/pholic/img/".$row["user_pic"]."\" width = '150' height = '150'>";
    echo "<input type='hidden' name='mail_del' value='".$row["mail"]."' />";
	echo "<input name='upload' type='submit' value='刪除使用者' /></h4><br/></form>";
	echo "<h4>----------------------------------------</br></h4>";
	//echo "<h4><input type='button' value='更換大頭貼' onclick='post_upload.php'/></h4>";
  }    
}
}else{echo "NO";}


?>
  </div></body>
</html>
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
  h4{font-size:100%; font-family: "�L�n������", cursive; position:relative; left:25%;}
  h5{font-size:180%; font-family: "�L�n������", cursive; position:relative; left:25%}
    </style>
  </style>
</head>
<body text="black" link="black" alink="black" vlink="black">
<meta http-equiv="Content-Type" content="text/html; charset=big5" />
<form method="post" action="/pholic/changing.php" enctype="multipart/form-data"> 
<div id= "container">

<div id= "header"  align = "left">
<h1><i>Pholic</i></h1></div>

<div id= "menu"  align = "left">
<h2><i>MORE</i></h2></br>
<h3><a href = "/pholic/main.php"><img src="/pholic/img/007.png"></a></br><a href = "/pholic/profile.php"><img src="/pholic/img/008.png"></a></br><a href = "/pholic/post_user_manage.php"><img src="/pholic/img/012.png"></a></br><a href = "/pholic/logout.php"><img src="/pholic/img/009.png"></a></br></h3></div>

<div id= "title" align = "left"><x>
<?php


@$link=mysqli_connect('localhost','root','','pholic');

if (@!mysqli_select_db($link,'pholic'))
die("<p>�L�k�}�Ҹ�Ʈw</br>");

mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci");

$sql="SELECT distinct* FROM class ORDER BY class_no";

if($result=mysqli_query($link,$sql)){ 
  while($row=mysqli_fetch_assoc($result)){
    echo "<a href='main_class.php?class_no=".@$row["class_no"]."'><img src=/pholic/img/".@$row["class_pic"].">  </a>";  
  }    
}
?>
</br></x></div>
  <div id='content' >
<?php
session_start();
//include("log_in.php");

echo "<h5>�ӤH���</h5>";
@$link=mysqli_connect('localhost','root','','pholic');
mysqli_query($link,'SET CHARACTER SET big5');
mysqli_query($link,"SET collation_connection='big5_chinese_ci'");

if (isset($_SESSION["mail"])) {
$mail=$_SESSION["mail"];
$sql="SELECT distinct* FROM user where user.mail='$mail'";

if (@!mysqli_select_db($link,'pholic'))
die("<p>�L�k�}�Ҹ�Ʈw</br>");

if($result=mysqli_query($link,$sql)){ 
  while($row=mysqli_fetch_assoc($result)){
    echo "<h4>�m�W: ".@$row["user_name"]."</h4>";
    echo "<h4>�b��: ".@$row["mail"]."</h4>";
    echo "<h4>�ͤ�: ".@$row["user_bday"]."</h4>";
    echo "<h4>�j�Y�K: <img src = \"/pholic/img/".$row["user_pic"]."\" width = '150' height = '150'></h4>";
    //echo "<h4><input type='button' value='�󴫤j�Y�K' onclick='post_upload.php'/></h4>";
  }    
}
}else{echo "NO";}
echo "<h4><input type='submit' value='�s��' onclick='self.location.href='changing.php''/></h4>";

?>
</form>
  </div></body>
</html>

<html>
<head>
<title>Pholic</title>
<style type = "text/css">
body {
		margin:0;
		padding:0;
		background: #000 url(/Pholic/img/home.jpg) center center fixed no-repeat; 
		-moz-background-size: cover; background-size: cover;
		scrollbar-face-color: #transparent; scrollbar-highlight-color: #transparent; scrollbar-shadow-color: #transparent; scrollbar-3dlight-color: #transparent; scrollbar-arrow-color: #transparent; scrollbar-track-color: #transparent; scrollbar-darkshadow-color: #transparent;
		}
    .mid{
    vertical-align:middle;}

a{text-decoration:none}
f { 
  position:fixed; 
  top:40%; 
  left:10%;  
}
y { 
  position:fixed; 
  top:20%; 
  left:45%; 
}
z{
  position:fixed; 
  top:1%; 
  left:43%;
}
p{
  position:fixed;
  left:50%
}
div#container{100%;}
div#space{height:90%; width:25%; float:left}
div#header{height:10%; width:100%}
div#menu{height:80%; width:25%; float:right}
div#title{height:5%; width:75%}
div#content{height:75%; width:75%}
div#footer{clear:both; text-align:center}
ul{margin:0}
li{list-style:none; font-family: "Microsoft JhengHei";}
h1{font-size:500%; font-family: "Forte", cursive;}
h2{font-size:300%; font-family: "Brush Script MT", cursive; position:fixed; top:5%; left:5%;}
h3{font-family: Comic Sans MS,arial,helvetica,sans-serif}
h4{font-size:100%; font-family: "微軟正黑體", cursive;}
h5{font-size:150%; font-family: "微軟正黑體", cursive;}
</style></head>


<body background = "/Pholic/img/home.jpg"  text = "black" link = "black" alink = "black" vlink = "black">

<div id="container">

<div id="space">
<f><form action="/Pholic/log_new.php" method="post">
<h5>申請帳號</h5>
<h4>名字: <input type="text" name="newusername"></h4>
<h4>帳號: <input type="text" name="newmail" placeholder="使用中電子郵件"></h4>
<h4>密碼: <input type="password" name="newpwd"></h4>
<h4>密碼確認: <input type="password" name="newpwd2"></h4>
<input type="submit" value="申請加入" ><br/>
</form></f>
</div>

<div id= "header"  align = "left">
<Z><h1>Pholic</h1></z></div>

<div id= "menu"  align = "left"></div>
<div id= "title" align = "left"></div>

<div id="content" align = "left">
<y><form action="/Pholic/log_in.php" method="post">
<br/>
<h4>帳號: <input type="text" name="mail" placeholder="電子郵件"></h4>
<h4>密碼: <input type="password" name="pwd"></h><br/></h4> 
<p><input type="submit" value="登入" ></p>                    
</form></y>
</div>

<div id= "footer">copyright</div>

</div></body>



</html>
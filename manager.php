<!DOCTYPE>
<html>
 <head>
  <title>棒壘球運動用品店</title>
  <link rel="StyleSheet" type="rext/css" href="mystyle.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
  <style>
   header, footer {display:block; clear:both; padding:5px; text-align:center}    
   article {display:block; float:right; width:75%; background:honeydew; padding:5px}
  </style>
 
  <script>
   document.createElement("header");
   document.createElement("article");
   document.createElement("footer");
  </script>
 </head>
 

 <body>
 
  <header>
   <h1><img src='http://img.miigii.com.tw/Files/News/20111012/76495b7938384d3a92e5c1326a36696d.jpg' width="50" height='50'>棒壘球運動用品店</h1>
  <?php
     echo "<div align=right>";
     echo "管理者，您好！";
     echo "<a href='logout.php'>登出</a>";
  ?> 
  </header>
  
  </article>
  <hr>
  <center><table width=700 >
    <tr>
      <td width=350><center><a href="manage_member.php"><input type=button value=管理會員 name=muser style="width:250px;height:200px;font-size:50px;"></a></center></td>
      <td width=350><center><a href="manage_product.php"><input type=button value=管理商品 name=mproduct style="width:250px;height:200px;font-size:50px;"></a></center></td>      
    </tr>
    <tr>
      <td width=350><center><a href="manage_store.php"><input type=button value=管理店家 name=mstore style="width:250px;height:200px;font-size:50px;"></a></center></td>
      <td width=350><center><a href="manage_discuss.php"><input type=button value=管理討論區 name=mdiscuss style="width:250px;height:200px;font-size:50px;"></a></center></td>      
    </tr>
  </table></center>
  
  
  <footer>
   <p align="center">訪客人數</p>
   <a href="http://www.ul5.com"><img src="http://www.ul5.com/cddb4608388287fc3ce319f653117b04d.jpg" alt="??????UL5" border="0"></a>
  </footer>   
 </body>
</html>
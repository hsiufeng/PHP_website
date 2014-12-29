<!DOCTYPE>
<html>
 <head>
  <title>棒壘球運動用品店</title>
  <link rel="StyleSheet" type="rext/css" href="mystyle.css">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
 
  <style>
   header {display:block; clear:both; padding:5px; text-align:center}    
   article {display:block; width:100%; background:honeydew; padding:5px}
   footer {display:block; clear:both; padding:5px; text-align:center}
  </style>
 
  <script>
   document.createElement("header");
   document.createElement("article");
   document.createElement("footer");
  </script>
 </head>
 
 
 <body>
 <form action="" method="POST">
    <header>
   <center>
   <h1><img src='http://img.miigii.com.tw/Files/News/20111012/76495b7938384d3a92e5c1326a36696d.jpg' width="50" height='50'>棒壘球運動用品店</h1>
   <div align=center>
   <a href="manager.php" class="myButton">管理者首頁</a>
   <a href="manage_member.php" class="myButton" size=200>管理會員</a>
   <a href="manage_store.php" class="myButton">管理店家</a>
   <a href="manage_product.php" class="myButton">管理商品</a>
   <a href="manage_discuss.php" class="myButton">管理討論區</a>
   </div>
   <div align=right>
   <a>管理者，您好！</a>
   <a href='logout.php'>登出</a> 
   </center>   
  </header>
  
  <article>
  <hr>
  <center><font color=red size=35px>請選擇欲刪除的會員</font></center>
  <br><br>
  <?php
      header('Content-type:text/html; charset=utf-8');       
      @$link=mysqli_connect('localhost','root','','sport');
      mysqli_query($link,'SET CHARACTER SET utf8');
      mysqli_query($link,"SET collation_connection='utf8_unicode_ci");
       
      
      @$deletemember=$_POST["member"];
      
      if (!empty($deletemember)){                                 //判斷是否有勾選
        for ($i=0 ; $i<count($deletemember) ;$i++){     //沒勾選就不會執行刪除
          $sql2="DELETE FROM `sport`.`member` WHERE `member`.`ID` = '$deletemember[$i]' ";
          $result=mysqli_query($link,$sql2);
        }                             
      }      
  
      @$sql="SELECT * FROM  member";  
                                          
      if (@!mysqli_select_db($link,'sport')){
        die("無法開啟網頁!");
      }else{               
          if($result=mysqli_query($link,$sql)){             
              echo "<center><table border=1 bordercolor=#37FDFF></center>";
              echo "<tr><td>刪除</td><td>會員名稱</td><td>會員帳號</td><td>會員密碼</td><td>信箱</td><td>性別</td><td>管理員</td>";               
              while($row=mysqli_fetch_assoc($result)){
                if($row["Supervisor"]==0){         //只印使用者(管理者不印)
                  echo "<tr>";
                  echo "<td><input type='checkbox' name='member[]' value='$row[ID]'></td>";
                  echo "<td>".$row["M_name"]."</td>";
                  echo "<td>".$row["ID"]."</td>";
                  echo "<td>".$row["Password"]."</td>";
                  echo "<td>".$row["M_email"]."</td>";
                  echo "<td>".$row["Sex"]."</td>";
                  echo "<td>".$row["Supervisor"]."</td>";
                  echo "</tr>";
                }                   
              } 
          } 
      }            
   echo "<input type=submit value=確認送出 onclick=alert('確定刪除?')>";   
  ?>
   
  </article>
  
 </form>  
   
 </body>
</html>